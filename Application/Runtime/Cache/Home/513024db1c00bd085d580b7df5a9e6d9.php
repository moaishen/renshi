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
    <title></title>
</head>
<body>

<!--搜索-->
<form  class="navbar-form navbar-left" role="search">
	<button type="button" class="btn btn-default">在职员工</button>
	<button type="button" class="btn btn-default">离职员工</button>
</form>

<form class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="请输入关键字">
  </div>
  <button type="submit" class="btn btn-default">搜索</button>
</form>

<!--数据列表-->
<table class="table table-bordered  table-hover" id="tablelist">
      <thead>
        <tr>
          <th>序号</th>
          <th>工号</th>
          <th>姓名</th>
          <th>性别</th>
          <th>年龄</th>
          <th>手机号码</th>
          <th>邮箱</th>
          <th>籍贯</th>
          <th>身份证号</th>
          <th>学历</th>
          <th>职位</th>
          <th>所属部门</th>
          <th>入职日期</th>
          <th>状态</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>1001</td>
          <td>jian</td>
          <td>男</td>
          <td>20</td>
          <td>13800138000</td>
          <td>12qweqw3@qq.com</td>
          <td>广东东莞</td>
          <td>440981199906135470</td>
          <td>本科</td>
          <td>前端</td>
          <td>技术部</td>
          <td>2017-01-12</td>
          <td>正式员工</td>
          <td>
			  <button type="button" class="btn btn-info">编辑</button>
			  <button type="button" class="btn btn-danger">删除</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>1001</td>
          <td>jian</td>
          <td>男</td>
          <td>20</td>
          <td>13800138000</td>
          <td>12qweqw3@qq.com</td>
          <td>广东东莞</td>
          <td>440981199906135470</td>
          <td>本科</td>
          <td>前端</td>
          <td>技术部</td>
          <td>2017-01-12</td>
          <td>正式员工</td>
          <td>
			  <button type="button" class="btn btn-info">编辑</button>
			  <button type="button" class="btn btn-danger">删除</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td><?php echo ($staff['stNum']); ?></td>
          <td><?php echo ($staff['stName']); ?></td>
          <td><?php echo ($staff['stSex']); ?></td>
          <td><?php echo ($staff['stAge']); ?></td>
          <td><?php echo ($staff['stTel']); ?></td>
          <td><?php echo ($staff['stEmail']); ?></td>
          <td><?php echo ($staff['stNativePlace']); ?></td>
          <td><?php echo ($staff['stIDCard']); ?></td>
          <td><?php echo ($staff['stDegress']); ?></td>
          <td><?php echo ($staff['stDepartment']); ?></td>
          <td><?php echo ($staff['stDuties']); ?></td>
          <td><?php echo ($staff['stEntryDate']); ?></td>
          <td><?php echo ($staff['stJobState']); ?></td>

          <td>
			  <button type="button" class="btn btn-info">编辑</button>
			  <button type="button" class="btn btn-danger">删除</button>
          </td>
        </tr>
      </tbody>
</table>

<!--页码-->
<nav aria-label="Page navigation"  style="text-align: center">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
</body>
</html>