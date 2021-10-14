<?php

namespace Twh\UmengOpenAPI\App;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\APIId;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\APIRequest;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\exception\OceanException;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\policy\ClientPolicy;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\policy\RequestPolicy;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\SyncAPIClient;

abstract class AbstractApplication
{
    abstract protected function getOriginApiNamespace(): string;
    abstract protected function getOriginApiName(string $apiname): string;
    abstract protected function getParamObject();
    abstract protected function getResultObject();


    /**
     * @var integer
     */
    private $version = 1;

    /**
     * @var string
     */
    private $serverHost = 'gateway.open.umeng.com';

    /**
     * 请求的api name
     * @var string
     */
    protected $originApiName;

    /**
     * 调用的api name
     * @var string
     */
    protected $apiName = '';

    /**
     * @var array
     */
    protected $config;

    /**
     * @var array
     */
    private $defaultParam = [
        // umini 分页参数
        'pageIndex' => 1,
        'pageSize'  => 10,
        // apptrack 分页参数
        'pageNum'   => 1,
        // uapp 分页参数
        'page'      => 1,
        'perPage'   => 10,
    ];

    /**
     * @var array
     */
    private $defaultConfig = [
        'request_policy' => [ //request config
            'needAuthorization'    => false,
            'requestSendTimestamp' => false,
            'useHttps'             => true,
            'useSignture'          => true,
            'accessPrivateApi'     => false,
        ],
        'response_type' => 'array',
    ];

    /**
     * @var ClientPolicy
     */
    protected $clientPolicy;

    /**
     * @var SyncAPIClient
     */
    protected $syncAPIClient;

    /**
     * @var RequestPolicy
     */
    protected $requestPolicy;

    /**
     * @var APIId
     */
    protected $apiId;

    /**
     * @var Object
     */
    protected $paramObject;

    /**
     * @var Object
     */
    protected $resultObject;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->clientPolicy = new ClientPolicy($config['api_key'], $config['api_secret'], $config['server_host'] ?? $this->serverHost);
        $this->syncAPIClient = new SyncAPIClient($this->clientPolicy);
        $this->requestPolicy = new RequestPolicy();
        $this->config = array_replace_recursive($this->defaultConfig, $this->config);
        $this->setRequestConig($this->config['request_policy']);
    }

    /**
     * 设置请求对象
     *
     * @param array|string|mixed $config
     * @param mixed $value
     * @return self
     */
    public function setRequestConig($config, $value = null)
    {
        if (is_array($config)) {
            foreach($config as $key => $val) {
                $this->requestPolicy->$key = $val;
            }
        } else if (!is_object($config) && !empty($config)){
            $this->requestPolicy->$config = $value;
        } else {
            // object
        }
    }

    /**
     * 调用的api名称
     * 例: "getTotalUser" (对应文档中com.umeng.umini:umeng.umini.getTotalUser-1)
     *
     * @param string $name
     * @return self
     */
    public function api(string $name, string $httpMethod = 'POST'): self
    {
        $this->apiName = lcfirst($name);
        $this->setRequestConig('httpMethod', $httpMethod);
        $this->paramObject = $this->getParamObject();
        $this->resultObject = $this->getResultObject();
        $this->apiId = new APIId($this->getOriginApiNamespace(), $this->getOriginApiName($this->apiName), $this->version);
        return $this;
    }

    /**
     * 请求参数对象
     *
     * @param array $param
     * @return self
     */
    public function param(array $param): self
    {
        if (method_exists($this->paramObject, 'setDataSourceId')) { //umini
            $this->paramObject->setDataSourceId($this->config['app_key']);
        } else if (method_exists($this->paramObject, 'setAppkey')){ //uapp || apptrack
            $this->paramObject->setAppkey($this->config['app_key']);
        } else {
            // ..
        }
        $param = array_merge($this->defaultParam, $param);
        foreach ($param as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this->paramObject, $method)){
                call_user_func_array([$this->paramObject, $method], [$value]);
            }
        }
        return $this;
    }

    /**
     * 获取请求结果
     *
     *
     * @return self
     */
    public function get(string $name, array $param = [], string $httpMethod = 'POST')
    {
        $this->api($name, $httpMethod)->param($param);

        $request = new APIRequest();
        $request->apiId = $this->apiId;
        $request->requestEntity = $this->paramObject;

        $response = $this->syncAPIClient->send($request, $this->resultObject, $this->requestPolicy, true);

        switch($this->config['response_type']) {
            case 'array':
                return json_decode($response, true);
            case 'json':
                return $response;
            case 'object':
                return json_decode($response);
            case 'raw':
                return $this->resultObject;
            default:
                return $response;
        }
    }
}