<?php
namespace Twh\UmengOpenAPI\com\umeng\apptrack\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengApptrackAppDownload extends SDKDomain
{
    private $unitId;
    
    /**
    * @return 监测单元id
    */
    public function getUnitId()
    {
        return $this->unitId;
    }
    
    /**
     * 设置监测单元id
     * @param Long $unitId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUnitId($unitId)
    {
        $this->unitId = $unitId;
    }
    
            
    private $mName;
    
    /**
    * @return 监测单元名称
    */
    public function getMName()
    {
        return $this->mName;
    }
    
    /**
     * 设置监测单元名称
     * @param String $mName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMName($mName)
    {
        $this->mName = $mName;
    }
    
            
    private $planName;
    
    /**
    * @return 推广计划名称
    */
    public function getPlanName()
    {
        return $this->planName;
    }
    
    /**
     * 设置推广计划名称
     * @param String $planName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;
    }
    
            
    private $chanName;
    
    /**
    * @return 渠道名称
    */
    public function getChanName()
    {
        return $this->chanName;
    }
    
    /**
     * 设置渠道名称
     * @param String $chanName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setChanName($chanName)
    {
        $this->chanName = $chanName;
    }
    
            
    private $type;
    
    /**
    * @return 激活类型：
iOS如：IDFA、IDFV、MAC等
Android如：IMEI、ANDROID_ID、OAID等
    */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * 设置激活类型：
iOS如：IDFA、IDFV、MAC等
Android如：IMEI、ANDROID_ID、OAID等
     * @param String $type
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
            
    private $deviceId;
    
    /**
    * @return 激活设备id，其中IDFA、IMEI基于原值做md5加密，其他为原值
    */
    public function getDeviceId()
    {
        return $this->deviceId;
    }
    
    /**
     * 设置激活设备id，其中IDFA、IMEI基于原值做md5加密，其他为原值
     * @param String $deviceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }
    
            
    private $clickDate;
    
    /**
    * @return 点击日期：20200116
    */
    public function getClickDate()
    {
        return $this->clickDate;
    }
    
    /**
     * 设置点击日期：20200116
     * @param String $clickDate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setClickDate($clickDate)
    {
        $this->clickDate = $clickDate;
    }
    
            
    private $activeDate;
    
    /**
    * @return 激活日期：20200116
    */
    public function getActiveDate()
    {
        return $this->activeDate;
    }
    
    /**
     * 设置激活日期：20200116
     * @param String $activeDate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setActiveDate($activeDate)
    {
        $this->activeDate = $activeDate;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("unitId", $this->stdResult)) {
            $this->unitId = $this->stdResult->{"unitId"};
        }
        if (array_key_exists("mName", $this->stdResult)) {
            $this->mName = $this->stdResult->{"mName"};
        }
        if (array_key_exists("planName", $this->stdResult)) {
            $this->planName = $this->stdResult->{"planName"};
        }
        if (array_key_exists("chanName", $this->stdResult)) {
            $this->chanName = $this->stdResult->{"chanName"};
        }
        if (array_key_exists("type", $this->stdResult)) {
            $this->type = $this->stdResult->{"type"};
        }
        if (array_key_exists("deviceId", $this->stdResult)) {
            $this->deviceId = $this->stdResult->{"deviceId"};
        }
        if (array_key_exists("clickDate", $this->stdResult)) {
            $this->clickDate = $this->stdResult->{"clickDate"};
        }
        if (array_key_exists("activeDate", $this->stdResult)) {
            $this->activeDate = $this->stdResult->{"activeDate"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("unitId", $this->arrayResult)) {
            $this->unitId = $arrayResult['unitId'];
        }
        if (array_key_exists("mName", $this->arrayResult)) {
            $this->mName = $arrayResult['mName'];
        }
        if (array_key_exists("planName", $this->arrayResult)) {
            $this->planName = $arrayResult['planName'];
        }
        if (array_key_exists("chanName", $this->arrayResult)) {
            $this->chanName = $arrayResult['chanName'];
        }
        if (array_key_exists("type", $this->arrayResult)) {
            $this->type = $arrayResult['type'];
        }
        if (array_key_exists("deviceId", $this->arrayResult)) {
            $this->deviceId = $arrayResult['deviceId'];
        }
        if (array_key_exists("clickDate", $this->arrayResult)) {
            $this->clickDate = $arrayResult['clickDate'];
        }
        if (array_key_exists("activeDate", $this->arrayResult)) {
            $this->activeDate = $arrayResult['activeDate'];
        }
    }
}
