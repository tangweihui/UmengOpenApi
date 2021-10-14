<?php
namespace Twh\UmengOpenAPI\com\umeng\apptrack\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengApptrackGetRegisterLoginDataParam
{

        
        /**
    * @return 计划id
    */
    public function getPlanId()
    {
        $tempResult = $this->sdkStdResult["planId"];
        return $tempResult;
    }
    
    /**
     * 设置计划id
     * @param Long $planId
     * 参数示例：<pre>从用户计划列表接口获取</pre>
     * 此参数必填     */
    public function setPlanId($planId)
    {
        $this->sdkStdResult["planId"] = $planId;
    }
    
        
    /**
    * @return 单元id
    */
    public function getUnitId()
    {
        $tempResult = $this->sdkStdResult["unitId"];
        return $tempResult;
    }
    
    /**
     * 设置单元id
     * @param Long $unitId
     * 参数示例：<pre>从监测单元列表接口获取</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setUnitId($unitId)
    {
        $this->sdkStdResult["unitId"] = $unitId;
    }
    
        
    /**
    * @return 查询日期
    */
    public function getQueryDate()
    {
        $tempResult = $this->sdkStdResult["queryDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询日期
     * @param String $queryDate
     * 参数示例：<pre>2018-12-19</pre>
     * 此参数必填     */
    public function setQueryDate($queryDate)
    {
        $this->sdkStdResult["queryDate"] = $queryDate;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
