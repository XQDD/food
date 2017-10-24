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
				 <li role="presentation" ><a href="/food/index.php/Home/person/index">个人信息</a></li>
			 	 <li role="presentation" class="dropdown">
				  	  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="	true" aria-expanded="false">
				    	  公告 <span class="caret"></span>
				   	  </a>
				   	 <ul class="dropdown-menu" style="overflow: hidden;">
				   	 	<?php if(is_array($announce)): foreach($announce as $key=>$vo): ?><li><a href="/food/index.php/Home/Index/announce/an_id/<?php echo ($vo["an_id"]); ?>"><?php echo ($vo["an_title"]); ?></a></li><?php endforeach; endif; ?>
				    </ul>
			 	 </li>
				<li role="presentation" class="active"><a href="#">
				<span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp;
				选课</a></li>
			</ul>
			
		</div>
		
		<div class="col-lg-3 co-md-3 col-sm-4"> 
			<div>
				<h5  class="text-left">
				<span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;
				<span><strong>开始时间：</strong><?php echo (date("Y/m/d  H:m",$date["da_start_time"])); ?></span></h5>
				<p><span></span></p>
			</div>
		</div>
		<div class="col-lg-3 co-md-3 col-sm-4" > 
			<div>
				<h5 class="text-left">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;
				<span><strong>结束时间：</strong><?php echo (date("Y/m/d  H:m",$date["da_end_time"])); ?></span></h5>
				<p><span></span></p>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left: -90px;">
			<div>
				<h5 class="text-left"><?php echo ($_SESSION['sdSession']['sd_name']); ?><a href="/food/index.php/Home/Login/logout" class="bg-danger">注销</a></h5>
			</div>
		</div>
		
		</div><!-- nav end -->

		<div class="row" style="margin-top: 50px;">
			<!-- 已选课表列表 -->
			
			<div class="col-lg-1 col-md-1"></div>
			
			<div class="col-lg-10" id="selected_div">
				 <form action='/food/index.php/Home/Index/search' class="form-horizontal" method="post">
                	<h2></h2>
                    	<div class="col-md-2">
                    		<input type="text" name="ct_teacher" placeholder="按教师名查找"class="form-control" required="">
                    	</div>
                    	<div class="col-md-2">
                    	<input type="submit" value="搜索" class="btn btn-primary">
                    	</div>
                    	<h1>&nbsp;</h1>
                 </form>
                 
				<table class="table table-striped table-hover ">
					<tr>
						<th class="bg-primary">序号</th>
						<th class="bg-primary">课程名称</th>
						<th class="bg-primary">课题难度</th>
						<th class="bg-primary">课题工作量</th>
						<th class="bg-primary">指导老师</th>
						<th class="bg-primary">拟安排实验室</th>
						<th class="bg-info text-center" >操作</th>
					</tr>
					<?php if(is_array($arrayList)): foreach($arrayList as $i=>$vo): ?><tr>
						<td><?php echo ((($p - 1) * 20) + $i+1); ?></td>
						<td><a href="/food/index.php/Home/Content/index/ct_id/<?php echo ($vo["ct_id"]); ?>"><?php echo ($vo["ct_name"]); ?></a></td>
						<td><?php echo ($vo["ct_nandu"]); ?></td>
						<td><?php echo ($vo["ct_gongzuoliang"]); ?></td>
						<td><?php echo ($vo["ct_teacher"]); ?></td>
						<td><?php echo ($vo["ct_lab"]); ?></td>
						<?php if($_SESSION['sdSession']['sd_phone']== ''): ?><td id="selectedId" class="selectedClass">
							    <button type="button" class="btn btn-warning btn-sm btn-block" >请先添加联系电话</button>
						    </td>
						<?php else: ?>
						
						<?php if($length == 0): ?><td id="selectedId" class="selectedClass">
							<?php if($vo['ct_seletctd_num'] == $vo['ct_limit_num']): ?><button type="button" class="btn btn-primary btn-sm btn-block" >已满</button>
							     <?php else: ?>
							    <a href="/food/index.php/Home/Person/selectContent/content_id/<?php echo ($vo["ct_id"]); ?>" class="btn btn-success btn-sm btn-block">选择</a><?php endif; ?>			       
						</td>
						<?php else: ?>
						<td id="selectedId" class="selectedClass">
							    <button type="button" class="btn btn-primary btn-sm btn-block" >你已选满</button>
						</td><?php endif; endif; ?>
					</tr><?php endforeach; endif; ?>
				</table>
			</div>
			<div class="col-lg-1 col-md-1"></div>
			<!-- table end-->
		</div>
		<div class="col-md-8 col-md-offset-5" style="margin-top: 20px;">
			<?php echo ($page); ?>
		</div>
        <div style="height: 160px;">&nbsp;</div>
		</div>
		<!-- 版权信息 -->
		<div class="row" style="background:#326FA3;width: 86%;margin-left: 7%;height: 110px;position: fixed;bottom: 0;;">
			<div style="margin-top: 15px;color: white;font-size: 15px;">
				<p class="text-center">&copy;2016广东海洋大学食品科学与工程系本科论文选题系统</p>
				<p class="text-center">技术支持:网维工作室&nbsp;&nbsp;微信:lzhlad</p>
				<p class="text-center">hubeizhangyi@163.com 张翼</p>
			</div>
		</div>
		<input type="hidden" id="startTime" value="<?php echo ($date["da_start_time"]); ?>"/>
		<input type="hidden" id="endTime" value="<?php echo ($date["da_end_time"]); ?>"/>
	</body>
        <script src="<?php echo (HOME_PUBLIC); ?>/js/jquery.min.js"></script>
		<script src="<?php echo (HOME_PUBLIC); ?>/js/bootstrap.min.js"></script>
			<script>
				$(document).ready(function(){
					var timestamp = Date.parse(new Date());
                timestamp = timestamp / 1000;
                if(timestamp < $("#startTime").val() || timestamp > $("#endTime").val()){
                	$(".selectedClass").empty().append("<button type='button' class='btn btn-danger btn-sm btn-block' >不是选课时间</button>");
                }
				})
			</script>

</html>