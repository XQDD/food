<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
        <!-- 导入css -->
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>广东海洋大学食品学院选课系统</title>
    <link href="<?php echo (ADMIN_PUBLIC); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_PUBLIC); ?>/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php echo (ADMIN_PUBLIC); ?>/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_PUBLIC); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_PUBLIC); ?>/css/mystyle.css" rel="stylesheet">
    <link href="<?php echo (ADMIN_PUBLIC); ?>/css/style.css" rel="stylesheet">
    
</head>
    <link rel="stylesheet" href="<?php echo (ADMIN_PUBLIC); ?>/css/jquery.datetimepicker.css" />
        <!-- Mainly scripts -->
           <!-- 导入js -->
        <script src="<?php echo (ADMIN_PUBLIC); ?>/js/jquery-2.1.1.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/inspinia.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo (ADMIN_PUBLIC); ?>/js/jquery.datetimepicker.js"></script>
<body>
    <div id="wrapper">
        <!-- 导入导航菜单 -->
            <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element admin_div"> 
                            <a href="/food/index.php/Admin/Index/index">
                            <img alt="image" class="admin_img" src="<?php echo (ADMIN_PUBLIC); ?>/img/p5.jpg" style="width: 222px;margin-left: -27px;margin-top: -44px;"/>
                            </a>
                            </span>
                            <span class="clear"> 
                            <span class="block admin_name" style="font-size: 20px;padding: 10px;color: white;">
                              <?php echo ($_SESSION['admin']['mg_name']); ?>
                             </span></span>
                        </div>
                    </li>
                    <li class="add_li">
                        <a href="index.html"><i class="fa fa-diamond"></i> <span class="nav-label">增加管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        	<!--<li class="add_li1"><a href="/food/index.php/Admin/Faculty/add">添加系</a></li>-->
                            <!--<li class="add_li2"><a href="/food/index.php/Admin/Class/add">添加选课班级</a></li>-->
                            <!--<li class="add_li3"><a href="/food/index.php/Admin/Content/add">添加课题内容</a></li>-->
                            <li class="add_li4"><a href="/food/index.php/Admin/Student/add">导入学生信息</a></li>
                            <li class="add_li5"><a href="/food/index.php/Admin/Announce/add">添加公告</a></li>
                        </ul>
                    </li>
                    
                    <li class="del_li">
                        <a href="index.html"><i class="fa fa-diamond"></i> <span class="nav-label">删除管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        	<!--<li class="del_li1"><a href="/food/index.php/Admin/faculty/delete">删除系</a></li>-->
                            <!--<li class="del_li2"><a href="/food/index.php/Admin/class/delete">删除班级</a></li>-->
                            <li class="del_li3"><a href="/food/index.php/Admin/content/delete">删除课题内容</a></li>
                            <li class="del_li4"><a href="/food/index.php/Admin/Student/delete">删除学生信息</a></li>
                            <li class="del_li5"><a href="/food/index.php/Admin/Announce/delete">删除公告</a></li>
                        </ul>
                    </li>
                    <li class="edit_li">
                        <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">修改管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="edit_li1"><a href="/food/index.php/Admin/Student/edit">修改学生信息</a></li>
                        </ul>
                    </li>
                    <li class="select_li">
                        <a><i class="fa fa-diamond"></i> <span class="nav-label">查看管理</span>  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        	<!--<li class="select_li1"><a href="/food/index.php/Admin/Faculty/index">查看系情况</a></li>-->
                        	<!--<li class="select_li2"><a href="/food/index.php/Admin/Class/index">查看班情况</a></li>-->
                            <li class="select_li3"><a href="/food/index.php/Admin/Content/index">查看课题发布情况</a></li>
                            <li class="select_li5"><a href="/food/index.php/Admin/SC/index">查看学生的选课情况</a></li>
                            <li class="select_li6"><a href="/food/index.php/Admin/Student/index">查看所有学生的资料</a></li>
                            <li class="select_li7"><a href="/food/index.php/Admin/Announce/index">查看公告</a></li>
                        </ul>
                    </li>
                   
                    <li class="manager_li">
                        <a href="/food/index.php/Admin/Manager/index"><i class="fa fa-diamond"></i> <span class="nav-label">管理员</span></a>
                       <ul class="nav nav-second-level">
                            <li class="manager_li1"><a href="/food/index.php/Admin/Manager/index">超级管理员</a></li>
                            <!--<li class="manager_li2"><a href="/food/index.php/Admin/Manager/index2">系管理员</a></li>-->
                            <li class="manager_li3"><a href="/food/index.php/Admin/Manager/index1">老师管理员</a></li>
                        </ul>
                    </li>
                     <li class="date_li">
                        <a href="/food/index.php/Admin/CourseTime/index"><i class="fa fa-diamond"></i> <span class="nav-label">选课时间</span> </a>
                    </li>
                </ul>
            </div>
        </nav>
<!--        动态添加navbar中的active属性
-->
        <script type="text/javascript">
        	 function navbar(class1,class2){
        	 	$(class1).addClass('active');
        		$(class2).addClass('active');
        	 }
        </script>
        



        <div id="page-wrapper" class="gray-bg dashbard-1">
        <!-- 导入页面头部 -->
    <link rel="icon" href="<?php echo (ADMIN_PUBLIC); ?>/img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo (ADMIN_PUBLIC); ?>/img/favicon.ico" type="image/x-icon" />
