<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiEventDTO extends SDKDomain
{
    private $eventName;
    
    /**
    * @return 事件名
    */
    public function getEventName()
    {
        return $this->eventName;
    }
    
    /**
     * 设置事件名
     * @param String $eventName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }
    
            
    private $displayName;
    
    /**
    * @return 事件显示名
    */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    
    /**
     * 设置事件显示名
     * @param String $displayName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("eventName", $this->stdResult)) {
            $this->eventName = $this->stdResult->{"eventName"};
        }
        if (array_key_exists("displayName", $this->stdResult)) {
            $this->displayName = $this->stdResult->{"displayName"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("eventName", $this->arrayResult)) {
            $this->eventName = $arrayResult['eventName'];
        }
        if (array_key_exists("displayName", $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
    }
}
