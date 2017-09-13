<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="huomingxiang">

	<title>视频集  /  公演_GNZ48-熊心瑶</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css"  type="text/css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- Owl Carousel Assets -->
	<link href="/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/assets/owl-carousel/owl.theme.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link rel="stylesheet" href="/assets/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">

	<!-- jQuery -->
	<script src="/assets/js/jquery.js"></script>

	<!-- Core JavaScript Files -->
	<script src="/assets/js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="/assets/js/html5shiv.js"></script>
	<script src="/assets/js/respond.min.js"></script>
	<![endif]-->

	<script language="javascript" type="text/javascript">
		function multi(pagenum,tagid)
		{
			var taget_obj = document.getElementById(tagid);
			var taget_obj_page = document.getElementById("page_"+tagid);
			myajax = new DedeAjax(taget_obj,false,false,'','','');
			myajax.SendGet2("/plus/arcmulti.php?mtype=0&pnum="+pagenum+'&tagid='+tagid);
			myajax = new DedeAjax(taget_obj_page,false,false,'','','');
			myajax.SendGet2("/plus/arcmulti.php?mtype=1&pnum="+pagenum+'&tagid='+tagid);
			DedeXHTTP = null;

		}
	</script>
	<style type="text/css">
		/*pages*/
		.pagination-wrapper{
			margin: 20px 0;
		}
		.pagination{
			height: 34px;
			text-align: center;
		}
		.pagination li {
			display: inline-block;
			height: 34px;
			margin-right: 5px;
		}
		.pagination li a{
			float: left;
			display: block;
			height: 32px;
			line-height: 32px;
			padding: 0 12px;
			font-size: 16px;
			border: 1px solid #dddddd;
			color: #555555;
			text-decoration: none;
		}
		.pagination li a:hover{
			background:#f5f5f5;
			color:#0099ff;
		}
		.pagination li.thisclass {
			background: #09f;
			color: #fff;
		}
		.pagination li.thisclass a,.pagination li.thisclass a:hover{
			background: transparent;
			border-color: #09f;
			color: #fff;
			cursor: default;
		}
		.zoom-container img{
			width: 240px;
			height: 180px;
		}
	</style>
</head>

<body>
<header>

	<!--Navigation-->
	<nav id="menu" class="navbar">
		<div class="container">
			<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
				<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="http://www.xiongxinyao.top"><i class="fa fa-home"></i> 首页</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-play-circle-o"></i> 视频</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">

									<li><a href='/plus/list.php?tid=6'><span>公演</span></a></li>

								</ul>
							</div>
						</div>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 图集</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="/plus/view.php?aid=3">JK集</a></li>

								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>


</header>
<!-- Header -->

<!-- /////////////////////////////////////////Content -->

<div id="page-content" class="index-page">

	<div class="container">

		<div class="row">
			<div id="main-content" class="col-md-12">



				<div class="box">
					<div class="box-header">
						<h2><i class="fa fa-vimeo-square"></i> 精选公演</h2>
					</div>
					<div class="box-content">
						<div class="row">
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>推荐</span>
											<a href="/plus/view.php?aid=8">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>20161223公演</p>
										</div>
										<img src="/images/defaultpic.gif" />
									</div>
									<h3 class="vid-name"><a href="#">GNZ48《我的太阳》20161223 公演</a></h3>
									<div class="info">
										<h5>By <a href="#">吖盖</a></h5>
										<span><i class="fa fa-calendar"></i>2016-12-23</span>
										<span><i class="fa fa-heart"></i>543</span>
									</div>
								</div>
							</div><div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>推荐</span>
											<a href="/a/shipinji/gongyan/2017/0219/20.html">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>2017生日公演</p>
										</div>
										<img src="/uploads/170219/1-1F219105930Y5-lp.jpg" />
									</div>
									<h3 class="vid-name"><a href="#">熊心瑶20170211生日公演</a></h3>
									<div class="info">
										<h5>By <a href="#">admin</a></h5>
										<span><i class="fa fa-calendar"></i>2017-02-19</span>
										<span><i class="fa fa-heart"></i>427</span>
									</div>
								</div>
							</div><div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>推荐</span>
											<a href="/plus/view.php?aid=16">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>20160710拉票公演</p>
										</div>
										<img src="/uploads/170125/1-1F125142111W5-lp.jpg" />
									</div>
									<h3 class="vid-name"><a href="#">熊心瑶 20160710拉票公演</a></h3>
									<div class="info">
										<h5>By <a href="#">admin</a></h5>
										<span><i class="fa fa-calendar"></i>2016-07-10</span>
										<span><i class="fa fa-heart"></i>421</span>
									</div>
								</div>
							</div><div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>推荐</span>
											<a href="/plus/view.php?aid=19">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>荣耀日第三版</p>
										</div>
										<img src="/uploads/170126/1-1F126100519614.jpg" />
									</div>
									<h3 class="vid-name"><a href="#">荣耀日第三版</a></h3>
									<div class="info">
										<h5>By <a href="#">admin</a></h5>
										<span><i class="fa fa-calendar"></i>2017-01-21</span>
										<span><i class="fa fa-heart"></i>322</span>
									</div>
								</div>
							</div><div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>推荐</span>
											<a href="/plus/view.php?aid=18">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>荣耀日第二版</p>
										</div>
										<img src="/uploads/170126/1-1F1261001431Z.jpg" />
									</div>
									<h3 class="vid-name"><a href="#">荣耀日第二版</a></h3>
									<div class="info">
										<h5>By <a href="#">admin</a></h5>
										<span><i class="fa fa-calendar"></i>2016-10-03</span>
										<span><i class="fa fa-heart"></i>311</span>
									</div>
								</div>
							</div><div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>推荐</span>
											<a href="/plus/view.php?aid=17">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>荣耀日第一版</p>
										</div>
										<img src="/uploads/170126/1-1F126094535N0-lp.jpg" />
									</div>
									<h3 class="vid-name"><a href="#">荣耀日第一版</a></h3>
									<div class="info">
										<h5>By <a href="#">admin</a></h5>
										<span><i class="fa fa-calendar"></i>2016-06-19</span>
										<span><i class="fa fa-heart"></i>164</span>
									</div>
								</div>
							</div>


						</div>
						<div class="pagination-wrapper text-center">
							<ul class="pagination">
								<li><span class="pageinfo">共 1 页/6 条记录</span></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>





	</div>
</div>
</div>

</div>

<footer>


	<div class="bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 copyright">
					<span>Copyright © GNZ48-熊心瑶应援会<a target="_blank" href="http://www.cssmoban.com/"></a></span>
				</div>
				<div class="col-md-6 col-sm-6 link">
					<div class="menu-footer-menu-container">
						<ul id="menu-footer-menu" class="menu list-inline">
							<li><a href="http://www.xiongxinyao.top"><i class="fa fa-home"></i> 首页</a></li>
							<li><a href="http://weibo.com/u/5863793218"><i class="fa fa-comments"></i> 应援会微博</a></li>
							<li><a href="https://jq.qq.com/?_wv=1027&k=43HjPC7"><i class="fa fa-question-circle"></i> 联系QQ群</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer -->

<!-- JS -->
<script src="/assets/owl-carousel/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			autoPlay: 3000,
			items : 5,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [979,4]
		});

	});
</script>

</body>
</html>
