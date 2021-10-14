<?php

namespace Twh\UmengOpenAPI\App;


class Apptrack extends AbstractApplication
{

    protected function getOriginApiNamespace(): string
    {
        return 'com.umeng.apptrack';
    }

    protected function getOriginApiName(string $apiName): string
    {
        return 'umeng.apptrack.' . $apiName;
    }

    protected function getParamObject()
    {
        $apiName = ucfirst($this->apiName);
        $className = "\\Twh\\UmengOpenAPI\\com\\umeng\\apptrack\\param\\UmengApptrack{$apiName}Param";
        return new $className();
    }

    protected function getResultObject()
    {
        $apiName = ucfirst($this->apiName);
        $className = "\\Twh\\UmengOpenAPI\\com\\umeng\\apptrack\\param\\UmengApptrack{$apiName}Result";
        return new $className();
    }

}