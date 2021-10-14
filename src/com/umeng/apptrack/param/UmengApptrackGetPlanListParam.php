<?php
namespace Twh\UmengOpenAPI\com\umeng\apptrack\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengApptrackGetPlanListParam
{

        
        /**
    * @return 应用appKey
    */
    public function getAppKey()
    {
        $tempResult = $this->sdkStdResult["appKey"];
        return $tempResult;
    }
    
    /**
     * 设置应用appKey
     * @param String $appKey
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setAppKey($appKey)
    {
        $this->sdkStdResult["appKey"] = $appKey;
    }
    
        
    /**
    * @return 当前页数
    */
    public function getPageNum()
    {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数
     * @param Integer $pageNum
     * 参数示例：<pre>1</pre>
     * 此参数为可选参数

     * 默认值：<pre>1</pre>
          */
    public function setPageNum($pageNum)
    {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
    /**
    * @return 每页显示的记录数
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示的记录数
     * @param Integer $pageSize
     * 参数示例：<pre>10</pre>
     * 此参数为可选参数

     * 默认值：<pre>10</pre>
          */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
