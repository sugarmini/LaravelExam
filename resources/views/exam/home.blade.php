<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
	@include('common.nav')

	<div class="content">
		<div class="main">
			<div class="profile">

				<form action="{{url('home')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<a href="#"><img src=" {{$info['img']}}" alt=""></a>
					<button class="button">修改头像</button>
					<input type="file" id="file" class="button" name="photo">
					<button class="button up_img" type="submit">上传头像</button>
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
									<input type="password" class="input past_psd auth"  placeholder="请输入原密码">
									<p class="error">密码错误</p>
								</label>
							</div>
							<div class="form-group">
								<label>
									<span>新密码</span>
									<input type="password" class="input auth psd" name="newInfo[pwd]" placeholder="请输入新密码">
									<p class="error">长度只能在6-20个字符之间</p>

								</label>
							</div>
							<div class="form-group">
								<label>
									<span>确认密码</span>
									<input type="password" class="input re_psd auth" placeholder="请再次输入新密码">
									<p class="error">两次密码输入不一致</p>

								</label>
							</div>
							<input type="submit" value="保存" class="button save_psd">
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

	<script src="{{asset('js/jquery-1.11.3.js')}}"></script>
	<script>
		$('.first').addClass('active');
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
        $('.auth').data({'s':0});
        $('.past_psd').blur(function(){
            val1=$('.past_psd').val();
            val2='{{$info['password']}}';

            if (val1!=val2) {
                $(this).data({'s':0});
                $(this).next().show();
            }
            else{
                $(this).data({'s':1});
                $(this).next().hide();
            }
        });

        $('.psd').blur(function(){
            val=this.value;
            if (val.length<6||val.length>20) {
                $(this).data({'s':0});
                $(this).next().show();
            }
            else{
                $(this).data({'s':1});
                $(this).next().hide();
            }
        });

        $('.re_psd').blur(function(){
            val1=$('.psd').val();
            val2=this.value;

            if (val1!=val2) {
                $(this).data({'s':0});
                $(this).next().show();
            }
            else{
                $(this).data({'s':1});
                $(this).next().hide();
            }
        });

        $('.save_psd').click(function(){
            $('input.auth').blur();

            tot=0;
            $('.auth').each(function(){
                tot+=$(this).data('s');
            });
            if(tot!=3){
                return false;
            }
        });
	</script>
</body>
</html>