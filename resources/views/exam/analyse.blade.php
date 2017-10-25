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
        <div class="main">
            <div class="searchbar">
                <dl class="sievebar">
                    <dt class="item">试题分类</dt>
                    <dd class="con">
                        <input name="txtSearchField" type="text" id="txtSearchField" class="form-control" readonly >
                    </dd>
                    <dt class="item">试题类型</dt>
                    <dd class="con">
                        <input name="txtSearchField" type="text" id="txtSearchField" class="form-control" readonly >
                    </dd>
                    <dt class="item">难易度</dt>
                    <dd class="con">
                        <input name="txtSearchField" type="text" id="txtSearchField" class="form-control" readonly >
                    </dd>



                    <dt class="item item-special">考试时间</dt>
                    <dd class="con">
                        <input name="txtSearchField" type="text" id="txtSearchField" class="form-control" readonly >
                    </dd>

                </dl>
            </div>
        </div>

		<div class="clearfix"></div>
		
		<div class="main">
			<div class="paper">
				<div class="paper-top">
					<span class="papertitle"> web前端开发⼯程师 （一）</span>
					<span class="papertime"> [ 提交时间：2017-07-20 13:02:19 ] </span>
					<span class="score">你的得分：<span class="green">98</span>分 (满分：<span class="green">100</span> 分)</span>
				</div>

				<div class="paper-content">
					<div class="paper-menu">
						<h1>我的考试</h1>

						<ol class="queList">
                        	<li><a href="#" class="green">web前端开发⼯程师测试题（一）</a></li>
                        	<li><a href="#">web前端开发⼯程师测试题（二）</a></li>
                        	<li><a href="#">web前端开发⼯程师测试题（三）</a></li>
                   		 </ol>
					</div>

					<div class="paper-ques">
						<div class="one">
							<h1>一.单选题 <span> (共 <span class="green"> 5 * 2.00 = 10.00 </span>分)</span></h1>
							<div class="select">
								<h2>1.HTML 指的是？
									<div class="scores">
	                                    <span class="ng-binding">满分：2.00 分</span>

	                                    <span>得分：<span class="green ng-binding">2</span> 分</span>
	                                </div>
								</h2>
								<p><input type="radio" name="option1" checked="checked" disabled>A.超文本标记语言（Hyper Text Markup Language）</p>
								<p><input type="radio" name="option1" disabled>B.家庭工具标记语言（Home Tool Markup Language）</p>
								<p><input type="radio" name="option1" disabled>C.超链接和文本标记语言（Hyperlinks and Text Markup Language）</p>

								<div class="answerBox" style="display:block;">
                                    <!-- ngIf: question.student_answer.length>0 --><div ng-if="question.student_answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">你的答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            A
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.student_answer.length>0 -->

                                    <!-- ngIf: question.answer.length>0 --><div ng-if="question.answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">正确答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            A
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.answer.length>0 -->

                                    <!-- ngIf: question.tips -->

                                    <div>
                                        <span class="answerBox-title">答案解析：</span>

                                        <div class="answerBox-content clearfix ng-binding" ng-bind-html="question.memo | empty | to_trusted">--</div>
                                    </div>

                                </div>
							</div>
							<div class="select">
								<h2>2.Web 标准的制定者是？
									<div class="scores">
	                                    <span class="ng-binding">满分：2.00 分</span>

	                                    <span>得分：<span class="green ng-binding">2</span> 分</span>
	                                </div>
								</h2>
								<p><input type="radio" name="option2" disabled>A.微软（Microsoft）</p>
								<p><input type="radio" name="option2" checked="checked" disabled>B.万维网联盟（W3C）</p>
								<p><input type="radio" name="option2" disabled>C.苹果公司（Apple）</p>
								<p><input type="radio" name="option2" disabled>D.谷歌公司（Google）</p>

								<div class="answerBox" style="display:block;">
                                    <!-- ngIf: question.student_answer.length>0 --><div ng-if="question.student_answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">你的答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            B
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.student_answer.length>0 -->

                                    <!-- ngIf: question.answer.length>0 --><div ng-if="question.answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">正确答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            B
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.answer.length>0 -->

                                    <!-- ngIf: question.tips -->

                                    <div>
                                        <span class="answerBox-title">答案解析：</span>

                                        <div class="answerBox-content clearfix ng-binding" ng-bind-html="question.memo | empty | to_trusted">--</div>
                                    </div>

                                </div>
							</div>
							<div class="select">
								<h2>3.我们在HTML页面中制作了一个图像，想要在鼠标指向这个图像时浮出一条提示信息，应该使用哪个参数做到？
								    <div class="scores">
	                                    <span class="ng-binding">满分：2.00 分</span>

	                                    <span>得分：<span class="green ng-binding">2</span> 分</span>
	                                </div>
								</h2>
								<p><input type="radio" name="option3" disabled>A.pop</p>
								<p><input type="radio" name="option3" disabled>B.src</p>
								<p><input type="radio" name="option3" checked="checked" disabled>C.alt</p>
								<p><input type="radio" name="option3" disabled>D.msg</p>

								<div class="answerBox" style="display:block;">
                                    <!-- ngIf: question.student_answer.length>0 --><div ng-if="question.student_answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">你的答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            C
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.student_answer.length>0 -->

                                    <!-- ngIf: question.answer.length>0 --><div ng-if="question.answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">正确答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            C
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.answer.length>0 -->

                                    <!-- ngIf: question.tips -->

                                    <div>
                                        <span class="answerBox-title">答案解析：</span>

                                        <div class="answerBox-content clearfix ng-binding" ng-bind-html="question.memo | empty | to_trusted">
                                        	<p>A. JavaScript pop() 方法用于删除数组的最后一个元素并返回删除的元素。</p>
                                        	<p>B. < img> 标签的 src 属性是必需的。它的值是图像文件的 URL，也就是引用该图像的文件的的绝对路径或相对路径。</p>
                                        	<p>C. < img> 标签的 alt 属性指定了替代文本，用于在图像无法显示或者用户禁用图像显示时，代替图像显示在浏览器中的内容。</p>
                                        	<p>D. msg不在img标签的属性中</p>
                                        </div>
                                    </div>

                                </div>
							</div>
							<div class="select">
								<h2>4.哪一个标记用于使HTML文档中表格里的单元格在同行进行合并？
								    <div class="scores">
	                                    <span class="ng-binding">满分：2.00 分</span>

	                                    <span>得分：<span class="green ng-binding">2</span> 分</span>
	                                </div>
								</h2>
								<p><input type="radio" name="option4" disabled>A.cellspacing</p>
								<p><input type="radio" name="option4" disabled>B.cellpadding</p>
								<p><input type="radio" name="option4" checked="checked" disabled>C.rowspan</p>
								<p><input type="radio" name="option4" disabled>D.colspan</p>

								<div class="answerBox" style="display:block;">
                                    <!-- ngIf: question.student_answer.length>0 --><div ng-if="question.student_answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">你的答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            C
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.student_answer.length>0 -->

                                    <!-- ngIf: question.answer.length>0 --><div ng-if="question.answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">正确答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            C
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.answer.length>0 -->

                                    <!-- ngIf: question.tips -->

                                    <div>
                                        <span class="answerBox-title">答案解析：</span>

                                        <div class="answerBox-content clearfix ng-binding" ng-bind-html="question.memo | empty | to_trusted">
                                        	<p>A. cellSpacing	设置或返回在表格中的单元格之间的空白量。</p>
                                        	<p>B. cellPadding	设置或返回单元格内容和单元格边框之间的空白量。</p>
                                        	<p>C. rowspan 属性定义表头单元格应该横跨的行数。</p>
                                        	<p>D. colSpan 属性可设置或返回表元横跨的列数。</p>
                                        </div>
                                    </div>

                                </div>
							</div>
							<div class="select">
								<h2>5.需要创建一个单选框，且和文本关联起来（单击文本就像单击选框一样）。下列 HTML 代码中，正确的是?
								    <div class="scores">
	                                    <span class="ng-binding">满分：2.00 分</span>

	                                    <span>得分：<span class="green ng-binding">0</span> 分</span>
	                                </div>
								</h2>
								<p><input type="radio" name="option5" disabled>A.< input type="checkbox" />< label >记住我< /label >
								</p >
								<p><input type="radio" name="option5" disabled>B.< input type="checkbox" />< label for="checkbox">记住我< /label>
								</p>
								<p><input type="radio" name="option5" disabled class="error">C.< input type="checkbox" id="c1" />< label>记住我< /label>
								</p>
								<p><input type="radio" name="option5" checked="checked" disabled>D.< input type="checkbox" id="c1" />< label for="c1">记住我< /label>
								</p>

								<div class="answerBox last" style="display:block;">
                                    <!-- ngIf: question.student_answer.length>0 --><div ng-if="question.student_answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">你的答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            C
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.student_answer.length>0 -->

                                    <!-- ngIf: question.answer.length>0 --><div ng-if="question.answer.length>0" class="ng-scope">
                                        <span class="answerBox-title">正确答案：</span>

                                        <!-- ngIf: question._type == 10 || question._type == 11 || question._type == 20 --><div class="answerBox-content clearfix ng-binding ng-scope" ng-if="question._type == 10 || question._type == 11 || question._type == 20">
                                            D
                                        </div><!-- end ngIf: question._type == 10 || question._type == 11 || question._type == 20 -->
                                        <!-- ngIf: question._type == 30 -->
                                        <!-- ngIf: question._type == 31 || question._type == 40 || question._type == 60 -->
                                    </div><!-- end ngIf: question.answer.length>0 -->

                                    <!-- ngIf: question.tips -->

                                    <div>
                                        <span class="answerBox-title">答案解析：</span>

                                        <div class="answerBox-content clearfix ng-binding" ng-bind-html="question.memo | empty | to_trusted">
                                        	<p>< label> 标签为 input 元素定义标注（标记）。label 元素不会向用户呈现任何特殊效果。不过，它为鼠标用户改进了可用性。如果您在 label 元素内点击文本，就会触发此控件。就是说，当用户选择该标签时，浏览器就会自动将焦点转到和标签相关的表单控件上。< label> 标签的 for 属性应当与相关元素的 id 属性相同。</p>
                                        </div>
                                    </div>

                                </div>
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
								<!-- <section id="editor" disabled>
							      <div id='edit1' style="margin-top: 30px;">
							         < !DOCTYPE> 声明位于文档中的最前面的位置，处于 < html > 标签之前。此标签可告知浏览器文档使用哪种 HTML 或 XHTML 规范
							      </div>
							 	</section> -->

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
								<!-- <section id="editor">
							      <div id='edit2' style="margin-top: 30px;">
							         通过meta标签指定字符集, 保证文件保存的字符集和浏览器解析网页时的字符集为同一字符集
							      </div>
							 	</section> -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<script>
        $('.third').addClass('active');
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
	</script>

</body>
</html>