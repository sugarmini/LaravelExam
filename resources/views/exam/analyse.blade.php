<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../../../LaravelExam/public/css/styles.css" media="all">
	<link rel="stylesheet" href="../../../../LaravelExam/public/css/analyse.css">
	<script src="../../../../LaravelExam/public/js/jquery-1.11.3.js"></script>
</head>
<body>
	@include('common.nav')
	
	<div class="content">
		<div class="clearfix"></div>
		<div class="main">
			<div class="paper">
				<div class="paper-top">
					<span class="papertitle">{{$paper_name}}</span>
					<span class="papertime"> [ 提交时间：2017-07-20 13:02:19 ] </span>
					<span class="score">你的得分：<span class="green">{{$mark}}</span>分 (满分：<span class="green">100</span> 分)</span>
				</div>

				<div class="paper-content">
					<div class="paper-menu">
						<h1>我的考试</h1>
							<ol class="queList">
								@foreach($names as $name)
									<li><a href="{{url('paperInfo')."/".$name}}">{{$name}}</a></li>
								@endforeach
							</ol>
					</div>

					<div class="paper-ques">
						<div class="one">
							<h1>一.单选题 <span> (共 <span class="green"> 5 * 2.00 = 10.00 </span>分)</span></h1>
							<?php $i=1;?>
							@foreach($questions as $key => $question)
								<div class="select">
									<h2>{{$i++.".".$question->content}}
										<div class="scores">
											<span class="ng-binding">满分：2.00 分</span>
											<span>得分：<span class="green ng-binding">{{$que_marks[$key]}}</span> 分</span>
										</div>
									</h2>
									<p><input type="radio" name="option1" disabled>A.{{$question->a_option}}</p>
									<p><input type="radio" name="option1" disabled>B.{{$question->b_option}}</p>
									<p><input type="radio" name="option1" disabled>C.{{$question->c_option}}</p>
									<p><input type="radio" name="option1" disabled>D.{{$question->d_option}}</p>
									<div class="answerBox" style="display:block;">
										<div class="answerBox" style="display:block;">
											<span class="answerBox-title">你的答案：
												<div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
												{{$ans[$key]}}
												</div>
											</span>
											<span class="answerBox-title">正确答案：</span>{{$question->answer}}
										</div>
									</div>
									<div>
										<span class="answerBox-title">答案解析：</span>

										<div class="answerBox-content clearfix ng-binding" ng-bind-html="question.memo | empty | to_trusted">{{$question->analyse}}</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
						<div class="four">
							<h1>四.简答题 <span> (共 <span class="green"> 2 * 12.00 = 24.00 </span>分)</span></h1>
							<div class="short-answers">
								<h2>1.简述HTML文件中Doctype的作用？ 
									<div class="scores">
	                                    <span class="ng-binding">满分：12.00 分</span>

	                                    <span>得分：<span class="green ng-binding">12</span> 分</span>
	                                </div>
								</h2>
								<textarea name="" id="" cols="110" rows="3" disabled="disabled" style="margin-top: 10px;">正确答案：< !DOCTYPE> 声明位于文档中的最前面的位置，处于 < html > 标签之前。此标签可告知浏览器文档使用哪种 HTML 或 XHTML 规范
								</textarea>
								<textarea name="" id="" cols="110" rows="3" disabled="disabled" style="margin-top: 10px;">你的答案：< !DOCTYPE> 声明位于文档中的最前面的位置，处于 < html > 标签之前。此标签可告知浏览器文档使用哪种 HTML 或 XHTML 规范
								</textarea>
							</div>
							<div class="short-answers">
								<h2>2.如何防止网页中的中文出现乱码?
									<div class="scores">
	                                    <span class="ng-binding">满分：12.00 分</span>

	                                    <span>得分：<span class="green ng-binding">12</span> 分</span>
	                                </div>
								</h2>
								<textarea name="" id="" cols="110" rows="3" disabled="disabled" style="margin-top: 10px;">正确答案：通过meta标签指定字符集, 保证文件保存的字符集和浏览器解析网页时的字符集为同一字符集
								</textarea>
								<textarea name="" id="" cols="110" rows="3" disabled="disabled" style="margin-top: 10px;">你的答案：通过meta标签指定字符集, 保证文件保存的字符集和浏览器解析网页时的字符集为同一字符集
								</textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<script>
        $('.third').addClass('active');
	</script>
</body>
</html>