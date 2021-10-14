<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiGetAppListParam
{

        
        /**
    * @return 页码
    */
    public function getPageIndex()
    {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置页码
     * @param Integer $pageIndex
     * 参数示例：<pre>1</pre>
     * 此参数为可选参数

     * 默认值：<pre>1</pre>
          */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
    /**
    * @return 每页记录数
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页记录数
     * @param Integer $pageSize
     * 参数示例：<pre>30</pre>
     * 此参数为可选参数

     * 默认值：<pre>30</pre>
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
