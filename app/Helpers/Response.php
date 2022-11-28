<?php
 
namespace App\Helpers;
 
trait Response
{
 
    /**
     * 成功的时候返回结果
     * @param $data 返回数据集合
    */
    public function success($data)
    {
        return $this->Response('200','成功',$data);
    }
 
    /**
     * 失败的时候返回结果
    */
    public function fail($data)
    {
        return $this->Response('500','失败',$data=[]);
    }
 
    /**
     * 直接返回说明
    */
    public function message($message)
    {
        return "$message";
    }
 
 
    /**
     * 参数返回
     * @param $code 状态码
     * @param $message 返回说明
     * @param $data 返回数据集合
    */
    public function Response($code, $message, $data)
    {
        $content = [
            'code' => $code,
            'message'  => $message,
            'data' => $data
        ];
        return json_encode($content, JSON_UNESCAPED_UNICODE);
    }
 
}