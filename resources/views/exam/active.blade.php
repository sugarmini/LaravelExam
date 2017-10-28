<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: "微软雅黑"
		}
		a{
			text-decoration: none;
		}
		body{
			background: url("../../../../LaravelExam/public/images/jump.jpg");
		}
		.wrap{
			width: 400px;
			height: 300px;
			margin: 30px auto;
			background: #fff;
			border: 1px solid #269f42;
			box-shadow: 2px 2px 1px #269f42;
			border-radius: 50%;
			opacity: 0.98;
			filter: alpha(opacity:98);
			text-align: center;
		}
		.wrap a{
			position: relative;
			top: 120px;
			color: #269f42;
			font-size: 20px;
		}
		.wrap a:hover{
			text-decoration: underline;
		}
		.wrap p{
			position: relative;
			top: 150px;
		}
	</style>

</head>
<body>
<div class="wrap">
	<a href="{{$url}}">点击此处跳转到你的邮箱</a>
	<p>此链接24小时内有效</p>
</div>
</body>
</html>