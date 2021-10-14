<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiEditPathDisplayNameParam
{

        
        /**
    * @return 数据源ID
    */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }
    
    /**
     * 设置数据源ID
     * @param String $dataSourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }
    
        
    /**
    * @return 页面别名
    */
    public function getDisplayName()
    {
        $tempResult = $this->sdkStdResult["displayName"];
        return $tempResult;
    }
    
    /**
     * 设置页面别名
     * @param String $displayName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->sdkStdResult["displayName"] = $displayName;
    }
    
        
    /**
    * @return 页面URL地址
    */
    public function getPath()
    {
        $tempResult = $this->sdkStdResult["path"];
        return $tempResult;
    }
    
    /**
     * 设置页面URL地址
     * @param String $path
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPath($path)
    {
        $this->sdkStdResult["path"] = $path;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
