<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线考试系统-E学堂</title>
	<link rel="shortcut icon" href="../../../../LaravelExam/public/images/favicon.ico">
	<link rel="stylesheet" href="../../../../LaravelExam/public/css/forum.css">
</head>
<body>
	@include('common.nav')

	<div class="content">
		<div class="main">
			<div class="main-left">
				<div class="tab">  
					<div class="tab-title">    
						<ul>      
							<li class="on">        
								<a href="#">全部帖</a>      
							</li>     
							<li>        
								<a href="#">未结帖</a>      
							</li>      
							<li>        
								<a href="#">已采纳</a>      
							</li>      
							<li>        
								<a href="#">精华帖</a>      
							</li>
							<input type="text" placeholder="输入搜索内容，点击搜索">
							<img src="../../../../LaravelExam/public/images/search.png" alt="">
						</ul>  
					</div> 
					<div class="tab-content">
						<div class="tabs">
							<ul class="primary">
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/user.jpg" alt="管理员">
									</a>          
									<h2>            
										<a href="#">e学堂 常见问题的处理和实用干货集锦</a>            
										<span class="stick">置顶</span>            
										<span class="jing">精帖</span>          
									</h2>          
									<p>           
										<span><a href="#">管理员</a></span>            
										<span>2016-11-25</span>            
										<span>技术闲谈</span>  
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论">102
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"> 3212
											</span>            
										</span>          
									</p>        
								</li>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/user.jpg" alt="管理员">
									</a>          
									<h2>            
										<a href="#">e学堂 官方公告</a>            
										<span class="stick">置顶</span>            
									</h2>          
									<p>           
										<span><a href="#">管理员</a></span>            
										<span>2016-11-25</span>            
										<span>官方公告</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"> 62
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"> 1612
											</span>            
										</span>               
									</p>    
								</li>
							</ul>
							<ul class="normal">
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/LeoZhou.gif" alt="LeoZhou">
									</a>          
									<h2>            
										<a href="#">求助帖： 这道题怎么做？</a>            
									</h2>          
									<p>           
										<span><a href="#">LeoZhou</a></span>            
										<span>刚刚</span>            
										<span>技术闲谈</span>  
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 0
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 7
											</span>            
										</span>          
									</p>        
								</li>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/en3.jpg" alt="en3">
									</a>          
									<h2>            
										<a href="#">关于前端就业的一点建议</a>            
									</h2>          
									<p>           
										<span><a href="#">en3</a></span>            
										<span>2小时前</span>            
										<span>就业</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 2
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 23
											</span>            
										</span>               
									</p>    
								</li>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/akons.jpg" alt="akons">
									</a>          
									<h2>            
										<a href="#">radio渲染问题</a>            
									</h2>          
									<p>           
										<span><a href="#">akons</a></span>            
										<span>7小时前</span>            
										<span>技术闲谈</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 1
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 43
											</span>            
										</span>               
									</p>    
								</li>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/嘉恬.jpg" alt="嘉恬">
									</a>          
									<h2>            
										<a href="#">tab选项卡能不能加图标问题</a>            
									</h2>          
									<p>           
										<span><a href="#">嘉恬</a></span>            
										<span>17小时前</span>            
										<span>技术闲谈</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 1
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 51
											</span>            
										</span>               
									</p>    
								</li>
							</ul>
						</div>
						<div class="tabs">
							<ul class="normal">
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/LeoZhou.gif" alt="LeoZhou">
									</a>          
									<h2>            
										<a href="#">求助帖： 这道题怎么做？</a>            
									</h2>          
									<p>           
										<span><a href="#">LeoZhou</a></span>            
										<span>刚刚</span>            
										<span>技术闲谈</span>  
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 0
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 7
											</span>            
										</span>          
									</p>        
								</li>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/en3.jpg" alt="en3">
									</a>          
									<h2>            
										<a href="#">关于前端就业的一点建议</a>            
									</h2>          
									<p>           
										<span><a href="#">en3</a></span>            
										<span>2小时前</span>            
										<span>就业</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 2
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 23
											</span>            
										</span>               
									</p>    
								</li>
								<li>          
									<a href="#">            
										<img src="../images/akons.jpg" alt="akons">
									</a>          
									<h2>            
										<a href="#">radio渲染问题</a>            
									</h2>          
									<p>           
										<span><a href="#">akons</a></span>            
										<span>7小时前</span>            
										<span>技术闲谈</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 1
											</span>
											<span>         
												<img src="../images/see.png" title="看过"></img> 43  
											</span>            
										</span>               
									</p>    
								</li>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/嘉恬.jpg" alt="嘉恬">
									</a>          
									<h2>            
										<a href="#">tab选项卡能不能加图标问题</a>            
									</h2>          
									<p>           
										<span><a href="#">嘉恬</a></span>            
										<span>17小时前</span>            
										<span>技术闲谈</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 1
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 51
											</span>            
										</span>               
									</p>    
								</li>
							</ul>
						</div>
						<div class="tabs">
							<ul>
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/嘉恬.jpg" alt="嘉恬">
									</a>          
									<h2>            
										<a href="#">tab选项卡能不能加图标问题</a>            
									</h2>          
									<p>           
										<span><a href="#">嘉恬</a></span>            
										<span>17小时前</span>            
										<span>技术闲谈</span>   
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 1
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 51
											</span>            
										</span>               
									</p>    
								</li>
							</ul>
						</div>
						<div class="tabs">
							<ul class="primary">
								<li>          
									<a href="#">            
										<img src="../../../../LaravelExam/public/images/user.jpg" alt="管理员">
									</a>          
									<h2>            
										<a href="#">e学堂 常见问题的处理和实用干货集锦</a>            
										<span class="stick">置顶</span>            
										<span class="jing">精帖</span>          
									</h2>          
									<p>           
										<span><a href="#">管理员</a></span>            
										<span>2016-11-25</span>            
										<span>技术闲谈</span>  
										<span class="hint">
											<span>
												<img src="../../../../LaravelExam/public/images/dialog.png" title="评论"></img> 102
											</span>
											<span>         
												<img src="../../../../LaravelExam/public/images/see.png" title="看过"></img> 3212
											</span>            
										</span>          
									</p>        
								</li>
							</ul>
						</div>
					</div> 
				</div>
			</div>
			<div class="main-right">
				<input type="button" class="button" value="发表新帖" onclick="window.location.href='add.html'" >
				<div class="rank">
					<p class="rank-title">近一月回答榜 - TOP 12</p>
					<div class="rank-content">
						<dl>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/AggerChen.jpg" alt="">
									<cite>AggerChen</cite>
									<p>93次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/2.jpg" alt="">
									<cite>2</cite>
									<p>90次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/3.png" alt="">
									<cite>3</cite>
									<p>83次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/4.gif" alt="">
									<cite>4</cite>
									<p>76次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/5.jpg" alt="">
									<cite>5</cite>
									<p>71次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/6.gif" alt="">
									<cite>6</cite>
									<p>66次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../../../../LaravelExam/public/images/7.jpg" alt="">
									<cite>7</cite>
									<p>63次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../images/8.jpg" alt="">
									<cite>8</cite>
									<p>61次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../images/9.jpg" alt="">
									<cite>9</cite>
									<p>60次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../images/10.png" alt="">
									<cite>10</cite>
									<p>59次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../images/11.jpg" alt="">
									<cite>11</cite>
									<p>57次回答</p>
								</a>
							</dd>
							<dd>
								<a href="#">
									<img src="../images/12.jpg" alt="">
									<cite>12</cite>
									<p>56次回答</p>
								</a>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery-1.11.3.js"></script>
	<script>
        $('.fourth').addClass('active');
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

		$('.tab-title ul li').click(function() {
		    var i = $(this).index();
		    $(this).addClass('on').siblings().removeClass('on');
		    $('.tab-content .tabs').eq(i).show().siblings().hide();
		});
	</script>
</body>
</html>