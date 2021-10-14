<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiGetEventProvertyListParam
{

        
        /**
    * @return 事件
    */
    public function getEventName()
    {
        $tempResult = $this->sdkStdResult["eventName"];
        return $tempResult;
    }
    
    /**
     * 设置事件
     * @param String $eventName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->sdkStdResult["eventName"] = $eventName;
    }
    
        
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
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
