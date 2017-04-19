<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class IndexController extends LoginController {
	public function index(){
		$this->LoginTrue();//已登录检测
		
		$aPowers=session("aPowers");
        $admin_role=M("role");
        if($aPowers==0){
            $powersName="系统管理员";
            $powersValue="0";
        }else{
            $rs_role=$admin_role->where("arId={$aPowers}")->field("arName,arPowers")->find();
            $powersName=$rs_role["arName"];
            $powersValue=$rs_role["arPowers"];
            $morepowersValue=$powersValue;
            $powersValue=explode("-", $powersValue);
        }
        $this->assign("powersName",$powersName);
        $this->assign("morepowersValue",$morepowersValue);
        $this->assign("aUser",$_SESSION['aUser']);
		$this->display();
	}
}