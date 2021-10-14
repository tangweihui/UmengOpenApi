<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiShareIndicatorDTO extends SDKDomain
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
    
            
    private $reflowRatio;
    
    /**
    * @return 回流比
    */
    public function getReflowRatio()
    {
        return $this->reflowRatio;
    }
    
    /**
     * 设置回流比
     * @param String $reflowRatio
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setReflowRatio($reflowRatio)
    {
        $this->reflowRatio = $reflowRatio;
    }
    
            
    private $reflow;
    
    /**
    * @return 分享回流量
    */
    public function getReflow()
    {
        return $this->reflow;
    }
    
    /**
     * 设置分享回流量
     * @param Long $reflow
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setReflow($reflow)
    {
        $this->reflow = $reflow;
    }
    
            
    private $newUser;
    
    /**
    * @return 分享新增
    */
    public function getNewUser()
    {
        return $this->newUser;
    }
    
    /**
     * 设置分享新增
     * @param Long $newUser
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
    }
    
            
    private $count;
    
    /**
    * @return 分享次数
    */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * 设置分享次数
     * @param Long $count
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    
            
    private $user;
    
    /**
    * @return 分享人数
    */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * 设置分享人数
     * @param Long $user
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUser($user)
    {
        $this->user = $user;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("dateTime", $this->stdResult)) {
            $this->dateTime = $this->stdResult->{"dateTime"};
        }
        if (array_key_exists("reflowRatio", $this->stdResult)) {
            $this->reflowRatio = $this->stdResult->{"reflowRatio"};
        }
        if (array_key_exists("reflow", $this->stdResult)) {
            $this->reflow = $this->stdResult->{"reflow"};
        }
        if (array_key_exists("newUser", $this->stdResult)) {
            $this->newUser = $this->stdResult->{"newUser"};
        }
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("user", $this->stdResult)) {
            $this->user = $this->stdResult->{"user"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("dateTime", $this->arrayResult)) {
            $this->dateTime = $arrayResult['dateTime'];
        }
        if (array_key_exists("reflowRatio", $this->arrayResult)) {
            $this->reflowRatio = $arrayResult['reflowRatio'];
        }
        if (array_key_exists("reflow", $this->arrayResult)) {
            $this->reflow = $arrayResult['reflow'];
        }
        if (array_key_exists("newUser", $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists("user", $this->arrayResult)) {
            $this->user = $arrayResult['user'];
        }
    }
}
