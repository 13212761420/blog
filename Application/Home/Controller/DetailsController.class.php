<?php

namespace Home\Controller;

use Think\Controller;

class DetailsController extends Controller{

    //博文详情
    public function index()
    {
        $id = I('get.id');
        $data = M('blog_article')->where(array('id' => $id))->select();
        $this->assign('data', $data);
        $this->display();
    }
}



