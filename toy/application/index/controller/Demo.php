<?php
/**
 * Created by PhpStorm.
 * User: 12228
 * Date: 2019/3/6
 * Time: 14:46
 */

namespace app\index\controller;

use think\Input;
use think\Controller;
use Captcha;
use think\Request;
use think\session;
use think\View;

class Demo extends Controller{

    public function gequdao()
    {
        return $this->fetch();
    }

    public  function user(){
        header(strtolower("location:/toy/public/index.php/index/user/index"));
        exit();
    }

    public function indexjiejue()
    {
        return $this->fetch();
    }
    public function jieshao()
    {
        return $this->fetch();
    }
    public function kehufenxi()
    {

        return $this->fetch();
    }
    public function shangpinxiaoliang()
    {
        return $this->fetch();
    }
    public function shishijiankong()
    {
        return $this->fetch();
    }
    //申请demo
    public function applydemo()
    {
        $data = [
            'name'=>$_POST['name'],
            'position'=>$_POST['interest'],
            'telephone'=>$_POST['lianxi'],
            'work_email'=>$_POST['mail'],
            'company_name'=>$_POST['company'],
            'keyword'=>$_POST['guanjian']

        ];
        if (Db('applydemo')->insert($data) ){
            $this->success('提交成功','jieshao');
        }
        else{
            $this->error('提交失败','indexjiejue');
        }
    }
}