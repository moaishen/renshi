<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
<title>用户登录</title>
<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css" />
<link rel="stylesheet" href="/Public/css/login.css">
<style type="text/css">

</style>
</head>

<body>
<div class="box">
		<div class="login-box">
			<div class="login-title text-center">
				<h1><small>人事管理系统</small></h1>
			</div>
			<div class="login-content ">
			<div class="form">
			<form action="/Login/CheckLogin" method="post">
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" id="username" name="aUser" class="form-control" placeholder="用户名" required="required">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="text" id="password" name="aPwd" class="form-control" placeholder="密码" required="required">
						</div>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-xs-4 col-xs-offset-4 ">
						<button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-off"></span> 登录</button>
					</div>
				</div>
			
			</form>
			</div>
		</div>
	</div>
</div>
</body>

</html>