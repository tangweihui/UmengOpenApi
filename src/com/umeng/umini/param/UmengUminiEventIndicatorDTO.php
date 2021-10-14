<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiEventIndicatorDTO extends SDKDomain
{
    private $dateTime;
    
    /**
    * @return 时间
    */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    
    /**
     * 设置时间
     * @param String $dateTime
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }
    
            
    private $count;
    
    /**
    * @return 触发次数
    */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * 设置触发次数
     * @param Long $count
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    
            
    private $device;
    
    /**
    * @return 触发用户数
    */
    public function getDevice()
    {
        return $this->device;
    }
    
    /**
     * 设置触发用户数
     * @param Long $device
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDevice($device)
    {
        $this->device = $device;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("dateTime", $this->stdResult)) {
            $this->dateTime = $this->stdResult->{"dateTime"};
        }
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("device", $this->stdResult)) {
            $this->device = $this->stdResult->{"device"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("dateTime", $this->arrayResult)) {
            $this->dateTime = $arrayResult['dateTime'];
        }
        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists("device", $this->arrayResult)) {
            $this->device = $arrayResult['device'];
        }
    }
}
