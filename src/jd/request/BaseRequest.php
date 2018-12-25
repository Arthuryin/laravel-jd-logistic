<?php

namespace Arthuryinzhen\JDLogistic\Request;

use Arthuryinzhen\JDLogistic\JdClient;
use Arthuryinzhen\JDLogistic\Lotus;

class BaseRequest
{

    protected $jdClient;

    public function __construct()
    {
        $this->jdClient = $this->init();
    }

    /**
     * 初始化
     *
     * @return \Arthuryinzhen\JDLogistic\JdClient
     */
    protected function init()
    {
        $lotus                         = new Lotus();
        $lotus->option["autoload_dir"] = dirname(__FILE__) . DIRECTORY_SEPARATOR;
        $lotus->devMode                = config('JdLogistic.mode');
        $lotus->defaultStoreDir        = config('JdLogistic.work');
        $lotus->init();

        $client              = new JdClient();
        $client->appKey      = config('JdLogistic.client.appKey');
        $client->appSecret   = config('JdLogistic.client.appSecret');
        $client->accessToken = config('JdLogistic.client.accessToken');
        $client->serverUrl   = config('JdLogistic.client.serverUrl');

        return $client;
    }

}