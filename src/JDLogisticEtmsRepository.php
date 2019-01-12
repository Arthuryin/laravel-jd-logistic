<?php

namespace Arthuryinzhen\JDLogistic;

use Arthuryinzhen\JDLogistic\JD\BaseRequest;
use Arthuryinzhen\JDLogistic\JD\Request\EtmsPackageUpdateRequest;
use Arthuryinzhen\JDLogistic\JD\Request\EtmsRangeCheckRequest;
use Arthuryinzhen\JDLogistic\JD\Request\EtmsWaybillcodeGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\EtmsWaybillSendRequest;

class JDLogisticEtmsRepository extends BaseRequest
{

    /**
     * 提供运单包裹数修改
     *
     * @param array $array
     *
     * @return mixed
     */
    public function etmsPackageUpdateRequest(array $array)
    {
        $request = new EtmsPackageUpdateRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 是否可以京配
     *
     * @param array $array
     *
     * @return mixed
     */
    public function etmsRangeCheckRequest(array $array)
    {
        $request = new EtmsRangeCheckRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 获取青龙运单号接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function etmsWaybillcodeGetRequest(array $array)
    {
        $request = new EtmsWaybillcodeGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 青龙接单接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function etmsWaybillSendRequest(array $array)
    {
        $request = new EtmsWaybillSendRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

}
