<!DOCTYPE html>
<html lang="en">
<head>
	<!-- don't change anything in meta tag! -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
	<title>HIT Tencent Club</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
</head>
<body>
	
<?php
	include_once "layout/header.php";
?>
	<!-- TIC navigation-list part -->
	<div id="navigation-list" class="striped-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#intro">
							<span class="diyfont"></span>
							<h4>俱乐部简介</h4>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#news">
							<span class="diyfont"></span>
							<h4>新闻公告</h4>
						</a>
					</div>
				</div>		
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#">
							<span class="diyfont"></span>
							<h4>近期活动</h4>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#">
							<span class="diyfont"></span>
							<h4>俱乐部招新</h4>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#">
							<span class="diyfont"></span>
							<h4>技术交流</h4>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="gallery.php">
							<span class="diyfont"></span>
							<h4>相册园地</h4>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#">
							<span class="diyfont"></span>
							<h4>友情链接</h4>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="display-box">
						<a href="#">
							<span class="diyfont"></span>
							<h4>更多内容</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- introduction section -->
	<div id="intro" class="striped-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="display-box">
						<span class="diyfont"></span>
					</div>
				</div>
				<div class="col-md-9">
					<h2>俱乐部简介</h2>
					<p>1982----1986：毕业于哈尔滨工业大学计算机组织与系统结构专业获学士学位</p>
					<p>1986----1989：毕业于哈尔滨工业大学计算机应用专业获硕士学位</p>
					<p>1990----1993：毕业于哈尔滨工业大学计算机应用专业获博士学位</p>
					<p>1989----1992：哈尔滨工业大学计算机科学与工程系助教</p>
					<p>1992----1995：哈尔滨工业大学计算机科学与工程系讲师</p>
					<p>1995----1999：哈尔滨工业大学计算机科学与工程系副教授</p>
					<p>1999----2002：哈尔滨工业大学计算机科学与技术学院教授</p>
				</div>
			</div>
		</div>
	</div>
	<!-- news section -->
	<div id="news" class="striped-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="display-box">
						<span class="diyfont"></span>
					</div>
				</div>
				<div class="col-md-9">
					<h2>新闻公告</h2>
					<div class="news-display clearfix">
						<a href="#">
							<div class="news-title">
								XXX迟早是我的女人！！！
							</div>
							<div class="news-time">
								1970-01-01
							</div>
						</a>
					</div>
					<div class="news-display clearfix">
						<a href="#">
							<div class="news-title">
								XXX迟早是你的女人！！！
							</div>
							<div class="news-time">
								2038-12-07
							</div>
						</a>
					</div>
					<div class="news-display clearfix">
						<a href="#">
							<div class="news-title">
								XXX迟早是他的女人！！！
							</div>
							<div class="news-time">
								1926-08-17
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
<?php
	include_once "layout/login.php";
?>
</body>
</html>