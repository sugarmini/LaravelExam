<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" href="../css/home.css">
</head>
<body>
	<div class="top">
		<div class="main">
			<div class="nav">
				<a href="index.html">
					<img src="../images/logo.png" alt="">
				</a>
				<ul>
					<li><a href="#" class="active">个人中心</a></li>
					<li><a href="#">模拟考试</a></li>
					<li><a href="#">考试分析</a></li>
					<li><a href="#">论坛</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="main">
			<div class="profile">
				<a href="#"><img src="../images/user_default.jpg" alt=""></a>
				<input type="button" value="修改头像" class="button">
				<input type="button" value="退出登录" class="button">
			</div>
			<div class="tab">
				<div class="tab-title">
					<ul>
						<li class="select"><a href="#">基本信息</a></li>
						<li><a href="#">修改密码</a></li>
						<li class="mod-email1"><a href="#">修改邮箱</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div id="tab1" class="tabs">
						<form action="">
							<div class="form-group">
								<label>
									<span>昵 称</span>
									<input type="text" class="input" value="在线考试系统-E学堂">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>邮 箱</span>
									<input type="email" class="input" readonly="readonly" value="846614172@qq.com">
									<a href="#" class="mod-email2">修改邮箱</a>
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>性 别</span>
									<input type="text" class="input" readonly="readonly" value="女">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>职 业</span>
									<input type="text" class="input" readonly="readonly" value="Web前端">
									<a href="#" id="career">修改职业</a>
									<input type="text" class="input input-career" placeholder="请输入新职业">
								</label>
							</div>
							<input type="button" value="保存" class="button btn-first">
						</form>
					</div>
					<div id="tab2" class="tabs">
						<form action="">
							<div class="form-group">
								<label>
									<span>原密码</span>
									<input type="password" class="input" placeholder="请输入原密码">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>新密码</span>
									<input type="password" class="input" placeholder="请输入新密码">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>确认密码</span>
									<input type="password" class="input" placeholder="请再次输入新密码">
								</label>
							</div>
							<input type="button" value="保存" class="button">
						</form>
					</div>
					<div id="tab3" class="tabs">
						<form action="">
							<div class="form-group">
								<label>
									<span>原邮箱</span>
									<input type="email" class="input" readonly="readonly" value="846614172@qq.com">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>新邮箱</span>
									<input type="email" class="input" placeholder="请输入新邮箱">
								</label>
							</div>
							<input type="button" value="发送邮件" class="button">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery-1.11.3.js"></script>
	<script>
		$('.nav ul li').click(function() {
		    var i = $(this).index();
		    if (i==0) {
		    	window.location.href="home.blade.php";
		    }
		    else if (i==1) {
		    	window.location.href="test.html";
		    }
		    else if (i==2) {
		    	window.location.href="analyse.html";
		    }
		    else if (i==3) {
		    	window.location.href="forum.html";
		    }
		    else if (i==4) {
		    	window.location.href="setting.blade.php";
		    }
		});
		$('.tab-title ul li').click(function() {
		    var i = $(this).index();
		    $(this).addClass('select').siblings().removeClass('select');
		    $('.tab-content .tabs').eq(i).show().siblings().hide();
		});
		$('.mod-email2').click(function(){
		 	$('.mod-email1').addClass('select').siblings().removeClass('select');
		 	$('#tab3').show().siblings().hide();
		});
		$('#career').click(function(){
			if ($('.input-career').is(':hidden')) {
				$('.input-career').slideDown();
				$('.btn-first').animate({marginTop:"+=45px"});
			}
			else{
				$('.input-career').slideUp();
				$('.btn-first').animate({marginTop:"-=45px"});
			}
		});
	</script>
</body>
</html>