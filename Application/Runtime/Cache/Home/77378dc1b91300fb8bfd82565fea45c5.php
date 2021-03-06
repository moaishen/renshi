<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 以上代码告诉IE浏览器，IE8/9及以后的版本都会以最高版本IE来渲染页面。 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/style.css">
    <title>添加员工</title>
</head>
<body>
<div class="container">
<form class="form-horizontal" style="width: 400px;">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail8" class="col-sm-2 control-label">性别</label>
    <div class="col-sm-10">
      	<div class="radio">
	  <label>
		<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
		男
	  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			女
		  </label>
		</div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">年龄</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">手机号码</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">学历</label>
    <div class="col-sm-10">
      	<select class="form-control">
		  <option>本科</option>
		  <option>研究生</option>
		  <option>大专</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">职位</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail6">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">入职日期</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail7">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">职员身份</label>
      <div class="col-sm-10">
      	<select class="form-control">
		  <option>实习生</option>
		  <option>正式员工</option>
		  <option>临时工</option>
		  <option>离职</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">确认添加</button>
    </div>
  </div>
</form>
</div>
</body>
</html>