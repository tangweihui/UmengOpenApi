<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Twh\UmengOpenAPI\com\umeng\umini\param\UmengUminiEventDTO;

class UmengUminiBatchCreateEventParam
{

        
        /**
    * @return 数据源id
    */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }
    
    /**
     * 设置数据源id
     * @param String $dataSourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }
    
        
    /**
    * @return 事件列表
    */
    public function getEventList()
    {
        $tempResult = $this->sdkStdResult["eventList"];
        return $tempResult;
    }
    
    /**
     * 设置事件列表
     * @param array include @see UmengUminiEventDTO[] $eventList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEventList(UmengUminiEventDTO $eventList)
    {
        $this->sdkStdResult["eventList"] = $eventList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
