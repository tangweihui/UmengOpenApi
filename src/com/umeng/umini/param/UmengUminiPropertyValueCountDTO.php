<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiPropertyValueCountDTO extends SDKDomain
{
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
    
            
    private $propertyValue;
    
    /**
    * @return 属性值
    */
    public function getPropertyValue()
    {
        return $this->propertyValue;
    }
    
    /**
     * 设置属性值
     * @param String $propertyValue
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPropertyValue($propertyValue)
    {
        $this->propertyValue = $propertyValue;
    }
    
            
    private $countRatio;
    
    /**
    * @return 触发次数占比
    */
    public function getCountRatio()
    {
        return $this->countRatio;
    }
    
    /**
     * 设置触发次数占比
     * @param Double $countRatio
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCountRatio($countRatio)
    {
        $this->countRatio = $countRatio;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("propertyValue", $this->stdResult)) {
            $this->propertyValue = $this->stdResult->{"propertyValue"};
        }
        if (array_key_exists("countRatio", $this->stdResult)) {
            $this->countRatio = $this->stdResult->{"countRatio"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists("propertyValue", $this->arrayResult)) {
            $this->propertyValue = $arrayResult['propertyValue'];
        }
        if (array_key_exists("countRatio", $this->arrayResult)) {
            $this->countRatio = $arrayResult['countRatio'];
        }
    }
}
