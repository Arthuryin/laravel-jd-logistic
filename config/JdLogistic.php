<?php

/* 京东物流配置 */
return [

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