<?php
namespace Twh\UmengOpenAPI\com\umeng\umini\param;

use ArrayObject;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Twh\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Twh\UmengOpenAPI\com\umeng\umini\param\UmengUminiShareUserDTO;

class UmengUminiShareUserListDTO extends SDKDomain
{
    private $currentPage;

    /**
    * @return 当前页码
    */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * 设置当前页码
     * @param Integer $currentPage
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
    }


    private $totalCount;

    /**
    * @return 总记录数
    */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * 设置总记录数
     * @param Integer $totalCount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }


    private $data;

    /**
    * @return
    */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置
     * @param array include @see UmengUminiShareUserDTO[] $data
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setData(UmengUminiShareUserDTO $data)
    {
        $this->data = $data;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("currentPage", $this->stdResult)) {
            $this->currentPage = $this->stdResult->{"currentPage"};
        }
        if (array_key_exists("totalCount", $this->stdResult)) {
            $this->totalCount = $this->stdResult->{"totalCount"};
        }
        if (array_key_exists("data", $this->stdResult)) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengUminiShareUserDTOResult=new UmengUminiShareUserDTO();
                $UmengUminiShareUserDTOResult->setArrayResult($arrayobject);
                $this->data [$i] = $UmengUminiShareUserDTOResult;
            }
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("currentPage", $this->arrayResult)) {
            $this->currentPage = $arrayResult['currentPage'];
        }
        if (array_key_exists("totalCount", $this->arrayResult)) {
            $this->totalCount = $arrayResult['totalCount'];
        }
        if (array_key_exists("data", $this->arrayResult)) {
            $dataResult=$arrayResult['data'];
            $this->data = new UmengUminiShareUserDTO();
            $this->data->setStdResult($dataResult);
        }
    }
}
