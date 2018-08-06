<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

class ArticleController extends Controller{

    //博文列表
    public function essay()
    {
        
        $article = M('blog_article')->select();
        $this->assign('article', $article);
        $this->display();
    }

    //博文添加
    public function addlist()
    {
        if(IS_POST){
            $data = I('post.');
            $config = [
                'maxSize' => 1145728,
                'exts' => ['jpg', 'jpeg', 'gif', 'png', 'webp'],
                'rootPath' => './attachs/img/',
                'autoSub' => false
            ];
            $upload = new Upload($config);
            $info = $upload->upload();
            if(!$info){
                $this->error($upload->getError());
            }else{
                $data['img'] = ltrim($config['rootPath'].$info['file']['savename'],'.');
            }
            $data['create_itme'] = time();
            $article = M('blog_article')->add($data);
            if(!$article){
                $this->error('添加失败!');
            }else{
                $this->success('添加成功!', U('/admin/article/essay'));
            }
        }
        $data = M('blog_class')->select();
        $this->assign('data', $data);
        $this->display();
    }

    //博文修改
    public function save_list()
    {
        $id = I('get.id');
        $art = M('blog_article')->where(['id'=>$id])->find();
        $art['ctitle'] = M('blog_class')->where(['id' => $art['cid']])->getfield('classify');
        $clrm = M('blog_class')->field('classify,id')->select();
        $this->assign('clrm', $clrm);
        $this->assign('art', $art);
        $this->display();
        if(IS_POST){
            $data = I('post.');
            $config = [
                'maxSize' => 1145728,
                'exts' => ['jpg', 'jpeg', 'gif', 'png', 'webp'],
                'rootPath' => './attachs/img/',
                'autoSub' => false
            ];
            $upload = new Upload($config);
            $info = $upload->upload();
            if(!$info){
                $this->error($upload->getError());
            }else{
                $data['img'] = ltrim($config['rootPath'].$info['file']['savename'],'.');
            }
            $data['create_itme'] = time();
            $rom = M('blog_article')->where(['id' => $data['id']])->save($data);
            if(!$rom){
                $this->error('修改失败!');
            }else{
                $this->success('修改成功!', U('/admin/article/essay'));
            }
        }
    }

    //博文删除
    public function delete()
    {
        if(IS_AJAX){
            $id = I('get.id');
            $dat = M('blog_article')->where(['id' => $id])->delete();
            if(!$dat){
                $this->ajaxReturn(['status' => 0, 'msg' => '删除失败!']);
            }else{
                $this->ajaxReturn(['status' => 1, 'msg' => '删除成功!']);
            }
        }
        
    }
}


