<?php

namespace Arthuryinzhen\JDLogistic\Request;

class JDLogistic extends BaseRequest{


    /**
     * 下单接口
     * @return mixed
     */
    public function ldopWaybillReceiveRequest(array $array)
    {
        $request = new LdopWaybillReceiveRequest();

        self::putSomeParam($request, $array);

        $request = $this->jdClient->execute($request, $this->jdClient->accessToken);
        dd($request);
        return \GuzzleHttp\json_decode($request);
    }




    public function areaCityGetRequest()
    {
        $request = new AreaCityGetRequest();
        $request->putOtherTextParam('parent_id', 122);
        $request = $this->jdClient->execute($request, $this->jdClient->accessToken);
        return \GuzzleHttp\json_decode($request);
    }

    public function areaTownGetRequest()
    {
        $request = new AreaTownGetRequest();
        $request->putOtherTextParam('parent_id', 122);
        $request = $this->jdClient->execute($request, $this->jdClient->accessToken);
        return \GuzzleHttp\json_decode($request);
    }

    public function areaProvinceGetRequest()
    {
        $request = new AreaProvinceGetRequest();
        $request = $this->jdClient->execute($request, $this->jdClient->accessToken);
        return \GuzzleHttp\json_decode($request);
    }

    /**
     * 处理传参
     * @param $request
     * @param $array
     *
     * @return mixed
     */
    protected function putSomeParam($request, $array)
    {
        $collect = collect($array);

        $collect->each(function ($key, $item) use ($request) {
            $request->putOtherTextParam($key, $item);
        });

        return $request;
    }
}