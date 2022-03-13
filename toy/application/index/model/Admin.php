<?php
/**
 * Created by PhpStorm.
 * User: 12228
 * Date: 2018/12/28
 * Time: 23:42
 */
namespace app\index\model;

use think\db;


class Admin extends  \think\Model
{
    /*登录验证*/
    public static function login($name, $password)
    {
        $where['admin_name'] = $name;
        $where['admin_password'] = md5($password);

        $user = Admin::where($where)->find();
        if ($user) {
            unset($user["password"]);
            session("ext_user", $user);
            return true;
        } else {
            return false;
        }
    }

    /*退出登录*/
    public static function logout()
    {
        session("ext_user", NULL);
        return;
    }

    /*查询一条数据*/
    public static function search($name)
    {
        $where['admin_name'] = $name;
        $user = Admin::where($where)->find();
        return $user;
    }


    public function edit($data){
        return $this->allowField( true)->isUpdate(true,['admin_name'=>$data['admin_name']])->save($data);
    }


}