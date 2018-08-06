<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    //首页
    public function index(){
		$this->display();  
		
    }

    public function index_v148b2()
    {
        $this->display();
    }

    public function menu()
    {
        if(IS_POST){
            $res = I('post.');
            if(empty($res['classify'])){
                $this->error('名称不能为空!');
            }
            if(empty($res['type'])){
                $this->error('类型不能为空!');
            }
           $class =  M('blog_class')->add($res);
           if(!$class){
                $this->error('菜单添加失败!');
           }else{
                $this->success('添加成功!');
           }
        }
        $data = M('blog_class')->select();
        
        $this->assign('data', $data);
        $this->display();
    }


}