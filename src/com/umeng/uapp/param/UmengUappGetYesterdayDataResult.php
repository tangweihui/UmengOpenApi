<?php
namespace Twh\UmengOpenAPI\com\umeng\uapp\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Twh\UmengOpenAPI\com\umeng\uapp\param\UmengUappDailyDataInfo;

class UmengUappGetYesterdayDataResult
{
    private $yesterdayData;
    
    /**
    * @return
    */
    public function getYesterdayData()
    {
        return $this->yesterdayData;
    }
    
    /**
     * 设置
     * @param UmengUappDailyDataInfo $yesterdayData

     * 此参数必填     */
    public function setYesterdayData(UmengUappDailyDataInfo $yesterdayData)
    {
        $this->yesterdayData = $yesterdayData;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("yesterdayData", $this->stdResult)) {
            $yesterdayDataResult=$this->stdResult->{"yesterdayData"};
            $this->yesterdayData = new UmengUappDailyDataInfo();
            $this->yesterdayData->setStdResult($yesterdayDataResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("yesterdayData", $this->arrayResult)) {
            $yesterdayDataResult=$arrayResult['yesterdayData'];
            $this->yesterdayData = new UmengUappDailyDataInfo();
            $this->yesterdayData->setStdResult($yesterdayDataResult);
        }
    }
}
