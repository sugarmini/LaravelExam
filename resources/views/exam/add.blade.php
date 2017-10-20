<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	<link href="../css/froala_editor.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../css/add.css">
</head>
<body>
	@include('common.nav')
	<div class="content">
		<div class="main">
			<div class="title">
				<label>
					<span>标题</span>
					<input type="text" placeholder="请输入标题">
				</label>
			</div>
			<section id="editor">
		      <div id='edit' style="margin-top: 30px;">
		      </div>
		 	</section>
		 	<div class="sort">
		 		<label>
					<span>所在类别</span>
					<select>
						<option>技术闲谈</option>
						<option>就业</option>
					</select>
				</label>
		 	</div>
		 	<input type="button" class="button" value="立即发布">
		</div>
	</div>
	<script src="../js/jquery-1.11.3.js"></script>
	<script src="../js/froala_editor.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../js/froala_editor_ie8.min.js"></script>
  <![endif]-->
  <script src="../js/plugins/tables.min.js"></script>
  <script src="../js/plugins/lists.min.js"></script>
  <script src="../js/plugins/colors.min.js"></script>
  <script src="../js/plugins/media_manager.min.js"></script>
  <script src="../js/plugins/font_family.min.js"></script>
  <script src="../js/plugins/font_size.min.js"></script>
  <script src="../js/plugins/block_styles.min.js"></script>
  <script src="../js/plugins/video.min.js"></script>

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
		});
      $(function(){
          $('#edit').editable({inlineMode: false, alwaysBlank: true})
      });
  </script>
</body>