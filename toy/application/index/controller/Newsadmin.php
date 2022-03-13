<?php
/**
 * Created by PhpStorm.
 * User: 阮茂勇
 * Date: 2019/4/5
 * Time: 5:03
 */

namespace app\admin\controller;


use think\Controller;
use think\Model;
use think\Request;
use think\Session;

class Newsadmin extends Controller
{
    //新闻列表
    public function listnews()
    {
        $news = model('News')->order('is_top')->paginate(10);
        $viewData = [
            'news' => $news,
        ];
        $this -> assign($viewData);
        return view();
    }

    //添加页面
    public function addnews()
    {
        if(request()->isAjax()){
            $data = [
                'tittle' =>input('post.tittle'),
                'author' => input('post.author'),
                'tag' => input('post.tag'),
                'desc' => input('post.desc'),
                'content' => input('post.content'),
            ];
            $result = model('News') -> insert($data);
            if($result){
                $this->success('新闻添加成功','listnews');
            }else{
                $this ->error('添加失败');
            }
        }
        return view();
    }


    //新闻删除
    public function delnews()
    {
        $where['id']=$_REQUEST['id'];
        $newsdata = model('News')->where($where)->find();
        $result = $newsdata ->delete();
        if($result){
            $this->success('删除成功','admin/newsadmin/listnews');
        }else{
            $this ->error('删除失败');
        }
    }

    //推荐新闻
    public function topnews()
    {
        $where['id'] = $_REQUEST['id'];
        $newsdata = model('News')->where($where)->find();
        if ($newsdata['is_top'] == 1){
            $result = model('News')->where($where)->update(['is_top'=>0]);
        }else{
            $result = model('News')->where($where)->update(['is_top'=>1]);
        }
        if($result){
            $this->success('操作成功','admin/newsadmin/listnews');
        }else{
            $this->error('操作失败');
        }
    }

    //编辑页面
    public function editnews(Request $request){
        if(!empty($_REQUEST['id'])){
            $where['id']=$_REQUEST['id'];
            Session::set('id',$_REQUEST['id']);
        }else{
            $where['id']=$request->session('id');
        }
        $data = Model('News')->where($where)->find();
        $this -> assign('news',$data);
        return view();
    }

    //编辑新闻
    public function edit(){

            $where['id']=$_REQUEST['id'];
            $data = [
                'tittle' =>input('post.tittle'),
                'author' => input('post.author'),
                'tag' => input('post.tag'),
                'desc' => input('post.desc')
            ];
            $result = Model('News') ->where($where)->update($data);
            if($result){
                $this->success('新闻编辑成功','listnews');
            }else{
                $this ->error('编辑失败','editnews');
            }
        }

}