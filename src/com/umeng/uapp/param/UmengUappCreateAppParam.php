<?php
namespace Twh\UmengOpenAPI\com\umeng\uapp\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUappCreateAppParam
{

        
        /**
    * @return 名称
    */
    public function getName()
    {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->sdkStdResult["name"] = $name;
    }
    
        
    /**
    * @return 类型
    */
    public function getType()
    {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置类型
     * @param String $type
     * 参数示例：<pre>app:应用;</pre>
     * 此参数必填     */
    public function setType($type)
    {
        $this->sdkStdResult["type"] = $type;
    }
    
        
    /**
    * @return 平台
    */
    public function getPlatform()
    {
        $tempResult = $this->sdkStdResult["platform"];
        return $tempResult;
    }
    
    /**
     * 设置平台
     * @param String $platform
     * 参数示例：<pre>iphone:iPhone; ipad:iPad; android:Android; wphone:WinPhone; h5app:HTML5;</pre>
     * 此参数必填     */
    public function setPlatform($platform)
    {
        $this->sdkStdResult["platform"] = $platform;
    }
    
        
    /**
    * @return 语言
    */
    public function getLanguage()
    {
        $tempResult = $this->sdkStdResult["language"];
        return $tempResult;
    }
    
    /**
     * 设置语言
     * @param String $language
     * 参数示例：<pre>CN:中文; OTHER:其他</pre>
     * 此参数必填     */
    public function setLanguage($language)
    {
        $this->sdkStdResult["language"] = $language;
    }
    
        
    /**
    * @return 一级分类
    */
    public function getFirstLevel()
    {
        $tempResult = $this->sdkStdResult["firstLevel"];
        return $tempResult;
    }
    
    /**
     * 设置一级分类
     * @param String $firstLevel
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFirstLevel($firstLevel)
    {
        $this->sdkStdResult["firstLevel"] = $firstLevel;
    }
    
        
    /**
    * @return 二级分类
    */
    public function getSecondLevel()
    {
        $tempResult = $this->sdkStdResult["secondLevel"];
        return $tempResult;
    }
    
    /**
     * 设置二级分类
     * @param String $secondLevel
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSecondLevel($secondLevel)
    {
        $this->sdkStdResult["secondLevel"] = $secondLevel;
    }
    
        
    /**
    * @return 描述
    */
    public function getDescription()
    {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置描述
     * @param String $description
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setDescription($description)
    {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
