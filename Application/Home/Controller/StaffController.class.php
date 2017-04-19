<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class StaffController extends LoginController {
	
//	职员列表
	public function showStaff(){
		$this->LoginTrue();//登录检测
		$this->display();
	}
	
//	添加职员
	public function addStaff(){
        $this->LoginTrue();//登录检测
		
		if(empty($_POST)){
			$this->display();
		}
		else{
//			存入数据库
		}	
    }
}