<div class="row border-bottom">
	<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
		
		<ul class="nav navbar-top-links navbar-right">
			<li>
				<span class="m-r-l text-justify welcome-message">
					广东海洋大学食品科学与工程系论文选课系统
				</span>
			</li>
			<li>
				<a href="/food/index.php/Admin/Login/logout">
					<i class="fa fa-sign-out"></i>注销
				</a>
			</li>
		</ul>

	</nav>

              <!-- 本页面内容 -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h3>选课时间</h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">首页</a>
                        </li>
                        <li class="active">
                            <strong class="breadcrumb_li3">选课时间</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-3">
                    <h2></h2>
                    <a class="btn btn-primary"  href="/food/index.php/Admin/CourseTime/add">修改</a>
                </div>
            </div>
            
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
        	<div class="col-lg-6 col-lg-offset-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>选课时间</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>			      
  
                    <script>   
			 
						/**      
						 * 对Date的扩展，将 Date 转化为指定格式的String      
						 * 月(M)、日(d)、12小时(h)、24小时(H)、分(m)、秒(s)、周(E)、季度(q) 可以用 1-2 个占位符      
						 * 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)      
						 * eg:      
						 * (new Date()).pattern("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423      
						 * (new Date()).pattern("yyyy-MM-dd E HH:mm:ss") ==> 2009-03-10 二 20:09:04      
						 * (new Date()).pattern("yyyy-MM-dd EE hh:mm:ss") ==> 2009-03-10 周二 08:09:04      
						 * (new Date()).pattern("yyyy-MM-dd EEE hh:mm:ss") ==> 2009-03-10 星期二 08:09:04      
						 * (new Date()).pattern("yyyy-M-d h:m:s.S") ==> 2006-7-2 8:9:4.18      
						 */        
						Date.prototype.pattern=function(fmt) {         
						    var o = {         
						    "M+" : this.getMonth()+1, //月份         
						    "d+" : this.getDate(), //日         
						    "h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //小时         
						    "H+" : this.getHours(), //小时         
						    "m+" : this.getMinutes(), //分         
						    "s+" : this.getSeconds(), //秒         
						    "q+" : Math.floor((this.getMonth()+3)/3), //季度         
						    "S" : this.getMilliseconds() //毫秒         
						    };         
						    var week = {         
						    "0" : "/u65e5",         
						    "1" : "/u4e00",         
						    "2" : "/u4e8c",         
						    "3" : "/u4e09",         
						    "4" : "/u56db",         
						    "5" : "/u4e94",         
						    "6" : "/u516d"        
						    };         
						    if(/(y+)/.test(fmt)){         
						        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));         
						    }         
						    if(/(E+)/.test(fmt)){         
						        fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "/u661f/u671f" : "/u5468") : "")+week[this.getDay()+""]);         
						    }         
						    for(var k in o){         
						        if(new RegExp("("+ k +")").test(fmt)){         
						            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));         
						        }         
						    }         
						    return fmt;         
						}       
			     
			
				        //计算剩余时间
				        function getEndTime(){
				            //var endTime= new Date(2015,11,12,12,11); //截止时间:2014年10月16日12时00分
				            var nowTime = new Date();
				            var nowData = nowTime.pattern("yyyy-MM-dd hh:mm");
				            var nMS = $('.start_time').val() - nowTime.getTime();
				            //alert(nMS);
			                alert(nowData.getTime()); 
				            var nH=Math.floor(nMS/(1000*60*60)) % 24;
				            var nM=Math.floor(nMS/(1000*60)) % 60;
				            var nS=Math.floor(nMS/1000) % 60;
				            /*$(".endHour").html(nH);
				            $(".endMinute").html(nM);
				            $(".endSecond").html(nS);*/
				            setTimeout("getEndTime()",1000);
				        }
				        window.onload=getEndTime;
                    </script>
                    <div class="ibox-content">
                    	<!--<div class="endHour">00</div>时
						<div class="endMinute">00</div>分
						<div class="endSecond">00</div>秒</div>-->
                        <form method="post" class="form-horizontal" id="form_data" name="form_data" enctype="multipart/form-data">
                                
                                <div class="form-group"><label class="col-sm-4 control-label">选课开始时间:</label>
                                    <div class="col-sm-5">
                                    	<label class="control-label"><?php echo (date("Y/m/d  H:m",$list["da_start_time"])); ?></label>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-4 control-label">选课结束时间:</label>
                                    <div class="col-sm-5">
                                    	<label class="control-label start_end"><?php echo (date("Y/m/d  H:m",$list["da_end_time"])); ?></label>
                                </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
            <!-- end -->
          <!-- 导入页面头部按钮 -->
            <div class="row">
            <div class="col-lg-12">

                <div class="footer">
                    <div class="pull-right">
                        <strong>网维团队</strong> 提供技术支持
                    </div>
                    <div>
                        版权归属<strong> &nbsp;广东海洋大学食品科学与工程系选课系统&nbsp;</strong>  &copy; 2016
                    </div>
                </div>
            </div>
        </div>
        
          <!-- 导入页面头部按钮 -->
                    <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active"><a data-toggle="tab" href="#tab-1">
                        Notes
                    </a></li>
                    <li><a data-toggle="tab" href="#tab-2">
                        Projects
                    </a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3">
                        <i class="fa fa-gear"></i>
                    </a></li>
                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                    <label class="onoffswitch-label" for="example5">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Global search
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                    <label class="onoffswitch-label" for="example6">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                    <label class="onoffswitch-label" for="example7">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-content">
                            <h4>Settings</h4>
                            <div class="small">
                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>
    <input type="hidden" class="hidden_input" value="<?php echo ($list[0]["mg_sign"]); ?>"/>
<!--    判断是那中类型的管理员
--> <script type="text/javascript">
        	navbar('.date_li','.date_li');
    </script>
    <script>
	$('#datetimepicker').datetimepicker();
	$('#datetimepicker1').datetimepicker();
	//$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
	</script>
</body>
</html>