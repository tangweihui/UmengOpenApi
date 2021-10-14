<?php
namespace Twh\UmengOpenAPI\com\umeng\uapp\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUappGetAppListParam
{

        
        /**
    * @return 页号，从1开始
    */
    public function getPage()
    {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页号，从1开始
     * @param Integer $page
     * 参数示例：<pre>1</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPage($page)
    {
        $this->sdkStdResult["page"] = $page;
    }
    
        
    /**
    * @return 每页显示数量（最大100）
    */
    public function getPerPage()
    {
        $tempResult = $this->sdkStdResult["perPage"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示数量（最大100）
     * @param Integer $perPage
     * 参数示例：<pre>10</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPerPage($perPage)
    {
        $this->sdkStdResult["perPage"] = $perPage;
    }
    
        
    /**
    * @return
    */
    public function getAccessToken()
    {
        $tempResult = $this->sdkStdResult["accessToken"];
        return $tempResult;
    }
    
    /**
     * 设置
     * @param String $accessToken
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setAccessToken($accessToken)
    {
        $this->sdkStdResult["accessToken"] = $accessToken;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
