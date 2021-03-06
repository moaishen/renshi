<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>人事管理系统</title>
	<link rel="stylesheet" href="/Public/css/sccl.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/skin.css" id="layout-skin"/>

  </head>

  <body style="zoom: 1;">
	<div class="layout-admin">

		<!-- 头部信息 -->
		<header class="layout-header">
			<span class="header-logo">人事管理系统</span>
			<a class="header-menu-btn" href="javascript:;"><i class="icon-font"></i></a>
			<ul class="header-bar">
				<li class="header-bar-role"><a href="javascript:;">欢迎您</a></li>
				<li class="header-bar-nav">
					<a href="javascript:;">admin<i class="icon-font" style="margin-left:5px;"></i></a>
					<ul class="header-dropdown-menu">
						<li><a href="javascript:;">个人信息</a></li>
						<li><a href="javascript:;">切换账户</a></li>
						<li><a href="javascript:;">退出</a></li>
					</ul>
				</li>
			</ul>
		</header>

		<!-- 右侧菜单 -->
		<aside class="layout-side">
			<ul class="side-menu">

			<li class="menu-header menu-item">主菜单</li>
			<li class="menu-item">
				<a href="">
					<i class="icon-font "></i>
					<span>员工管理</span>
					<i class="icon-font icon-right"></i>
				</a>
				<ul class="menu-item-child" id="menu-child-1">
					<li><a href="/Staff/showStaff"><i class="icon-font"></i><span>员工列表</span></a></li>
					<li><a href="/Staff/addStaff"><i class="icon-font"></i><span>添加员工</span></a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="">
					<i class="icon-font "></i>
					<span>商品管理</span>
					<i class="icon-font icon-right"></i>
				</a>
				<ul class="menu-item-child" id="menu-child-2">
					<li><a href="test1.html"><i class="icon-font"></i><span>品牌管理</span></a></li>
					<li><a href="test2.html"><i class="icon-font"></i><span>分类管理</span></a></li>
				</ul>
			</li>
			</ul>
		</aside>

		<div class="layout-side-arrow"><div class="layout-side-arrow-icon"><i class="icon-font"></i></div></div>

		<!-- 右侧内容 -->
		<section class="layout-main">
			<div class="layout-main-tab">
				<button class="tab-btn btn-left"><i class="icon-font"></i></button>
                <nav class="tab-nav">
                    <div class="tab-nav-content">
                        <a href="javascript:;" class="content-tab active" data-id="home.html">首页</a>
                    </div>
                </nav>
                <button class="tab-btn btn-right"><i class="icon-font"></i></button>
			</div>
			<div class="layout-main-body">
				<iframe class="body-iframe" name="right" width="100%" height="99%" src="" frameborder="0" data-id="home.html" seamless></iframe>
			</div>
		</section>

		<!-- 底部版权 -->
		<div class="layout-footer">计科1133</div>
	</div>
	<script type="text/javascript" src="/Public/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/js/sccl.js"></script>
</body>
</html>