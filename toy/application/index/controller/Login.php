<?php
namespace app\index\controller;
use think\Input;
use think\Controller;
use Captcha;
use think\Request;
use think\session;
use think\View;

class Login extends Controller
{
    public function login()
    {
        return $this->fetch();
    }

    public function help()
    {
        return $this->fetch();
    }


    public function logining()
    {
        $name = input('request.name');
        $password = input('request.password');


        $check = \app\index\model\Admin::login($name, $password);
        if ($check) {
            Session::set('user_name',$name);
            header(strtolower("location:/toy/public/index.php/index/user/index"));
            exit();
        } else {
            $this->error("用户名或密码错误", "location:/index/login/login");
        }
    }

    /*修改密码*/
    public function changepassword(Request $request){
        $newpassword  = input('request.newpassword');
        $newpassword1  = input('request.newpassword1');
        $name =input('request.name');
        {
            if ($newpassword==$newpassword1) {
                $updatepassword=\app\index\model\Admin::updatepassword($name,$newpassword);
                if ($updatepassword) {
                    session("ext_user", NULL);
                    $this->success('修改成功，请重新登录', 'location:/index/login/login');
                }else{
                    $this->error("修改密码失败");
                }
            }else{
                $this->error("两次输入密码不一致");
            }
        }
    }



    public function do_register()
    {
        $name = input('request.name');
        $nickname = input('request.nickname');
        $email = input('request.email');
        $password = input('request.password');
        $repassword = input('request.repassword');

        if (empty($name)) {
            $this->error('用户名不能为空！');
        }
        if (empty($password)) {
            $this->error('密码不能为空！');
        }
        if ($password != $repassword) {
            $this->error('两次密码不一致！');
        }
        //检测用户是否已经注册
        $where['admin_name'] = $name;

        $user = Db('admin')->where($where)->find();
        if ($user) {
            $this->error('用户名已存在');
        }

        $where['admin_nickname'] = $nickname;

        $user = Db('admin')->where($where)->find();
        if ($user) {
            $this->error('昵称已存在');
        }

        $data = [
            'admin_name' => $name,
            'admin_nickname'=>$nickname,
            'admin_email' => $email,
            'admin_password' => md5($password),
        ];


        if (!(Db('admin')->insert($data))) {
            $this->error('注册失败');
        }
        $this->success('注册成功，请登录', "location:/index/login/login");
    }
}