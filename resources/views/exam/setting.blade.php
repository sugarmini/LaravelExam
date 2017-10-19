<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: "Microsoft YaHei";
		}
		a{
			text-decoration: none;
		}
		.top a{
			color: #fff;
		}
		.top a:hover{
			text-decoration: underline;
			color: #269f42;
		}
		ul{
			list-style: none;
		}
		
		.main{
			min-width: 1150px;
			width: 1150px;
			margin: 0 auto;
		}
		.top{
			height: 60px;
			line-height: 60px;
			background: #24292e;
			color: #fff;
		}
		.top .nav{
			float: left;
			width: 500px;
		}
		.top .nav img{
			float: left;
			position: relative;
			top: 15px;
			margin-right: 20px;
		}
		.top .nav li{
			float: left;
			margin-left: 25px;
			font-size: 15px;
		}
		.nav li .active{
			color: #269f42;
		}
	</style>
</head>
<body>
	<div class="top">
		<div class="main">
			<div class="nav">
				<a href="index.html">
					<img src="../images/logo.png" alt="">
				</a>
				<ul>
					<li><a href="#">个人中心</a></li>
					<li><a href="#">模拟考试</a></li>
					<li><a href="#">考试分析</a></li>
					<li><a href="#">论坛</a></li>
					<li><a href="#" class="active">设置</a></li>
				</ul>
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
	</script>
</body>
</html>