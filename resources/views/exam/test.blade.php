<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../../../LaravelExam/public/css/styles.css" media="all">
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	<link href="../../../../LaravelExam/public/css/froala_editor.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../../../LaravelExam/public/css/test.css">
	<script src="../../../../LaravelExam/public/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="../../../../LaravelExam/public/js/moment.js"></script>
	<script type="text/javascript" src="../../../../LaravelExam/public/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    // date time picker
		    if($(".iDate").length>0){
		        $(".iDate").datetimepicker({
		            locale: "zh-cn",
		            format: "YYYY-MM-DD a hh:mm",
		            dayViewHeaderFormat: "YYYY年 MMMM"
		        });
		    }
		})
	</script>
	<script src="../../../../LaravelExam/public/js/layer/layer.js"></script>
	<script>
		function ShowBox()
		{
			layer.open({
				type:1,//表示弹出的是一个div
				title:"选择考试时间",
				area:['395px','300px'],
				content:$('#box')
			});
		}
	</script>

</head>
<body>
	@include('common.nav')
	
	<div class="content">
		<div class="main">
			<div class="searchbar">
				<dl class="sievebar">
		            <dt class="item">关键字搜索</dt>
		            <dd class="con input">
		                <input name="txtSearchField" type="text" id="txtSearchField" class="form-control" >
		            </dd>
					<form action="{{url('test')}}" method="post">
						{{csrf_field()}}
						<dt class="item">试题分类</dt>
						<dd class="con">
						   <select name="ddlTestType" id="ddlTestType" class="form-control valid">
								@foreach($sorts as $sort)
									<option value="{{$sort->subject}}" {{$sort->subject == $job?"selected=''":''}}> {{$sort->subject}} </option>
								@endforeach
							</select>
						</dd>
						<dt class="item">试题类型</dt>
						<dd class="con">
							<select name="ddlQuestionType" id="ddlQuestionType" class="form-control valid">
								@foreach($types as $type)
									<option name="{{$type->ty}}"> {{$type->ty}} </option>
								@endforeach
							</select>
						</dd>
						<dt class="item">难易度</dt>
						<dd class="con">
							<select name="ddlDifficulty" id="ddlDifficulty" class="form-control valid">
								<option value="0" selected="selected">不限难度</option>
								@foreach($levels as $level)
									<option> {{$level->lev}} </option>
								@endforeach
							</select>
						</dd>

						<dt class="item">创建时间</dt>
						<dd class="con contime input">
							<div class="iDate">
								<input type="text">
								 <button type="button" class="addOn"></button>
							</div>
							--
							<div class="iDate">
								<input type="text">
								 <button type="button" class="addOn"></button>
							</div>
						</dd>

						<dt class="item item-special">考试时间</dt>
						<dd class="con">
							<input name="txtSearchField" type="text" readonly="readonly" id="txtSearchField" class="form-control" value="{{$time}}">
						</dd>

						<dt class="item"></dt>
						<dd class="con conbtn">
							<input type="submit" class="button" value="查 询">
							<input class="button" type="reset" onclick="window.location=window.location" value="重 置">
						</dd>
					</form>
		        </dl>
			</div>
		</div>

		<div class="clearfix"></div>
		
		<div class="main">
			<div class="paper">
				<div class="paper-top">
					<span class="papertitle"> {{$job}} </span>
					<span class="papertime"> [ 提交时间：{{date("Y-m-d H:i",time()+$req*60*60)}} ] </span>
			</div>

				<div class="paper-content">
					<div class="paper-menu">
						<h1>试卷结构  (满分：<span class="green">100</span> 分)</h1>

						<ul class="queList">
                        	<li ng-repeat="group in vm.questions" class="ng-scope">
	                            <div class="queList-title ng-binding">一、单选题
	                                (共5题，10.00分)
	                            </div>
	                            <div class="queList-details">
	                            <!-- ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right active">
	                                1
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                2
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                3
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                4
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                5
	                            </span><!-- end ngRepeat: question in group.items -->
	                            </div>
	                        </li><!-- end ngRepeat: group in vm.questions -->
	                        <li ng-repeat="group in vm.questions" class="ng-scope">
	                            <div class="queList-title ng-binding">二、多选题
	                                (共5题，10.00分)
	                            </div>
	                            <div class="queList-details">
	                            <!-- ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                1
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                2
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                3
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                4
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                5
	                            </span><!-- end ngRepeat: question in group.items -->
	                            </div>
	                        </li><!-- end ngRepeat: group in vm.questions -->
	                        <li ng-repeat="group in vm.questions" class="ng-scope">
	                            <div class="queList-title ng-binding">三、填空题
	                                (共8题，20.00分)
	                            </div>
	                            <div class="queList-details">
	                            <!-- ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                1
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                2
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                3
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                4
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                5
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                6
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                7
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope right">
	                                8
	                            </span><!-- end ngRepeat: question in group.items -->
	                            </div>
	                        </li><!-- end ngRepeat: group in vm.questions -->
	                        <li ng-repeat="group in vm.questions" class="ng-scope">
	                            <div class="queList-title ng-binding">四、简答题
	                                (共2题，24.00分)
	                            </div>
	                            <div class="queList-details">
	                            <!-- ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope Subjective">
	                                1
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope Subjective">
	                                2
	                            </span><!-- end ngRepeat: question in group.items -->
	                            </div>
	                        </li><!-- end ngRepeat: group in vm.questions -->
	                        <li ng-repeat="group in vm.questions" class="ng-scope">
	                            <div class="queList-title ng-binding">五、程序题
	                                (共3题，36.00分)
	                            </div>
	                            <div class="queList-details">
	                            <!-- ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope Subjective">
	                                1
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope Subjective">
	                                2
	                            </span><!-- end ngRepeat: question in group.items --><span ng-class="vm.questionClass(question)" ng-click="vm.goQuestion(question)" ng-repeat="question in group.items" class="ng-binding ng-scope Subjective">
	                                3
	                            </span><!-- end ngRepeat: question in group.items -->
	                            </div>
	                        </li><!-- end ngRepeat: group in vm.questions -->
                   		 </ul>

                   		 <input type="button" onclick="ShowBox()" value="结束考试" class="button">
					</div>
					<div id="box">
						<div>
							<h2>成绩：</h2>
						</div>
						<input type="button" class="button" onclick="window.location.href='analyse.html'" value="考试分析">
					</div>

					<div class="paper-ques">
						<div class="one">
							<h1>一.单选题 <span> (共 <span class="green"> 5 * 2.00 = 10.00 </span>分)</span></h1>
							<div class="select">
								<?php $i=1; ?>
								@foreach($papers as $paper)
									<h2>{{$i++}}.{{$paper->content}}</h2>
									<p><input type="radio" name="option1">A.{{$paper->a_option}}</p>
									<p><input type="radio" name="option1">B.{{$paper->b_option}}</p>
									<p><input type="radio" name="option1">C.{{$paper->c_option}}</p>
									<p><input type="radio" name="option1">D.{{$paper->c_option}}</p>
								@endforeach
							</div>

						</div>

						<div class="four">
							<h1>四.简答题 <span> (共 <span class="green"> 2 * 12.00 = 24.00 </span>分)</span></h1>
							<div class="short-answers">
								<h2>1.简述HTML文件中Doctype的作用？</h2>
								<section id="editor">
							      <div id='edit1' style="margin-top: 30px;">
							         
							      </div>
							 	</section>

							</div>
							<div class="short-answers">
								<h2>2.如何防止网页中的中文出现乱码?</h2>
								<section id="editor">
							      <div id='edit2' style="margin-top: 30px;">
							         
							      </div>
							 	</section>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<script>
		$('.second').addClass('active');
		$('.nav ul li').click(function() {
		    var i = $(this).index();
		    if (i==0) {
		    	window.location.href="home.blade.php";
		    }
		    else if (i==1) {
		    	window.location.href="test.blade.php";
		    }
		    else if (i==2) {
		    	window.location.href="analyse.html";
		    }
		    else if (i==3) {
		    	window.location.href="forum.html";
		    }
		   
		});
	</script>
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
      $(function(){
          $('#edit1').editable({inlineMode: false, alwaysBlank: true})
          $('#edit2').editable({inlineMode: false, alwaysBlank: true})
      });
  </script>

</body>
</html>