<?php
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 11:52
 */
return [
   'WECHAT' => [
       /**
        * Debug 模式，bool 值：true/false
        *
        * 当值为 false 时，所有的日志都不会记录
        */
       'debug' => true,
       /**
        * 账号基本信息，请从微信公众平台/开放平台获取
        */
       'app_id'  => 'wx4e5b40f962e8516b',         // AppID
       'secret'  => '',     // AppSecret
       'token'   => '1218562',          // Token
       'aes_key' => '6knBDrlGRKr5iSA6dGL5RhFewCjgKtfgKwNe9yn8WTb',                    // EncodingAESKey，安全模式下请一定要填写！！！

       /**
        * 日志配置
        *
        * level: 日志级别, 可选为：
        *         debug/info/notice/warning/error/critical/alert/emergency
        * permission：日志文件权限(可选)，默认为null（若为null值,monolog会取0644）
        * file：日志文件位置(绝对路径!!!)，要求可写权限
        */
       'log' => [
           'level' => 'debug',
           'permission' => 0777,
           'file' => LOG_PATH . 'easywechat.log',
       ],
       
       /**
        * Guzzle 全局设置
        *
        * 更多请参考： http://docs.guzzlephp.org/en/latest/request-options.html
        */
       'guzzle' => [
           'timeout' => 3.0, // 超时时间（秒）
           //'verify' => false, // 关掉 SSL 认证（强烈不建议！！！）
       ],
   ]
];