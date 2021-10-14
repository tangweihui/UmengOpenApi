<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiGetOverviewParam
{

        
        /**
    * @return 应用appkey
    */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }
    
    /**
     * 设置应用appkey
     * @param String $dataSourceId
     * 参数示例：<pre>1dfe1b2f3597245664499a9c</pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }
    
        
    /**
    * @return 开始时间
    */
    public function getFromDate()
    {
        $tempResult = $this->sdkStdResult["fromDate"];
        return $tempResult;
    }
    
    /**
     * 设置开始时间
     * @param String $fromDate
     * 参数示例：<pre>2020-03-10</pre>
     * 此参数必填     */
    public function setFromDate($fromDate)
    {
        $this->sdkStdResult["fromDate"] = $fromDate;
    }
    
        
    /**
    * @return 结束时间
    */
    public function getToDate()
    {
        $tempResult = $this->sdkStdResult["toDate"];
        return $tempResult;
    }
    
    /**
     * 设置结束时间
     * @param String $toDate
     * 参数示例：<pre>2020-03-31</pre>
     * 此参数必填     */
    public function setToDate($toDate)
    {
        $this->sdkStdResult["toDate"] = $toDate;
    }
    
        
    /**
    * @return 时间颗粒度，枚举范围day,7day,30day,week,month（逗号分隔）
    */
    public function getTimeUnit()
    {
        $tempResult = $this->sdkStdResult["timeUnit"];
        return $tempResult;
    }
    
    /**
     * 设置时间颗粒度，枚举范围day,7day,30day,week,month（逗号分隔）
     * @param String $timeUnit
     * 参数示例：<pre>day</pre>
     * 此参数必填     */
    public function setTimeUnit($timeUnit)
    {
        $this->sdkStdResult["timeUnit"] = $timeUnit;
    }
    
        
    /**
    * @return 指标名称(以逗号分隔，可选择一个或多个）,newUser,activeUser,launch,visitTimes,onceDuration,dailyDuration
    */
    public function getIndicators()
    {
        $tempResult = $this->sdkStdResult["indicators"];
        return $tempResult;
    }
    
    /**
     * 设置指标名称(以逗号分隔，可选择一个或多个）,newUser,activeUser,launch,visitTimes,onceDuration,dailyDuration
     * @param String $indicators
     * 参数示例：<pre>newUser</pre>
     * 此参数必填     */
    public function setIndicators($indicators)
    {
        $this->sdkStdResult["indicators"] = $indicators;
    }
    
        
    /**
    * @return 页码
    */
    public function getPageIndex()
    {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置页码
     * @param Integer $pageIndex
     * 参数示例：<pre>1</pre>
     * 此参数为可选参数

     * 默认值：<pre>1</pre>
          */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
    /**
    * @return 每页记录条数
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页记录条数
     * @param Integer $pageSize
     * 参数示例：<pre>30</pre>
     * 此参数为可选参数

     * 默认值：<pre>30</pre>
          */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
