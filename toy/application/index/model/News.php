<?php

/**
 * Created by PhpStorm.
 * User: 阮茂勇
 * Date: 2019/3/30
 * Time: 14:26
 */
namespace app\index\model;
use think\Model;

class News extends Model
{
    public function edit($data){
        return $this->allowField( true)->isUpdate(true,['id'=>$data['id']])->save($data);
    }
}