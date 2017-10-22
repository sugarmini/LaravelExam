<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<link rel="stylesheet" href="../../../../LaravelExam/public/css/home.css">
</head>
<body>
	@include('common.nav')

	<div class="content">
		<div class="main">
			<div class="profile">

				<form id="myForm" action="{{url('home')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<a href="#"><img src="file://,D:/website/root/userId1.png" alt=""></a>
					<button class="button">修改头像</button>
					<input type="file" id="file" name="photo" class="button">
					<button class="button up_img">上传头像</button>
					<input type="button" value="退出登录" class="button exit" onclick="location='{{url('login')}}'">
				</form>
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
                    <form action="{{url('saveInfo')}}" method="post">
                        <div id="tab1" class="tabs">
                            {{csrf_field()}}
							<div class="form-group">
								<label>
									<span>昵 称</span>
									<input type="text" class="input" name='newInfo[name]'   value="{{$info['name']}}">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>邮 箱</span>
									<input type="email" class="input" readonly="readonly" value="{{$info['email']}}">
									<a href="#" class="mod-email2">修改邮箱</a>
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>性 别</span>
									<input type="text" class="input" name='newInfo[sex]' value="{{$info['sex']}}">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>职 业</span>
									<input type="text" class="input" readonly="readonly" value="{{$info['job']}}">
									<a href="#" id="career">修改职业</a>
									<input type="text" class="input input-career" name='newInfo[job]' placeholder="请输入新职业">
								</label>
							</div>
							<input type="submit" value="保存" class="button btn-first">
                        </div>
					    <div id="tab2" class="tabs">
							<div class="form-group">
								<label>
									<span>原密码</span>
									<input type="password" class="input" placeholder="请输入原密码">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>新密码</span>
									<input type="password" class="input" name="newInfo[email]" placeholder="请输入新密码">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>确认密码</span>
									<input type="password" class="input" placeholder="请再次输入新密码">
								</label>
							</div>
							<input type="button" value="保存" class="button">
					    </div>
					    <div id="tab3" class="tabs">
							<div class="form-group">
								<label>
									<span>原邮箱</span>
									<input type="email" class="input" readonly="readonly" value="{{$info['email']}}">
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>新邮箱</span>
									<input type="email" class="input" name='newInfo[email]' placeholder="请输入新邮箱">
								</label>
							</div>
							<input type="submit" value="发送邮件" class="button">
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>

	<script src="../../../../LaravelExam/public/js/jquery-1.11.3.js"></script>
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