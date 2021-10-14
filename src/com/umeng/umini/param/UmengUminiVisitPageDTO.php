<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiVisitPageDTO extends SDKDomain
{
    private $displayName;
    
    /**
    * @return 页面备注
    */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    
    /**
     * 设置页面备注
     * @param String $displayName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    
            
    private $pageDuration;
    
    /**
    * @return 平均页面访问时长
    */
    public function getPageDuration()
    {
        return $this->pageDuration;
    }
    
    /**
     * 设置平均页面访问时长
     * @param String $pageDuration
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPageDuration($pageDuration)
    {
        $this->pageDuration = $pageDuration;
    }
    
            
    private $page;
    
    /**
    * @return 页面URL
    */
    public function getPage()
    {
        return $this->page;
    }
    
    /**
     * 设置页面URL
     * @param String $page
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPage($page)
    {
        $this->page = $page;
    }
    
            
    private $visitUser;
    
    /**
    * @return 页面访问用户数
    */
    public function getVisitUser()
    {
        return $this->visitUser;
    }
    
    /**
     * 设置页面访问用户数
     * @param Long $visitUser
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitUser($visitUser)
    {
        $this->visitUser = $visitUser;
    }
    
            
    private $visitTimes;
    
    /**
    * @return 页面访问次数
    */
    public function getVisitTimes()
    {
        return $this->visitTimes;
    }
    
    /**
     * 设置页面访问次数
     * @param Long $visitTimes
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitTimes($visitTimes)
    {
        $this->visitTimes = $visitTimes;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("displayName", $this->stdResult)) {
            $this->displayName = $this->stdResult->{"displayName"};
        }
        if (array_key_exists("pageDuration", $this->stdResult)) {
            $this->pageDuration = $this->stdResult->{"pageDuration"};
        }
        if (array_key_exists("page", $this->stdResult)) {
            $this->page = $this->stdResult->{"page"};
        }
        if (array_key_exists("visitUser", $this->stdResult)) {
            $this->visitUser = $this->stdResult->{"visitUser"};
        }
        if (array_key_exists("visitTimes", $this->stdResult)) {
            $this->visitTimes = $this->stdResult->{"visitTimes"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("displayName", $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
        if (array_key_exists("pageDuration", $this->arrayResult)) {
            $this->pageDuration = $arrayResult['pageDuration'];
        }
        if (array_key_exists("page", $this->arrayResult)) {
            $this->page = $arrayResult['page'];
        }
        if (array_key_exists("visitUser", $this->arrayResult)) {
            $this->visitUser = $arrayResult['visitUser'];
        }
        if (array_key_exists("visitTimes", $this->arrayResult)) {
            $this->visitTimes = $arrayResult['visitTimes'];
        }
    }
}
