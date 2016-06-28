<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Cloud Admin | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="./common/js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="./common/css/cloud-admin.css" >
	
	<link href="./common/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="./common/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="./common/js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="./common/css/animatecss/animate.min.css" />
	<!-- FONTS -->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="index.html"><img src="./common/img/1.jpg" height="40" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">登录</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputEmail1">用户名</label>
									<i class="fa fa-envelope"></i>
									<input type="text" name="username" class="form-control" id="exampleInputUsername" >
                                      <span id="check_name"></span>
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码</label>
									<i class="fa fa-lock"></i>
									<input type="password" name="password" class="form-control" id="Password1" >
                                      <span id="check_pwd"></span>
								  </div>
								  <div class="form-actions">
									<label class="checkbox"> <input type="checkbox" class="uniform" value=""> Remember me</label>
									<button type="button" id="lolo" class="btn btn-danger" onclick="check_log()">登录</button>
								  </div>
								</form>
								<!-- SOCIAL LOGIN -->
								<div class="divide-20"></div>
								<div class="center">
									<strong>Or login using your social account</strong>
								</div>
								<div class="divide-20"></div>
								<div class="social-login center">
									<a class="btn btn-primary btn-lg">
										<i class="fa fa-facebook"></i>
									</a>
									<a class="btn btn-info btn-lg">
										<i class="fa fa-twitter"></i>
									</a>
									<a class="btn btn-danger btn-lg">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
								<!-- /SOCIAL LOGIN -->
								<div class="login-helpers">
									<p align="center"><a href="#" onclick="swapScreen('forgot');return false;">忘记密码</a>
                                    <br>
									Don't have an account with us?
                                    <br>
                                    <a href="#" onclick="swapScreen('register');return false;">点击注册</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
			<!-- REGISTER -->
			<section id="register">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">注册</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputUsername">用户名:</label>
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" id="user_name"  required="required" >
                                      <span id="re_name"></span>
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">电子邮箱(email):</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" required="required" >
                                      <span id="re_email"></span>
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码:</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" id="exampleInputPassword2" required="required" >
                                      <span id="re_pwd"></span>
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword2">确认密码:</label>
									<i class="fa fa-check-square-o"></i>
									<input type="password" class="form-control" id="exampleInputPassword3" required="required">
                                      <span id="re_repwd"></span>
								  </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">电话:</label>
                                        <i class="fa fa-check-square-o"></i>
                                        <input type="text" class="form-control" id="exampleInputTell" required="required">
                                        <span id="re_tell"></span>
                                    </div>
								  <div class="form-actions">
									<label class="checkbox"> <input type="checkbox"  class="uniform" value=""> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
									<button type="button"  onclick="register()" class="btn btn-success">注册</button>
								  </div>
								</form>
								<!-- SOCIAL REGISTER -->
								<div class="divide-20"></div>
								<div class="center">
									<strong>Or register using your social account</strong>
								</div>
								<div class="divide-20"></div>
								<div class="social-login center">
									<a class="btn btn-primary btn-lg">
										<i class="fa fa-facebook"></i>
									</a>
									<a class="btn btn-info btn-lg">
										<i class="fa fa-twitter"></i>
									</a>
									<a class="btn btn-danger btn-lg">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
								<!-- /SOCIAL REGISTER -->
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login');return false;">返回登录</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/REGISTER -->
			<!-- FORGOT PASSWORD -->
			<section id="forgot">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">Reset Password</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputEmail1">Enter your Email address</label>
									<i class="fa fa-envelope"></i>
									<input type="email" class="form-control" id="exampleInputEmail1" >
								  </div>
								  <div class="form-actions">
									<button type="submit" class="btn btn-info">Send Me Reset Instructions</button>
								  </div>
								</form>
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login');return false;">Back to Login</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- FORGOT PASSWORD -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="./common/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="./common/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="./common/bootstrap-dist/js/bootstrap.min.js"></script>
	
	
	<!-- UNIFORM -->
	<script type="text/javascript" src="./common/js/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="./common/js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("login");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
    <script>
       function check_log(){
           var name = document.getElementById('exampleInputUsername').value;
           var pwd = document.getElementById('Password1').value;
           if(name==""){
               document.getElementById('check_name').innerHTML = "用户名不能为空";
               return false
           }
           if(pwd==""){
               document.getElementById('check_pwd').innerHTML = "密码不能为空";
               return false
           }
           if(name && pwd){
               var ajax = new XMLHttpRequest();
               ajax.onreadystatechange    =   function(){
                   if(ajax.readyState == 4 && ajax.status==200){
                       //alert(ajax.responseText)
                       if(ajax.responseText==1){
                           location.href='index.php?r=index/index'
                       }else{
                           alert('密码错误');
                       }
                   }
               }
               ajax.open('post',"index.php?r=login/login",true);
               ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
               ajax.send('username='+name+'&password='+pwd);
           }
       }
        function register(){
            var name  = document.getElementById('user_name').value;
            var email = document.getElementById('exampleInputEmail1').value;
            var pwd   = document.getElementById('exampleInputPassword2').value;
            var repwd = document.getElementById('exampleInputPassword3').value;
            var tell  = document.getElementById('exampleInputTell').value;
            if(name==""){
                document.getElementById('re_name').innerHTML = "用户名不能为空";
            }
            if(email==""){
                document.getElementById('re_email').innerHTML = "email不能为空";
            }
            if(pwd==""){
                document.getElementById('re_pwd').innerHTML = "密码不能为空";
            }
            if(repwd==""){
                document.getElementById('re_repwd').innerHTML = "确认密码不能为空";
            }
            if(tell==""){
                document.getElementById('re_tell').innerHTML = "电话号码不能为空";
            }

            if(name && email && pwd && repwd && tell){
                if(pwd == repwd){
                    //alert(1)
                    var ajax = new XMLHttpRequest();
                    ajax.onreadystatechange    =   function(){
                        if(ajax.readyState == 4 && ajax.status==200){
                            //alert(ajax.responseText)
                            if(ajax.responseText){
                                location.href="index.php?r=index/index";
                            }else{
                                alert('注册失败')
                            }
                        }
                    }
                    ajax.open('post',"index.php?r=login/register",true);
                    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    ajax.send("name="+name+"&email="+email+"&pwd="+pwd+"&repwd="+repwd+"&tell="+tell);
                }else{
                    document.getElementById('re_repwd').innerHTML = "密码不一致";
                }
            }
        }
    </script>
	<!-- /JAVASCRIPTS -->
</body>
</html>