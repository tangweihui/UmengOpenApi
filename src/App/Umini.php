<?php

namespace Twh\UmengOpenAPI\App;


class Umini extends AbstractApplication
{

    protected function getOriginApiNamespace(): string
    {
        return 'com.umeng.umini';
    }

    protected function getOriginApiName(string $apiName): string
    {
        return 'umeng.umini.' . $apiName;
    }

    protected function getParamObject()
    {
        $apiName = ucfirst($this->apiName);
        $className = "\\Twh\\UmengOpenAPI\\com\\umeng\\umini\\param\\UmengUmini{$apiName}Param";
        return new $className();
    }

    protected function getResultObject()
    {
        $apiName = ucfirst($this->apiName);
        $className = "\\Twh\\UmengOpenAPI\\com\\umeng\\umini\\param\\UmengUmini{$apiName}Result";
        return new $className();
    }

}