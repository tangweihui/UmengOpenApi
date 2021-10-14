<?php

namespace Twh\UmengOpenAPI;

use Twh\UmengOpenAPI\App\Apptrack;
use Twh\UmengOpenAPI\App\Uapp;
use Twh\UmengOpenAPI\App\Umini;

class Factory
{
    public static function umini(array $config)
    {
        return new Umini($config);
    }

    public static function uapp(array $config)
    {
        return new Uapp($config);
    }

    public static function apptrack(array $config)
    {
        return new Apptrack($config);
    }
}