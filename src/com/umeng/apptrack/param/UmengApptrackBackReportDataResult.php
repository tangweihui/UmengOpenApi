<?php
namespace Twh\UmengOpenAPI\com\umeng\apptrack\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengApptrackBackReportDataResult
{
    private $result;
    
    /**
    * @return
    */
    public function getResult()
    {
        return $this->result;
    }
    
    /**
     * 设置
     * @param Boolean $result

     * 此参数必填     */
    public function setResult($result)
    {
        $this->result = $result;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("result", $this->stdResult)) {
            $this->result = $this->stdResult->{"result"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $this->result = $arrayResult['result'];
        }
    }
}
