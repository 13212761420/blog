<?php

namespace Home\Controller;

use Think\Controller;
use EasyWeChat\Foundation\Application;

class WeixinController extends Controller{

    public function index()
    {
        $token = '1218562';
        $miyao = '6knBDrlGRKr5iSA6dGL5RhFewCjgKtfgKwNe9yn8WTb';
        $echostr = I('echostr');
        if($echostr){
            $res = $this->checkSignature();
            if($res){
                echo $echostr;
            }else{
                echo '失败!';
            }
        } else {
            $this->response();
        }
    }

    private function checkSignature()
    {
        $signature = I('signature');
        $timestamp = I('timestamp');
        $nonce = I('nonce');
        $token = '1218562';   //我方令牌
        $tmpArr = array($token, $timestamp, $nonce);  //将微信发送过来的时间戳，随机字符串，与我方令牌组成零时数组；
        sort($tmpArr, SORT_STRING);   //将数组以字典方式排序；
        $tmpStr = implode( $tmpArr );  //将数组拼接成字符串；
        $tmpStr = sha1( $tmpStr );  //以sha1方式将微信方的请求参数生成暗号。
        if( $signature == $tmpStr){ //校验微信发过来的signature（暗号）与我方tmpStr（暗号）进行对比；
            return true;
        }else{
            return false;
        }
    }

    /**
     * 消息响应
     * @return [type] [description]
     */
    public function response()
    {
        $config = C('WECHAT');
        $app = new Application($config);
        $app->server->setMessageHandler(function($message){
            switch($message->MsgType) {
                case 'text':
                    return $this->responseKeyword($message);
               default:
                    return '我不懂'; 
                }
        });
        $response = $app->server->serve();
        $response->send();
    }

    public function responseKeyword($message)
    {
        /* 自定义自动回复
        $autoReply = [
            '你好' => '你帅',
            '你坏' => '你不帅了'
        ];

        if(isset($autoReply[$message->Content])) {
            return $autoReply[$message->Content];
        } else {
            return '不知道你在说什么';
        }
        */
       
       // 机器人自动回复
        $res = $this->tuling($message->Content, $message->FromUserName);
        if(!$res) return '不懂你在说什么';
        $data = json_decode($res, true);
        if(!isset($data['results'])) return '真的不懂你说什么';
        return $data['results'][0]['values'][0]['text'];
    
    }

    public function testTuling()
    {
        $str = I('str');
        $openid = 1;
        $this->tuling($str, $openid);
    }

    private function tuling($inputText, $openid)
    {
        $url = 'http://openapi.tuling123.com/openapi/api/v2';
        $res = file_get_contents($url, fase, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => 'Content-Type:application/json',
                'content' => json_encode([
                    'reqType' => 0,
                    'perception' => [
                        'inputText' => [
                            'text' => $inputText
                        ]
                    ],
                    'userInfo' => [
                        'apiKey' => '5184b0fec33a4d66bae780c74c714eeb',
                        'userId' => $openid
                    ]
                ])
            ]
        ]));
        return $res;
    }
}