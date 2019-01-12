<?php

namespace Arthuryinzhen\JDLogistic;

use Arthuryinzhen\JDLogistic\JD\BaseRequest;
use Arthuryinzhen\JDLogistic\JD\Request\AreaCityGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\AreaCountyGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\AreaProvinceGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\AreasGetRequest;
use Arthuryinzhen\JDLogistic\JD\Request\AreaTownGetRequest;

class JDLogisticAreaRepository extends BaseRequest
{

    /**
     * 获取市级信息列表——新市级地址接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function areaCityGetRequest(array $array)
    {
        $request = new AreaCityGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 获取区县级信息列表——新区县级地址接口
     *
     * @param array $array
     *
     * @return mixed
     */
    public function areaCountyGetRequest(array $array)
    {
        $request = new AreaCountyGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 获取省级列表
     *
     * @param array $array
     *
     * @return mixed
     */
    public function areaProvinceGetRequest(array $array)
    {
        $request = new AreaProvinceGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 得到京东全量地址信息
     *
     * @param array $array
     *
     * @return mixed
     */
    public function areasGetRequest(array $array)
    {
        $request = new AreasGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }

    /**
     * 获取乡镇级信息列表
     *
     * @param array $array
     *
     * @return mixed
     */
    public function areaTownGetRequest(array $array)
    {
        $request = new AreaTownGetRequest();

        self::putSomeParam($request, $array);

        $result = $this->jdClient->execute($request, $this->jdClient->accessToken);

        return \GuzzleHttp\json_decode($result, true);
    }



}
