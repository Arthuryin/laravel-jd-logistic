<?php

namespace Arthuryinzhen\JDLogistic\Facades;

use Arthuryinzhen\JDLogistic\Request\BaseRequest;
use Arthuryinzhen\JDLogistic\Request\LdopWaybillReceiveRequest;

class JDLogistic extends BaseRequest{

    /**
     * 京东下单
     * @param array $array
     *
     * @return mixed
     */
    public function ldopWaybillReceiveRequest(array $array)
    {
        $request = new LdopWaybillReceiveRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);
        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 处理上传参数
     * @param $request
     * @param $array
     *
     * @return mixed
     */
    private function putSomeParam($request, $array)
    {
        $collect = collect($array);

        $collect->each(function ($key, $item) use ($request) {
            $request->putOtherTextParam($key, $item);
        });

        return $request;
    }

}
