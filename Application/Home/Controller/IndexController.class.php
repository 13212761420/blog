<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    public function getpage($count, $pagesize) {
        $page = new \Think\Page($count, $pagesize);
        $page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $page->lastSuffix = false;//最后一页不显示为总页数
        return $page;
    }


    //首页
    public function index(){
        $data = M('blog_class')->select(); //获取菜单栏

        if(IS_GET){
            $cid = I('get.id');
            $where['cid'] = array('like','%'.$cid.'%');
        }
        $count = M('blog_article')->where($where)->count();
        $page = $this->getpage($count, 5);
        $article = M('blog_article')->where($where)->limit($page->firstRow, $page->listRows)->select();
        $this->assign('page', $page->show());
        $this->assign('data', $data);
        $this->assign('article', $article);
		$this->display();  
    }

    //详情页
    public function details(){
        
        $this->display();
    }
}