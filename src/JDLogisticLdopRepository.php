<?php

namespace Arthuryinzhen\JDLogistic;

use Arthuryinzhen\JDLogistic\JD\BaseRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopAbnormalApprovalRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopAbnormalGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopCenterApiEportdeclareRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopCenterApiReceivePaymentInfoRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopMiddleWaybillWaybill2CTraceApiRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopMiddleWaybillWaybillPickupApiRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopMiddleWaybillWaybillTrackAndTimePositionApiRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopMiddleWaybillWeightQueryRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopReceiveEportSendRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopReceiveOrderInterceptRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopReceivePickuporderReceiveRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopReceiveTraceGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopSelfPickupSmsSendRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopWaybillGeneralQueryRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopWaybillQueryRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopWaybillQuerySignatureImageRequest;
use Arthuryinzhen\JDLogistic\JD\Request\LdopWaybillReceiveRequest;

class JDLogisticLdopRepository extends BaseRequest
{

    /**
     * 京东物流接单接口
     *
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
     * 异常单审核
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopAbnormalApprovalRequest(array $array)
    {
        $request = new LdopAbnormalApprovalRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 查询拒收再投单
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopAbnormalGetRequest(array $array)
    {
        $request = new LdopAbnormalGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 运单申报
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopCenterApiEportdeclareRequest(array $array)
    {
        $request = new LdopCenterApiEportdeclareRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 收到支付信息接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopCenterApiReceivePaymentInfoRequest(array $array)
    {
        $request = new LdopCenterApiReceivePaymentInfoRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 2C全程物流跟踪接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopMiddleWaybillWaybill2CTraceApiRequest(array $array)
    {
        $request = new LdopMiddleWaybillWaybill2CTraceApiRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 取件单查询接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopMiddleWaybillWaybillPickupApiRequest(array $array)
    {
        $request = new LdopMiddleWaybillWaybillPickupApiRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 获取订单实时位置接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopMiddleWaybillWaybillTrackAndTimePositionApiRequest(array $array)
    {
        $request = new LdopMiddleWaybillWaybillTrackAndTimePositionApiRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 运单重量查询接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopMiddleWaybillWeightQueryRequest(array $array)
    {
        $request = new LdopMiddleWaybillWeightQueryRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 接收Eport相关扩展信息
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopReceiveEportSendRequest(array $array)
    {
        $request = new LdopReceiveEportSendRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 运单拦截
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopReceiveOrderInterceptRequest(array $array)
    {
        $request = new LdopReceiveOrderInterceptRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 取件单下单
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopReceivePickuporderReceiveRequest(array $array)
    {
        $request = new LdopReceivePickuporderReceiveRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 查询物流跟踪消息
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopReceiveTraceGetRequest(array $array)
    {
        $request = new LdopReceiveTraceGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 重发自提码接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function ldopSelfPickupSmsSendRequest(array $array)
    {
        $request = new LdopSelfPickupSmsSendRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 查询运单信息
     * @param array $array
     *
     * @return mixed
     */
    public function ldopWaybillGeneralQueryRequest(array $array)
    {
        $request = new LdopWaybillGeneralQueryRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 重量包裹数查询接口
     * @param array $array
     *
     * @return mixed
     */
    public function ldopWaybillQueryRequest(array $array)
    {
        $request = new LdopWaybillQueryRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * 电子签名接口查询接口
     * @param array $array
     *
     * @return mixed
     */
    public function ldopWaybillQuerySignatureImageRequest(array $array)
    {
        $request = new LdopWaybillQuerySignatureImageRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result);
    }


}
