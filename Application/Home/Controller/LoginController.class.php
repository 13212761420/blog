<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;  //1.空间类元素引入

class LoginController extends Controller{

    //输出验证码
    public function verify(){  
        $Verify = new Verify();   //实例化verify类 2.完全限定名称 方式
        $Verify->fontSize = 18;  
        $Verify->length   = 4;  
        $Verify->useNoise = false;  
        $Verify->codeSet = '0123456789';  
        $Verify->imageW = 130;  
        $Verify->imageH = 50;  
        $Verify->entry();        //输出验证码
    } 

    //用户注册
    public function register()
    {
        if(IS_POST){
            $list = I('post.');
            if(empty($list['name'])){
                $this->error('用户名不能为空!');
            }
            if(empty($list['password'])){
                $this->error('密码不能为空!');
            }
            if(empty($list['dopassword'])){
                $this->error('确认密码不能为空!');
            }
            if(trim($list['password']) != trim($list['dopassword'])){
                $this->error('两次密码不一至!');
            }
            if(empty($list['email'])){
                $this->error('验证码不能为空!');
            }
            $data['user'] = $list['name'];
            $data['password'] = md5(md5($list['password']));
            $data['email'] = $list['email'];
            $data['time'] = time();
            $info = M('blog_user')->add($data);
            if($info){
                $this->success('注册成功!', U('home/login/login'));
            }else{
                $this->error('注册失败!');
            }
        }
        $this->display();
    }


    //用户登录
    public function login()
    {
        if(IS_POST){
            $list = I('post.');
            if(empty($list['verify'])){
                $this->error('验证码不能为空!');
            }
            $vry = new Verify;
            if(!$vry -> check($list['verify'])){
                $this->error('验证码错误!');
            }
            $login = M('blog_user')->where(array('user' => $list['user'], 'password' =>md5(md5($list['password']))))->select(); 
            if(!$login){
                $this->error('用户或密码不正确!');
            }else{
                $this->success('登录成功!', U('home/index/index'));
            }
        }
        $this->display();
    }
}

?>