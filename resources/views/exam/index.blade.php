<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<link rel="stylesheet" href="../../../../LaravelExam/public/css/index.css">
	<link rel="stylesheet" type="text/css" href="../../../../LaravelExam/public/css/index-tab.css">
</head>
<body>
	<div class="top">
		<div class="main">
			<div class="top-left">
				<a href="index.blade.php">
					<img src="../../../../LaravelExam/public/images/logo.png" alt="">
				</a>
			</div>
			<div class="top-right">
				<a href="../../../../LaravelExam/resources/views/question/upload.html">内容发布端</a>
				<!-- <span>|</span>
				<a href="register.html">注册</a> -->
			</div>
		</div>
	</div>
	<div class="header">
		<canvas id="canvas"></canvas>
		<div class="main">
			<div class="header-left">
				<h2>更好用的考试云平台</h2>
				<span>305365</span>
	 			考生在使用，成功提交 
	 			<span>423861</span> 
	 			份试卷
			</div>
			<div class="header-right">
				<div class="login-wrap">
					<div class="login-html">
						<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">登录</label>
						<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">注册</label>
						<div class="login-form">
							<form action="{{url('check')}}" method="post">
								{{csrf_field()}}
								<div class="sign-in-htm">
									<div class="group">
										<label for="user" class="label" >邮箱</label>
										<input id="user" type="text" class="input" name="Users[email]" value="{{$email?$email:''}}">
									</div>
									<div class="group">
										<label for="pass" class="label">密码</label>
										<input id="pass" type="password" class="input" data-type="password" name="Users[password]" value="{{$remain =='on'?$pwd:""}}">
									</div>
									<div class="group">
										<label>
											<input id="check" type="checkbox" class="check" name="remain" {{$remain == 'on'? "checked":""}}>
											记住密码
										</label>
									</div>
									<div class="group">
										<input type="submit" class="button" value="立即登录">
									</div>
									<div class="foot-lnk">
										<a href="#forgot">忘记密码?</a>
									</div>
								</div>
							</form>
							<form action="index.blade.php">
								<div class="sign-up-htm">
									<div class="group">
										<label>
											<span class="label">邮箱</span>
											<input type="text" class="input auth" name="email">
											<span class="error">邮箱格式不正确</span>
										</label>
									</div>
									<div class="group">
										<label>
											<span class="label">职业</span>
											<input type="text" class="input auth" name="career">
											<span class="error">职业不能为空</span>
										</label>
									</div>
									<div class="group">
										<label>
											<span class="label">密码</span>
											<input type="password" class="input auth" data-type="password" name="password">
											<span class="error">长度只能在6-20个字符之间</span>
										</label>
									</div>
									<div class="group">
										<label>
											<span class="label">确认密码</span>
											<input type="password" class="input auth" data-type="password" name="repassword">
											<span class="error">两次密码输入不一致</span>
										</label>
									</div>
									<div class="group">
										<input type="submit" class="button signup-btn" value="立即注册">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="intro">
			<div class="intro intro1">
				<div class="main">
					<div class="intro-left">
						<img src="../../../../LaravelExam/public/images/p1.png" alt="">
					</div>
					<div class="intro-right font">
						<h1>快</h1>
						<p>你还在为购买、部署考试软、硬件而烦恼吗？</p>
						<p>现在你只需要花一分钟就可免费注册自己的网络考试平台，不需要购买软件、部署硬件。</p>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="intro intro2">
				<div class="main">
					<div class="intro-left font">
						<h1>轻</h1>
						<p>自动生成考试微信码，考生微信扫描二维码，轻松参加考试。</p>
						<p>支持PC、手机、Pad多终端，移动考试随时随地进行。</p>
					</div>
					<div class="intro-right">
						<img src="../../../../LaravelExam/public/images/p2.png" alt="">
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="intro intro1">
				<div class="main">
					<div class="intro-left">
						<img src="../../../../LaravelExam/public/images/p3.png" alt="">
					</div>
					<div class="intro-right font">
						<h1>简</h1>
						<p>强大的试题批量导入功能（支持Word、Excel格式），丰富的题型设计，灵活的随机出题策略，同时支持手工试卷和随机试卷。各种模拟考场环境设置，支持人工智能评卷，确保数据准确无误。</p>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="intro intro2">
				<div class="main">
					<div class="intro-left font">
						<h1>稳</h1>
						<p>安全稳定的云服务架构，强大的应用防火墙保护，针对不同的攻击更新防护策略。</p>
						<p>可靠的数据安全,用户关键数据加密存储。核心业务采用高安全的加密策略。</p>
					</div>
					<div class="intro-right">
						<img src="../../../../LaravelExam/public/images/p4.png" alt="">
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="footer">
		<div class="main">
			<dl>
				<dt>在线教育</dt>
				<dd><a href="http://www.online-edu.org/" target="_blank">在线教育资讯网</a></dd>
				<dd><a href="http://www.eol.cn/" target="_blank">中国教育在线</a></dd>
				<dd><a href="http://www.chisa.edu.cn/" target="_blank">神州学人</a></dd>
				<dd><a href="http://www.jyb.cn/" target="_blank">中国教育新闻网</a></dd>
				<dd><a href="http://www.cepa.com.cn/" target="_blank">教育报刊社</a></dd>
				<dd><a href="http://www.media.edu.cn/" target="_blank">中国教育网络</a></dd>
			</dl>

			<dl class="client pull-left">
                <dt>E-Learning</dt>
                <dd><a href="http://www.aieln.com/" target="_blank">E之家</a></dd>
                <dd><a href="http://www.hjenglish.com/" target="_blank">沪江网</a></dd>
                <dd><a href="http://www.xxhjy.com/" target="_blank">信息化教育</a></dd>
                <dd><a href="http://www.icourses.cn/home/" target="_blank">爱课程</a></dd>
                <dd><a href="http://www.cnmooc.org/home/index.mooc" target="_blank">好大学在线</a></dd>
            </dl>

            <dl class="client pull-left">
                <dt>企业培训</dt>
                <dd><a href="http://www.china-train.net/" target="_blank">中国企业培训网</a></dd>
                <dd><a href="http://www.szpxe.com/" target="_blank">神州培训网</a></dd>
                <dd><a href="http://www.chinacpx.com/" target="_blank">中培网</a></dd>
                <dd><a href="http://www.71peixun.com/" target="_blank">企业培训网</a></dd>
                <dd><a href="http://www.bicpaedu.com/" target="_blank">注册会计师</a></dd>
                <dd><a href="http://www.china-qg.com/" target="_blank">中国企管网</a></dd>
            </dl>

            <dl class="client pull-left">
                <dt>MOOC</dt>
                <dd><a href="http://www.ted.com/" target="_blank">Ted</a></dd>
                <dd><a href="http://www.imooc.com" target="_blank">iMOOC</a></dd>
                <dd><a href="http://study.163.com" target="_blank">网易学堂</a></dd>
                <dd><a href="http://www.qq.com" target="_blank">腾讯课堂</a></dd>
                <dd><a href="http://www.chuanke.com/" target="_blank">传课网</a></dd>
                <dd><a href="http://xue.taobao.com/" target="_blank">淘宝同学</a></dd>
            </dl>

            <dl class="client pull-left">
                <dt>考试网</dt>
                <dd><a href="http://www.bdkssc.com/" target="_blank">职称考试网</a></dd>
                <dd><a href="http://www.100ksw.com/" target="_blank">考试100</a></dd>
                <dd><a href="http://www.ysedu.com/" target="_blank">育德园师</a></dd>
                <dd><a href="http://hlj.offcn.com/" target="_blank">公务员考试网</a></dd>
                <dd><a href="http://kaoshi.xuexila.com/" target="_blank">学习考试网</a></dd>
                <dd><a href="http://www.125edu.com/" target="_blank">125教育考试网</a></dd>
            </dl>

            <dl class="client pull-left">
                <dt>互联网教育</dt>
                <dd><a href="http://jiaoyu.baidu.com/" target="_blank">百度教育</a></dd>
                <dd><a href="http://edu.sina.com.cn/" target="_blank">新浪教育</a></dd>
                <dd><a href="http://learning.sohu.com/gaokao.shtml" target="_blank">搜狐高考</a></dd>
                <dd><a href="http://edu.qq.com/" target="_blank">腾讯教育</a></dd>
                <dd><a href="http://edu.ifeng.com/" target="_blank">凤凰网教育</a></dd>
                <dd><a href="http://edu.163.com/" target="_blank">网易教育</a></dd>
            </dl>

            <dl class="client pull-left">
                <dt>互联网分享</dt>
                <dd><a href="http://36kr.com/" target="_blank">36Kr</a></dd>
                <dd><a href="http://huxiu.com" target="_blank">虎嗅网</a></dd>
                <dd><a href="http://jingliren.baonian.net/" target="_blank">经理人</a></dd>
                <dd><a href="http://www.rlzygl.com/" target="_blank">人力资源管理</a></dd>
                <dd><a href="https://www.hao123.com/" target="_blank">hao123</a></dd>
                <dd><a href="https://hao.360.cn/" target="_blank">360导航</a></dd>
            </dl>

            <dl class="call_us pull-right" style="font-size:12px;">
                <dd class="copyright">客服邮箱：service@zcth.cn</dd>
                <dd class="copyright">联系方式：18573103286</dd>
                <dd class="copyright">Copyright &nbsp;© 2016 www.zcth.cn</dd>
                <dd class="icp">粤ICP备13075061号</dd>
            </dl>
		</div>
	</div>

	<script src='../../../../LaravelExam/public/js/jquery-1.11.3.js'></script>
	<script src="../../../../LaravelExam/public/js/star.js"></script>
	<script src='../../../../LaravelExam/public/js/check-signup.js'></script>
	<script>
		$('.sign-up').click(
			function(){
				$('.login-wrap').css("height","550px");
				$('.login-wrap').css("margin-top","-100px");
				$('.header-left').css("margin-top","-100px");
				$('.header').css("height","600px");
				$('#canvas').css("height","600px");
			}
		);
		$('.sign-in').click(
			function(){
				$('.login-wrap').css("height","455px");
				$('.login-wrap').css("margin-top","0px");
				$('.header-left').css("margin-top","0px");
				$('.header').css("height","500px");
				$('#canvas').css("height","500px");
			}
		);
	</script>
</body>
</html>