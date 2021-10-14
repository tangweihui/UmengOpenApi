<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiInitMultiLevelTreeParam
{

        
        /**
    * @return 数据源id
    */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }
    
    /**
     * 设置数据源id
     * @param String $dataSourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }
    
        
    /**
    * @return JSON层级分组结构（最多五级）；
    */
    public function getTreeJson()
    {
        $tempResult = $this->sdkStdResult["treeJson"];
        return $tempResult;
    }
    
    /**
     * 设置JSON层级分组结构（最多五级）；
     * @param String $treeJson
     * 参数示例：<pre>{"head":["国家","省","城市","门店"],"rows":[["中国","北京","朝阳区","金辉大厦店"],["中国","北京","朝阳区","绿地中心店"]]}</pre>
     * 此参数必填     */
    public function setTreeJson($treeJson)
    {
        $this->sdkStdResult["treeJson"] = $treeJson;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
