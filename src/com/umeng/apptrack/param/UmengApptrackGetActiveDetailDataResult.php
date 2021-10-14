<?php
namespace Twh\UmengOpenAPI\com\umeng\apptrack\param;

use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Twh\UmengOpenAPI\com\umeng\apptrack\param\UmengApptrackAppDownload;

class UmengApptrackGetActiveDetailDataResult
{
    private $data;
    
    /**
    * @return 激活数据明细
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置激活数据明细
     * @param array include @see UmengApptrackAppDownload[] $data

     * 此参数必填     */
    public function setData(UmengApptrackAppDownload $data)
    {
        $this->data = $data;
    }
    
            
    private $total;
    
    /**
    * @return 总数
    */
    public function getTotal()
    {
        return $this->total;
    }
    
    /**
     * 设置总数
     * @param Integer $total

     * 此参数必填     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("data", $this->stdResult)) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengApptrackAppDownloadResult=new UmengApptrackAppDownload();
                $UmengApptrackAppDownloadResult->setArrayResult($arrayobject);
                $this->data [$i] = $UmengApptrackAppDownloadResult;
            }
        }
        if (array_key_exists("total", $this->stdResult)) {
            $this->total = $this->stdResult->{"total"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("data", $this->arrayResult)) {
            $dataResult=$arrayResult['data'];
            $this->data = new UmengApptrackAppDownload();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists("total", $this->arrayResult)) {
            $this->total = $arrayResult['total'];
        }
    }
}
