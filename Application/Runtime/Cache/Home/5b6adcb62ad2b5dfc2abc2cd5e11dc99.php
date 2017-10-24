<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>学生选课系统</title>
        <link rel="icon" href="<?php echo (HOME_PUBLIC); ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo (HOME_PUBLIC); ?>/images/favicon.ico" type="image/x-icon" /> 
		<link href="<?php echo (HOME_PUBLIC); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo (HOME_PUBLIC); ?>/css/style.css" rel="stylesheet">
	</head>
	<body scroll="no" style="overflow-x:hidden">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<img src="<?php echo (HOME_PUBLIC); ?>/images/header.png"  style="width: 104%;margin-left: -2%;"/>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="indexBg01_div" >
				<img src="<?php echo (HOME_PUBLIC); ?>/images/indexBg3.png" />
			</div>
			<!--<script>
			function nameAjax() {
				var valueDel = $('#sd_num').val();
				$.ajax({
					"type": 'GET',
					"url": "/food/index.php/Home/Login/nameAjax?valueDel=" + valueDel,
				    "success":function(data) { 
				    	if(data == null){
				    		alert("学号"+ valueDel +"不存在!");
				    		$('#sd_num').val('')
				    	}
		               
			         },  
			        "error" : function() {  
			           alert("异常！");  
			        }
					});
				}
		</script>-->
			<div class="login-box">
				<form class="form-horizontal" method="post" name="submitform" action="">
					<table class="table table-hover">
						<tr>
							<td>
								<h4 class="text-center">学生登陆</h4>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><label class="control-label">学号</label></span>
									<input name="sd_num" type="text" class="form-control" id="sd_num" required="true" onblur="nameAjax();" placeholder="请输入你的学号" maxlength="12" aria-describedby="basic-addon1" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><label for="inputEmail3" class="control-label">密码</label></span>
									<input name="sd_pwd" type="password" required="true" class="form-control" id="exampleInputPassword3" placeholder="请输入你的密码" maxlength="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" oncopy="return False" onpaste="return False" oncut="return False">
								</div>
							</td>
						</tr>

						<!--<tr>
							<td>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><label for="inputEmail3" class="control-label">验证码</label></span>
									<input class="form-control" name="captcha" required="true" placeholder="请输入验证码" maxlength="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" oncopy="return False" onpaste="return False" oncut="return False">
								</div>
							</td>
						</tr>-->

						<tr>
							<td align="center">
							<img src="/food/index.php/Home/Login/code" style="float: left;width: 140px;" alt="CAPTCHA" border="1" onclick="this.src='/food/index.php/Home/Login/code/' +Math.random()" style="cursor: pointer;" title="看不清？点击更换另一个验证码。" />	
							<input class="form-control" name="captcha" style="float: right;width: 140px;margin-top: 7px;" required="true" placeholder="请输入验证码" maxlength="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" oncopy="return False" onpaste="return False" oncut="return False">
							</td>
						</tr>
						<tr>
							<td>
								<input class="btn btn-primary btn-block login-btn" type="submit" value="登陆" style="height: 50px;">
							</td>
						</tr>
						<tr>
							<td align="center">
								<h5 style="color: red;"><?php echo ($marks); ?></h5>
							</td>
						</tr>
					</table>
				</form>

			</div>
		</div>
<!-- 版权信息 -->
		<div class="row" style="background:#326FA3;width: 86%;margin-left: 7%;height: 110px;position: fixed;bottom: 0;;">
			<div style="margin-top: 15px;color: white;font-size: 15px;">
				<p class="text-center">&copy;2016广东海洋大学食品科学与工程系本科论文选题系统</p>
				<p class="text-center">技术支持:网维工作室&nbsp;&nbsp;微信:lzhlad</p>
				<p class="text-center">hubeizhangyi@163.com 张翼</p>
			</div>
		</div>
		</div>
		<script src="<?php echo (HOME_PUBLIC); ?>/js/jquery.min.js"></script>
		<script src="<?php echo (HOME_PUBLIC); ?>/js/bootstrap.min.js"></script>

	</body>

</html>