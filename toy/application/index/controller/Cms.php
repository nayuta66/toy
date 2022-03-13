<?php
namespace app\index\controller;
use app\index\model\Applydemo;
use app\index\model\News;
use think\Controller;
use app\index\model\Admin;
use app\index\model\Toy;
use app\index\model\demo;
use think\Db;
use think\Exception;
use think\Model;
use think\Request;
use think\Session;

class Cms extends Controller
{
    /*
     * 用户信息管理后台
     */
    public function login(){
        return view();
    }
    public function login1(){
        $username =$_POST['username'];
        $password =$_POST['password'];
        $where['admin_name'] = array('eq',$username);
        $where['admin_password'] = array('eq', $password);
        $admin =Admin::where($where)->select();
        if($admin == NULL){
            echo '0';
        }
        else{
            echo '1';
        }

    }
    public  function index(){
        return view();
    }
    public  function welcome(){
        return view();
    }
    public function member_list1()
    {
        $admin = new Admin;
        $admin = $admin->select();
        $data1 = json_encode($admin);
        print_r($data1);
    }
    public function member_list()
    {
        return view();
    }
    public function member_add()
    {
        return view();
    }
    public function deleteUser()
    {
        $id = $_POST['id'];
        $admin = Admin::get($id);
        $admin->delete();
        $data = '1';
        print_r($data);

    }

    public function deleteUsers()
    {
        $id = $_POST['arr1'];
        //print_r($id);
        foreach ($id as $value){
            $admin = Admin::get($value);
            $admin->delete();
        }
        $data = '1';
        print_r($data);
    }

    public function status()
    {
        $id = $_POST['status'];
        $admin = Admin::get($id);
        if ($admin->status == 1) {
            $admin->status = 0;
        } else {
            $admin->status = 1;
        }
        $admin->save();
        $data = '1';
        print_r($data);
    }

    public function member_add1()
    {
        $data = $_POST['adduser'];
        $admin= new Admin;
        $info['id'] = $admin->max('id')+1;
        foreach ($data as $value){
           $name = $value['name'];
            $value2 = $value['value'];
           if ($name == 'admin_password'){
               $value2 = md5($value2);
           }
           $info[$name]=$value2;
       }
      // $admin->insert($info);
       $admin->save($info);
       $data ='1';
       print_r($data);

    }

    public function find()
    {
        $datemin =$_POST['datemin'];
        $datemax =$_POST['datemax'];
        $adminvalue = $_POST['uservalue'];
        //value?
        if (($datemin != NULL) ||($datemax!=NULL)){
            $where['addtime'] = array(array('egt', $datemin),array('elt',$datemax));
            $admin = Admin::where($where)->select();
        }
        if($adminvalue!= NULL){
            $where['admin_name|admin_nickname|admin_email'] = array('like', '%' . $adminvalue . '%');
            $admin = Admin::where($where)->select();
        }
        $data1 = json_encode($admin);
        print_r($data1);

    }
    public  function change_member(){
        return view();
    }
    public function change_member1()
    {
        $data = $_POST['changeuser'];
       foreach ($data as $value){
            $name = $value['name'];
            $value2 = $value['value'];
           if ($name == 'admin_password'){
               $value2 = md5($value2);
           }
           $info[$name]=$value2;
        }
        $id =$info['id'];
        $admin = Admin::get($id);
        $admin->save($info);
        $data = '1';
        print_r($data);
    }
    public function change_password()
    {
        return view();
    }
    public function change_password1()
    {
        $id = $_POST['id'];
        //newpsd?
        $password = md5('123456');
        $admin = Admin::get($id);
        $admin->admin_password = $password;
        $admin->save();
        $data = '1';
        print_r($data);
    }

    /*
     * 玩具数据后台方法
     */
    public  function data(){
        return view();
    }
    public function data_edit(){
        return view();
    }
    public function data1()
    {
        $toy = new Toy;
        $toy = $toy->select();
        $data1 = json_encode($toy);
        print_r($data1);
    }
    public function deleteToy(){
        $id = $_POST['id'];
        $toy = Toy::get($id);
        $toy->delete();
        $data = '1';
        print_r($data);
    }
    public function deleteToys(){
        $id = $_POST['arr1'];
        //print_r($id);
        foreach ($id as $value){
            $toy = Toy::get($value);
            $toy->delete();
        }
        $data = '1';
        print_r($data);
    }
    public function data_edit1(){
        $data = $_POST['changetoy'];
        foreach ($data as $value){
            $name = $value['name'];
            $value2 = $value['value'];
            $info[$name]=$value2;

        }
        $name =$info['name'];
        // $where['name'] = array('like', '%' . $name . '%');
        // $toy = Toy::where($where)->select();
        $toy = Toy::get($name);
        $toy->save($info);
        $data = '1';
        print_r($data);
    }


    //新闻文章管理
    //新闻列表
    public function listnews()
    {
        $news = model('News')->order('is_top')->select();
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
            $this->success('删除成功');
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
            $this->success('操作成功');
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

        $data = [
            'id'=>$_POST['id'],
            'tittle' =>$_POST['tittle'],
            'author' =>$_POST['author'],
            'tag' =>$_POST['tag'],
            'desc' => $_POST['desc'],
            'content'=>$_POST['content']
        ];

        $new=new News();

        if($new->edit($data)){
            $this->success('新闻编辑成功','listnews');
        }else{
            $this->error('编辑失败');
        }

    }



    /*
     * demo方案 后台方法
     */
    public function feedback_list(){
        return view();
    }
    public function feedback_list1()
    {
        $demo = new Applydemo();
        $demo = $demo->select();
        $data1 = json_encode($demo);
        print_r($data1);
    }
    public function  deleteDemos(){
        $id = $_POST['arr1'];
        foreach ($id as $value){
            $demo = Applydemo::get($value);
            $demo->delete();
        }
        $data = '1';
        print_r($data);
    }
    public function  deleteDemo(){
        $id = $_POST['id'];
        $demo = Applydemo::get($id);
        $demo->delete();
        $data = '1';
        print_r($data);
    }
    public function demoStatus()
    {
        $id = $_POST['status'];
        $demo = Applydemo::get($id);
        if ($demo->status == 1) {
            $demo->status = 0;
        } else {
            $demo->status = 1;
        }
        $demo->save();
        $data = '1';
        print_r($data);
    }
    public function findDemo(){
        $datemin =$_POST['datemin'];
        $datemax =$_POST['datemax'];
        $uservalue = $_POST['uservalue'];
        if (($datemin != NULL) ||($datemax!=NULL)){
            $where['addtime'] = array(array('egt', $datemin),array('elt',$datemax));
            $demo = Applydemo::where($where)->select();
        }
        if($uservalue!= NULL){
            $where['name|phone|email'] = array('like', '%' . $uservalue . '%');
            $demo = Applydemo::where($where)->select();
        }
        $data1 = json_encode($demo);
        print_r($data1);
    }

}