<?php
/**
 * Created by PhpStorm.
 * User: 阮茂勇
 * Date: 2019/3/30
 * Time: 17:10
 */

namespace app\index\controller;


use think\Controller;
use app\index\model\News;
use app\index\model\Comment;
use think\Db;
use think\Model;

class Toynews extends  Controller
{
    //新闻资讯主页
    public function newsindex(){

        $data=\app\index\model\News::select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function user(){
        header(strtolower("location:/toy/public/index.php/index/user/index"));
        exit();
    }

    public function zhibiao(){
        header(strtolower("location:/toy/public/index.php/index/user/zhibiao"));
        exit();
    }

    public function demo(){
        header(strtolower("location:/toy/public/index.php/index/demo/jieshao"));
        exit();
    }

    public function about(){
        header(strtolower("location:/toy/public/index.php/index/user/about"));
        exit();
    }

    //新闻详情页
    public function newspage(){

        $where['id']=$_REQUEST['id'];
        $where2['news_id']=$_REQUEST['id'];
        $data = Model('News')->where($where)->find();
        Model('News')->where($where)->setInc('click');
        $newsData = Model('News')->select();
        $tagData=explode(',',$data['tag']);
        $comm = Model('Comment')->where($where2)->select();


        $this->assign('allnews',$newsData);
        $this->assign('tag',$tagData);
        $this->assign('news',$data);
        $this->assign('comm',$comm);
        return $this->fetch();


    }

    //搜索新闻
    public function search()
    {
        $data = News::where('tittle','like','%'.$_REQUEST['keyword'].'%')->select();
        if($_REQUEST['keyword'] == NULL)
            $data = News::paginate(5);
        $this ->assign('data',$data);
        return view('newsindex');
    }




    //评论新闻
    public function comm(){
        if(request()->isAjax()){

            $data=[
                'content'=>input('post.content'),
                'news_id'=>input('post.news_id'),
                'user_id'=>session('user_name'),
                'create_time'=>date("y-m-d h:i:s"),
            ];
            $result = model('Comment')->insert($data);
            if($result){
                $this->success('评论成功','newspage');
            }else{
                $this->error('评论失败');
            }
        }
    }





}