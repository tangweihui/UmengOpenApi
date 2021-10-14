<?php
namespace Twh\UmengOpenAPI\com\alibaba\openapi\client;

class APIId
{

    /**
     * namespace of API, it is required
     *
     * @var string
     */
    public $namespace;
    /**
     * name of API, it is required
     * @var string
     */
    public $name;
    /**
     * version of API, optional.
     * If not setup, the default version defined in requestPolicy is used.
     * @var integer
     */
    public $version;
    /**
     *  path of API,required
     * @var string
     */
    public $path;
    public function __construct($namespace, $name, $version, $path)
    {
        $this->namespace = $namespace;
        $this->name = $name;
        $this->version = $version;
        $this->path = $path;
    }
}
