<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>选课</title>
		<link rel="icon" href="<?php echo (HOME_PUBLIC); ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo (HOME_PUBLIC); ?>/images/favicon.ico" type="image/x-icon" />      
		<link href="<?php echo (HOME_PUBLIC); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo (HOME_PUBLIC); ?>/css/style.css" rel="stylesheet">
		<style>
			#menu{
				margin: 10px auto;
				width: 80%;
				z-index: 120;
			}
		</style>

	</head>

	<body scroll="no" style="overflow-x:hidden">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<img src="<?php echo (HOME_PUBLIC); ?>/images/header.png"  style="width: 104%;margin-left: -2%;"/>
				</div>
			</div>
		</div>
		<!-- 路径导航条 -->
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1"></div>
			<div class="col-lg-4  col-md-4" id="nav_div">
				<ul class="nav nav-tabs nav-justified">
					<li role="presentation"><a href="/food/index.php/Home/person/index">个人信息</a></li>
					<li role="presentation" class="dropdown  glyphicon  active">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="	true" aria-expanded="false">
				    	  公告 <span class="caret"></span>
				   	    </a>
						<ul class="dropdown-menu" style="overflow: hidden;">
							<?php if(is_array($announce)): foreach($announce as $key=>$vo): ?><li><a href="/food/index.php/Home/Index/announce/an_id/<?php echo ($vo["an_id"]); ?>"><?php echo ($vo["an_title"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</li>
					<li role="presentation">
						<a href="/food/index.php/Home/Index/index">
							<span aria-hidden="true"></span>&nbsp; 选课
						</a>
					</li>
				</ul>
			</div></div>
		<!-- nav end -->

		<div class="row" style="padding: 50px;width: 84%;margin-left: 8%;">
			<!-- 已选课表列表 -->
			<div class="col-lg-8 col-lg-offset-2">
				<div align="center">
					<h3><?php echo ($list["an_title"]); ?></h3>
				</div>
				<div>&nbsp;
					<p align="center">
					<?php echo ($list["an_content"]); ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-lg-offset-9">
				<span>作者:</span><?php echo ($list["an_author"]); ?>&nbsp;&nbsp;&nbsp;发布日期:<?php echo (date("Y-m-d",$list["an_create_time"])); ?>
			</div>
		</div>
		<div style="height: 110px;">&nbsp;</div>
		</div>
		<!-- 版权信息 -->
		<div class="row" style="background:#326FA3;width: 86%;margin-left: 7%;height: 110px;position: fixed;bottom: 0;;">
			<div style="margin-top: 15px;color: white;font-size: 15px;">
				<p class="text-center">&copy;2016广东海洋大学食品科学与工程系本科论文选题系统</p>
				<p class="text-center">技术支持:网维工作室&nbsp;&nbsp;微信:lzhlad</p>
				<p class="text-center">hubeizhangyi@163.com 张翼</p>
			</div>
		</div>
	</body>
	<script src="<?php echo (HOME_PUBLIC); ?>/js/jquery.min.js"></script>
	<script src="<?php echo (HOME_PUBLIC); ?>/js/bootstrap.min.js"></script>

</html>