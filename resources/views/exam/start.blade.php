<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: "Microsoft YaHei";
		}
		button{
			outline: none;
		}
		.main{
			margin: 0 auto;
		}
		canvas{
			width: 100%;
			height: 100%;
		}
		button {
			position:absolute;
			left: 43%;
			top: 35%;
			background:#00B16A;
			color:#fff;
			width:160px;
			height:50px;
			line-height:50px;
			text-align:center;
			border:none;
			font-size:16px;
			font-weight:bold;
			text-decoration:none;
			margin:50px auto 0;
			border-radius:2px;
			overflow:hidden;
			-webkit-transition:all 0.15s ease-in;
			transition:all 0.15s ease-in;
			border-radius: 10px;
			cursor: pointer;
		}
		button:hover {
			background:#26C281;
		}
		button:before {
			content:' ';
			position:absolute;
			background:#fff;
			width:25px;
			height:50px;
			top:0;
			left:-45px;
			opacity:0.3;
			-webkit-transition:all 0.25s ease-out;
			transition:all 0.25s ease-out;
			-webkit-transform:skewX(-25deg);
			transform:skewX(-25deg);
		}
		button:hover:before {
			width:45px;
			left:205px;
		}
		#radiobox div{
			height: 50px;
			line-height: 50px;
			background: #fafbfc;
			margin-top: 10px;
			margin-bottom: 10px;
			text-indent: 2em;
		}
		input[type=radio]{
			width: 15px;
			height: 15px;
		}
		#radiobox span{
			margin-left: 20px;
			font-size: 15px;
		}
		input[type=button]{
			display: block;
			width: 295px;
			height: 42px;
			background-color: #269f42;
			color: #fff;
			border: none;
			border-radius: 7px;
			font-size: 15px;
			cursor: pointer;
			margin-top: 20px;
			margin-left: 50px;
		}
		input[type=button]:hover{
			opacity: 0.8;
			filter: Alpha(opacity=80);
		}
		input[type=button]:focus{
			outline: none;
		}
	</style>
	<script src="../../../../LaravelExam/public/js/jquery-1.11.3.js"></script>
	<script src="../../../../LaravelExam/public/js/layer/layer.js"></script>
	<script>
		function ShowRadioBox()
		{
			layer.open({
				type:1,//表示弹出的是一个div
				title:"选择考试时间",
				area:['395px','300px'],
				content:$('#radiobox')
			});
		}
	</script>
</head>
<body>
	<div class="main">
		<canvas id="canvas"></canvas>
		<button onclick="ShowRadioBox()">开始考试</button>
	</div>
	<div id="radiobox">
		<div>
			<input type="radio" name="time"><span>1个⼩时</span>
		</div>
		<div>
			<input type="radio" name="time"><span>1个半⼩时</span>
		</div>
		<div>
			<input type="radio" name="time"><span>2个⼩时</span>
		</div>
		<input type="button" onclick="{{url('test')}}" value="确认考试">
	</div>
	
	<script src="../../../../LaravelExam/public/js/star.js"></script>
</body>
</html>