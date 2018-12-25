<?php

/* 京东物流配置 */
return [

    /*-------------------------------------------------
     * SDK工作目录
     * 存放日志，JD缓存数据
     --------------------------------------------------*/

    'work' => env('JD_SDK_WORK_DIR', storage_path('jd/logistics')),

    /*-------------------------------------------------
     * 是否处于开发模式
     * 在你自己电脑上开发程序的时候千万不要设为false，以免缓存造成你的代码修改了不生效
     * 部署到生产环境正式运营后，如果性能压力大，可以把此常量设定为false，能提高运行速度（对应的代价就是你下次升级程序时要清一下缓存）
     --------------------------------------------------*/

    'mode' => env('JD_SDK_DEV_MODE', true),

    /*-------------------------------------------------
     * JD 用户配置
     * 用户密钥以及密码等
     * appKey       在京东物流获取
     * appSecret    在京东物流获取
     * accessToken  在京东物流获取
     * serverUrl    在京东固定地址
     --------------------------------------------------*/

    'client' => [
        'appKey'      => env('JD_CLIENT_APP_KEY', '26EAC2509056EB38FB623D9A49296D2C'),
        'appSecret'   => env('JD_CLIENT_APP_SECRET', '1abdc5a97ecb4594ab7b772296bcfbbd'),
        'accessToken' => env('JD_CLIENT_ACCESS_TOKEN', '1f1d3048-220a-484d-ad93-f3808d9aacc1'),
        'serverUrl'   => env('JD_CLIENT_SERVER_URL', 'https://api.jd.com/routerjson'),
    ],
];