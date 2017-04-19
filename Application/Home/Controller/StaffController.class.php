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
		//获取职员数量
        $staffNum=M("staff");
        $rs_staffNum=$staffNum->count();
        $number=$rs_staffNum+1;
        $this->assign("number",$number);
        //部门的处理
        $department=M("department");
        if($depId!=0){
         $rs_department=$department->field("dId,dPid,dPsid,dName")->where("dId={$depId}")->find();
        }else{
        $rs_department=$department->field("dId,dPid,dPsid,dName")->select();
        }
        $this->assign("depId",$depId);
        $this->assign("rs_department",$rs_department);
        //下面对自定义变量的处理
		//学历
        $variables=M("variables");
        $rs_xueli=$variables->where("vId=1")->find();
        $xueli=explode("|",$rs_xueli["vVariablesVal"]);
        $this->assign("xueli",$xueli);
		//职称
        $rs_zhicheng=$variables->where("vId=2")->find();
        $zhicheng=explode("|",$rs_zhicheng["vVariablesVal"]);
        $this->assign("zhicheng",$zhicheng);
		//职务
        $rs_zhiwu=$variables->where("vId=3")->find();
        $zhiwu=explode("|",$rs_zhiwu["vVariablesVal"]);
        $this->assign("zhiwu",$zhiwu);
		//婚姻状况
        $rs_hunyin=$variables->where("vId=4")->find();
        $hunyin=explode("|",$rs_hunyin["vVariablesVal"]);
        $this->assign("hunyin",$hunyin);
		//民族
        $rs_minzu = $variables->where("vId=5")->find();
        $minzu = explode("|", $rs_minzu["vVariablesVal"]);
        $this->assign("minzu", $minzu);
		
        $this->display();
    }
}