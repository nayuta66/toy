<?php
namespace app\index\controller;
use app\index\model\Toy;
use think\Controller;
use think\session;
use think\Request;
use app\index\model\Admin;

class User extends Controller
{


    public function _initialize()
    {
        //判断有无username这个session，如果没有，跳转到登陆界面
        if(!session('user_name')){
            return $this->error('您没有登陆',url('Login/login'));
        }
    }

    /*主页面*/
    public function index()
    {
        $where['admin_name']=session('user_name');
        $data=\app\index\model\Admin::where($where)->select();
        $this->assign('data',$data);

        return view();
    }

    public function change()
    {
        $where['admin_name']=session('user_name');
        $data=\app\index\model\Admin::where($where)->select();
        $this->assign('data',$data);

        return view();
    }

    public function demo(){
        header(strtolower("location:/toy/public/index.php/index/demo/jieshao"));
        exit();
    }

    public function mess()
    {
        $where['admin_name']=session('user_name');
        $data=\app\index\model\Admin::where($where)->select();
        $this->assign('data',$data);

        return view();
    }

    public function about()
    {
        return view();
    }

    public function indexshuju()
    {
        return view();
    }

    public function wenben()
    {

        return view();
    }

    public function zhibiao()
    {

        //按材料关键词分类，统计总数
        $meterical = array("毛绒","塑料","木","布","PVC","塑胶","纸","胶质","PU","硅胶","金属","合金","泡沫");
        foreach ($meterical as $key =>$value) {
            //echo $value;
            $where['name'] = array('like', '%' . $value . '%');
            $result = Toy::where($where)->select();
            $sum=0;
            foreach ($result as $v){
                $sum+=$v['sell'];
            }
            $typeData[$key]['type']=$value;
            $typeData[$key]['sum']=$sum;
        }
        array_multisort(array_column($typeData,'sum'),SORT_DESC,$typeData);

        $this->assign('typeData',$typeData);

        //计算出每个地区的玩具的销量
        $citys = array("北京", "天津", "上海", "重庆", "河北", "辽宁", "黑龙江", "江苏", "浙江", "安徽",
            "福建", "江西", "山东", "河南", "湖北", "湖南", "广东", "四川");
        foreach ($citys as $key=>$value) {
            $where['city'] = array('like', '%' . $value . '%');
            $list = Toy::where($where)->select();
            $sum = 0;
            foreach ($list as $v) {
                $sum += $v['sell'];
            }
            $cityData[$key]['city']=$value;
            $cityData[$key]['sum']=$sum;
        }

        array_multisort(array_column($cityData,'sum'),SORT_DESC,$cityData);

        $this->assign('cityData',$cityData);

        //按价格分段，得到每个区间的商品数
        $prices = array(0, 50, 100, 200, 500, 1000);
        for($i = 0;$i<5;$i++){
            $result2['price'] = array(array('gt',$prices[$i]),array('elt',$prices[$i+1]));
            $count = Toy::where($result2)->count();//统计总数
            $Pricearray[$i] = $count;
        }
        $result1['price'] = array('egt',$prices[5]);
        $count = Toy::where($result1)->count();
        $Pricearray[5] = $count;

        $this->assign('Pricearray',$Pricearray);

        //按价格区间分段，计算该区间总销量

        $prices = array(0, 50, 100, 200, 500, 1000);
        for($i = 0;$i<5;$i++){
            $j = $i+1;
            $result2['price'] = array(array('gt',$prices[$i]),array('elt',$prices[$i+1]));
            $count1 = Toy::where($result2)->select();
            $sum = 0;
            foreach ($count1 as $v){
                $sum+=$v['sell'];
            }
            $Sellarray[$i] =$sum;
        }
        $result1['price'] = array('egt',$prices[5]);
        $count2 = Toy::where($result1)->select();
        $sum = 0;
        foreach ($count2 as $v){
            $sum+=$v['sell'];
        }
        $Sellarray[5] = $sum;

        $this->assign('Sellarray',$Sellarray);

        //获取材料名字 返回城市和该城市的该材料的玩具销量

        //$toy_type= $_POST['type'];
        $toy_type = "木";
        $citys = array("北京", "天津", "上海", "重庆", "河北", "辽宁", "黑龙江", "江苏", "浙江", "安徽",
            "福建", "江西", "山东", "河南", "湖北", "湖南", "广东", "四川");
        foreach ($citys as $key=>$value) {
            $where['city'] = array('like', '%' . $value . '%');
            $where['name'] = array('like', '%' . $toy_type . '%');
            $list = Toy::where($where)->select();
            $sum = 0;
            foreach ($list as $v) {
                $sum += $v['sell'];
            }
            $city[$key]=$value;
            $sumData[$key]=$sum;
        }
        $this->assign('city',json_encode($city));
        $this->assign('sumData',json_encode($sumData));




        return view();
    }

    public function toyType(){

        $toy_type= $_POST['material'];
        $citys = array("北京", "天津", "上海", "重庆", "河北", "辽宁", "黑龙江", "江苏", "浙江", "安徽",
            "福建", "江西", "山东", "河南", "湖北", "湖南", "广东", "四川");
        foreach ($citys as $key=>$value) {
            $where['city'] = array('like', '%' . $value . '%');
            $where['name'] = array('like', '%' . $toy_type . '%');
            $list = Toy::where($where)->select();
            $sum = 0;
            foreach ($list as $v) {
                $sum += $v['sell'];
            }

            $data[$key]=$sum;
        }
        return $data;
    }

    public function help()
    {
        $where['admin_name']=session('user_name');
        $data=\app\index\model\Admin::where($where)->select();
        $this->assign('data',$data);

        return view();
    }

    public function news(){
        header(strtolower("location:/toy/public/index.php/index/toynews/newsindex"));
        exit();
    }

    public function data()
    {
        $where['admin_name']=session('user_name');
        $data=\app\index\model\Admin::where($where)->select();
        $this->assign('data',$data);

        return view();
    }

    /*修改资料*/
    public function changedata()
    {
        $data = [
            'admin_name'=>$_POST['username'],
            'admin_nickname'=>$_POST['realname'],
            'admin_sex'=>$_POST['sex'],
            'industryApplication'=>$_POST['industryApplication'],
            'mainProject'=>$_POST['project'],
            'website'=>$_POST['web'],
            'location'=>$_POST['area'],
            'locationDetail'=>$_POST['areadetail'],
            'admin_email'=>$_POST['email']
        ];
        $dataSave=new Admin();
        if ($dataSave->edit($data)){
            $this->success('修改成功','mess');
        }
        else{
            $this->error('修改失败','change');
        }
    }


}
