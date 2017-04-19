<?php
namespace Home\Controller;
use Think\Controller;
class LoginTrueController extends Controller {
    public function ExitLogin()
    {
        session(null);
        $this->success("注销成功", U("login/index"));
    }
	
	public function LoginTrue(){
		if(! session("aUser")) {
			$this->error("Sorry ！你还没有登录，请登陆后访问！",U('/login/index/'));
			exit;
		}
	}
}