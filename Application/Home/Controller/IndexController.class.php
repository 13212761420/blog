<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    
    //首页
    public function index(){
        $data = M('blog_class')->select(); //获取菜单栏

        $count = M('blog_article')->count();
        $page = $this->getpage($count, 2);
        $article = M('blog_article')->limit($page->firstRow, $page->listRows)->select();
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