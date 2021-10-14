<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiAppInfoDTO extends SDKDomain
{
    private $secondLevel;
    
    /**
    * @return 二级分类
    */
    public function getSecondLevel()
    {
        return $this->secondLevel;
    }
    
    /**
     * 设置二级分类
     * @param String $secondLevel
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSecondLevel($secondLevel)
    {
        $this->secondLevel = $secondLevel;
    }
    
            
    private $dataSourceId;
    
    /**
    * @return 数据源id
    */
    public function getDataSourceId()
    {
        return $this->dataSourceId;
    }
    
    /**
     * 设置数据源id
     * @param String $dataSourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->dataSourceId = $dataSourceId;
    }
    
            
    private $appName;
    
    /**
    * @return 数据源名称
    */
    public function getAppName()
    {
        return $this->appName;
    }
    
    /**
     * 设置数据源名称
     * @param String $appName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAppName($appName)
    {
        $this->appName = $appName;
    }
    
            
    private $gmtCreate;
    
    /**
    * @return 创建时间
    */
    public function getGmtCreate()
    {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间
     * @param String $gmtCreate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtCreate($gmtCreate)
    {
        $this->gmtCreate = $gmtCreate;
    }
    
            
    private $firstLevel;
    
    /**
    * @return 一级分类
    */
    public function getFirstLevel()
    {
        return $this->firstLevel;
    }
    
    /**
     * 设置一级分类
     * @param String $firstLevel
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFirstLevel($firstLevel)
    {
        $this->firstLevel = $firstLevel;
    }
    
            
    private $userName;
    
    /**
    * @return 用户名
    */
    public function getUserName()
    {
        return $this->userName;
    }
    
    /**
     * 设置用户名
     * @param String $userName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    
            
    private $platform;
    
    /**
    * @return 小程序平台
    */
    public function getPlatform()
    {
        return $this->platform;
    }
    
    /**
     * 设置小程序平台
     * @param String $platform
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("secondLevel", $this->stdResult)) {
            $this->secondLevel = $this->stdResult->{"secondLevel"};
        }
        if (array_key_exists("dataSourceId", $this->stdResult)) {
            $this->dataSourceId = $this->stdResult->{"dataSourceId"};
        }
        if (array_key_exists("appName", $this->stdResult)) {
            $this->appName = $this->stdResult->{"appName"};
        }
        if (array_key_exists("gmtCreate", $this->stdResult)) {
            $this->gmtCreate = $this->stdResult->{"gmtCreate"};
        }
        if (array_key_exists("firstLevel", $this->stdResult)) {
            $this->firstLevel = $this->stdResult->{"firstLevel"};
        }
        if (array_key_exists("userName", $this->stdResult)) {
            $this->userName = $this->stdResult->{"userName"};
        }
        if (array_key_exists("platform", $this->stdResult)) {
            $this->platform = $this->stdResult->{"platform"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("secondLevel", $this->arrayResult)) {
            $this->secondLevel = $arrayResult['secondLevel'];
        }
        if (array_key_exists("dataSourceId", $this->arrayResult)) {
            $this->dataSourceId = $arrayResult['dataSourceId'];
        }
        if (array_key_exists("appName", $this->arrayResult)) {
            $this->appName = $arrayResult['appName'];
        }
        if (array_key_exists("gmtCreate", $this->arrayResult)) {
            $this->gmtCreate = $arrayResult['gmtCreate'];
        }
        if (array_key_exists("firstLevel", $this->arrayResult)) {
            $this->firstLevel = $arrayResult['firstLevel'];
        }
        if (array_key_exists("userName", $this->arrayResult)) {
            $this->userName = $arrayResult['userName'];
        }
        if (array_key_exists("platform", $this->arrayResult)) {
            $this->platform = $arrayResult['platform'];
        }
    }
}
