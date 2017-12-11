<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	<link href="../../../../LaravelExam/public/css/froala_editor.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../../../LaravelExam/public/css/add.css">

</head>
<body>
	@include('common.nav')
	<div class="content">
		<div class="main">
			<form action="{{url("addForum")}}" method="post">
				{{csrf_field()}}
				<div class="title">
					<label>
						<span>标题</span>
						<input type="text" name="note[title]" placeholder="请输入标题">
					</label>
				</div>
				<section id="editor" >
					<div id='edit' style="margin-top: 30px;"></div>
					<input id='con' type="hidden" name="note[content]">
				</section>
				<div class="sort">
					<label>
						<span>所在类别</span>
						<select name="note[type]">
							<option>技术闲谈</option>
							<option>就业</option>
						</select>
					</label>
				</div>
				<input type="submit" class="button" id="sub" value="立即发布">
			</form>
		</div>
	</div>
	<script src="../../../../LaravelExam/public/js/jquery-1.11.3.js"></script>
	<script src="../../../../LaravelExam/public/js/froala_editor.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../../../../LaravelExam/public/js/froala_editor_ie8.min.js"></script>
  <![endif]-->
	<script src="../../../../LaravelExam/public/js/plugins/tables.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/lists.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/colors.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/media_manager.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/font_family.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/font_size.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/block_styles.min.js"></script>
	<script src="../../../../LaravelExam/public/js/plugins/video.min.js"></script>
	<script>
        $(function() {
            $('#edit').editable({inlineMode: false, alwaysBlank: true});
            $('#sub').click(function () {
                var content = $('#edit').find('.froala-element p').text();
                $('#con').prop('value',content);
            });
        })
	</script>

</body>