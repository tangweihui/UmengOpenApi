<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiEditMiniAppParam
{

        
        /**
    * @return 数据源appkey
    */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }
    
    /**
     * 设置数据源appkey
     * @param String $dataSourceId
     * 参数示例：<pre>5e8c6dea978eea071c37c682</pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }
    
        
    /**
    * @return 平台(不可编辑)
    */
    public function getPlatform()
    {
        $tempResult = $this->sdkStdResult["platform"];
        return $tempResult;
    }
    
    /**
     * 设置平台(不可编辑)
     * @param String $platform
     * 参数示例：<pre>mini_wechat</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPlatform($platform)
    {
        $this->sdkStdResult["platform"] = $platform;
    }
    
        
    /**
    * @return 应用名称
    */
    public function getName()
    {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置应用名称
     * @param String $name
     * 参数示例：<pre>应用名称</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setName($name)
    {
        $this->sdkStdResult["name"] = $name;
    }
    
        
    /**
    * @return 语言(CN:中文; OTHER:其他)
    */
    public function getLanguage()
    {
        $tempResult = $this->sdkStdResult["language"];
        return $tempResult;
    }
    
    /**
     * 设置语言(CN:中文; OTHER:其他)
     * @param String $language
     * 参数示例：<pre>CN</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setLanguage($language)
    {
        $this->sdkStdResult["language"] = $language;
    }
    
        
    /**
    * @return 一级分类（行业帮助文档：https://developer.umeng.com/docs/147615/detail/169442 ）
    */
    public function getFirstLevel()
    {
        $tempResult = $this->sdkStdResult["firstLevel"];
        return $tempResult;
    }
    
    /**
     * 设置一级分类（行业帮助文档：https://developer.umeng.com/docs/147615/detail/169442 ）
     * @param String $firstLevel
     * 参数示例：<pre>公共交通</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
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
     * 参数示例：<pre>铁路货运</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
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
     * 参数示例：<pre>描述……</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setDescription($description)
    {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    /**
    * @return 微信/支付宝AppId（不可单独出现，需要和下面参数组队出现）
    */
    public function getMiniAppId()
    {
        $tempResult = $this->sdkStdResult["miniAppId"];
        return $tempResult;
    }
    
    /**
     * 设置微信/支付宝AppId（不可单独出现，需要和下面参数组队出现）
     * @param String $miniAppId
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setMiniAppId($miniAppId)
    {
        $this->sdkStdResult["miniAppId"] = $miniAppId;
    }
    
        
    /**
    * @return 微信AppSecret（miniAppId和miniAppSecret必须成对出现）
    */
    public function getMiniAppSecret()
    {
        $tempResult = $this->sdkStdResult["miniAppSecret"];
        return $tempResult;
    }
    
    /**
     * 设置微信AppSecret（miniAppId和miniAppSecret必须成对出现）
     * @param String $miniAppSecret
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setMiniAppSecret($miniAppSecret)
    {
        $this->sdkStdResult["miniAppSecret"] = $miniAppSecret;
    }
    
        
    /**
    * @return 支付宝PublicKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
    */
    public function getMiniPublicKey()
    {
        $tempResult = $this->sdkStdResult["miniPublicKey"];
        return $tempResult;
    }
    
    /**
     * 设置支付宝PublicKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
     * @param String $miniPublicKey
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setMiniPublicKey($miniPublicKey)
    {
        $this->sdkStdResult["miniPublicKey"] = $miniPublicKey;
    }
    
        
    /**
    * @return 支付宝PrivateKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
    */
    public function getMiniPrivateKey()
    {
        $tempResult = $this->sdkStdResult["miniPrivateKey"];
        return $tempResult;
    }
    
    /**
     * 设置支付宝PrivateKey（miniAppId、miniPublicKey和miniPrivateKey必须同时出现）
     * @param String $miniPrivateKey
     * 参数示例：<pre></pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setMiniPrivateKey($miniPrivateKey)
    {
        $this->sdkStdResult["miniPrivateKey"] = $miniPrivateKey;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
