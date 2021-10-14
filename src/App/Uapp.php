<?php

namespace Twh\UmengOpenAPI\App;


class Uapp extends AbstractApplication
{

    protected function getOriginApiNamespace(): string
    {
        return 'com.umeng.uapp';
    }

    protected function getOriginApiName(string $apiName): string
    {
        return 'umeng.uapp.' . $apiName;
    }

    protected function getParamObject()
    {
        $apiName = ucfirst($this->apiName);
        $className = "\\Twh\\UmengOpenAPI\\com\\umeng\\uapp\\param\\UmengUapp{$apiName}Param";
        return new $className();
    }

    protected function getResultObject()
    {
        $apiName = ucfirst($this->apiName);
        $className = "\\Twh\\UmengOpenAPI\\com\\umeng\\uapp\\param\\UmengUapp{$apiName}Result";
        return new $className();
    }

}