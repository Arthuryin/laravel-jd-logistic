<?php

namespace Arthuryinzhen\JDLogistic;

use Arthuryinzhen\JDLogistic\JD\BaseRequest;
use Arthuryinzhen\JDLogistic\JD\Request\PopOrderPrintDataGetRequest;

class JDLogisticPopRepository extends BaseRequest
{

    /**
     * 获取面单打印数据
     *
     * @param array $array
     *
     * @return mixed
     */
    public function popOrderPrintDataGetRequest(array $array)
    {
        $request = new PopOrderPrintDataGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }



}
