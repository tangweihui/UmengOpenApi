<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiShareUserDTO extends SDKDomain
{
    private $reflowRatio;
    
    /**
    * @return 分享回流比
    */
    public function getReflowRatio()
    {
        return $this->reflowRatio;
    }
    
    /**
     * 设置分享回流比
     * @param Double $reflowRatio
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setReflowRatio($reflowRatio)
    {
        $this->reflowRatio = $reflowRatio;
    }
    
            
    private $avatarUrl;
    
    /**
    * @return 头像URL
    */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }
    
    /**
     * 设置头像URL
     * @param String $avatarUrl
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }
    
            
    private $reflow;
    
    /**
    * @return 用户回流量
    */
    public function getReflow()
    {
        return $this->reflow;
    }
    
    /**
     * 设置用户回流量
     * @param Long $reflow
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setReflow($reflow)
    {
        $this->reflow = $reflow;
    }
    
            
    private $nickName;
    
    /**
    * @return 用户名
    */
    public function getNickName()
    {
        return $this->nickName;
    }
    
    /**
     * 设置用户名
     * @param String $nickName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;
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
    * @return 分享回流量
    */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * 设置分享回流量
     * @param Long $count
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    
            
    private $userId;
    
    /**
    * @return 用户ID
    */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * 设置用户ID
     * @param String $userId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("reflowRatio", $this->stdResult)) {
            $this->reflowRatio = $this->stdResult->{"reflowRatio"};
        }
        if (array_key_exists("avatarUrl", $this->stdResult)) {
            $this->avatarUrl = $this->stdResult->{"avatarUrl"};
        }
        if (array_key_exists("reflow", $this->stdResult)) {
            $this->reflow = $this->stdResult->{"reflow"};
        }
        if (array_key_exists("nickName", $this->stdResult)) {
            $this->nickName = $this->stdResult->{"nickName"};
        }
        if (array_key_exists("newUser", $this->stdResult)) {
            $this->newUser = $this->stdResult->{"newUser"};
        }
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("userId", $this->stdResult)) {
            $this->userId = $this->stdResult->{"userId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("reflowRatio", $this->arrayResult)) {
            $this->reflowRatio = $arrayResult['reflowRatio'];
        }
        if (array_key_exists("avatarUrl", $this->arrayResult)) {
            $this->avatarUrl = $arrayResult['avatarUrl'];
        }
        if (array_key_exists("reflow", $this->arrayResult)) {
            $this->reflow = $arrayResult['reflow'];
        }
        if (array_key_exists("nickName", $this->arrayResult)) {
            $this->nickName = $arrayResult['nickName'];
        }
        if (array_key_exists("newUser", $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists("userId", $this->arrayResult)) {
            $this->userId = $arrayResult['userId'];
        }
    }
}
