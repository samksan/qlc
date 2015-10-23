<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<style type="text/css" media="screen">
	table{
		border:solid 1px #999999;
	}
	td{
		border:solid 1px;
	}
</style>
<title>Home | Corlate</title>

<!-- core CSS -->
<link href="/qlc/Public/css/bootstrap.min.css"
	rel="stylesheet">
<link href="/qlc/Public/css/font-awesome.min.css"
	rel="stylesheet">
<link href="/qlc/Public/css/animate.min.css" rel="stylesheet">
<link href="/qlc/Public/css/prettyPhoto.css" rel="stylesheet">
<link href="/qlc/Public/css/main.css" rel="stylesheet">
<link href="/qlc/Public/css/responsive.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="/qlc/Public/js/html5shiv.js"></script>
    <script src="/qlc/Public/js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon"
	href="/qlc/Public/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="/qlc/Public/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="/qlc/Public/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="/qlc/Public/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="/qlc/Public/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

	<header id="header">
		<div class="top-bar"></div>
		<!--/.top-bar-->

		<nav class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img
						src="/qlc/Public/images/logo.png" alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo ($address["index"]); ?>">首页</a></li>
						<li class="active"><a href="<?php echo ($address["chart"]); ?>">走势图</a></li>
						<li><a href="<?php echo ($address["quickstart"]); ?>">使用流程</a></li>
						<li><a href="<?php echo ($address["testing"]); ?>">概率测试</a></li>
						<li><a href="<?php echo ($address["analysis"]); ?>">分析计算</a></li>
					</ul>
				</div>
			</div>
			<!--/.container-->
		</nav>
		<!--/nav-->

	</header>
	<!--/header-->


	<section id="contact-info">
		<div class="center">
			<h2><a href="http://chart.cp.360.cn/zst/qlc" "360彩票网" target="_blank">七乐彩走势图</a></h2>
		</div>
		<div>
			<div class="container">
				<div class="row">
					<div class="textcenter">
						<div id="chart-tab" class="chart-tab nonum">
							<table width="100%" class="table text-center table-hover">
								<thead class="zhzs">
									<tr>
										<td class=" w2_0">期号</td>									
										<td class=" w2_0">01</td>
										<td class=" w2_0">02</td>
										<td class=" w2_0">03</td>
										<td class=" w2_0">04</td>
										<td class=" w2_0">05</td>
										<td class=" w2_0">06</td>
										<td class=" w2_0">07</td>
										<td class=" w2_0">08</td>
										<td class=" w2_0">09</td>
										<td class=" w2_0">10</td>
										<td class=" w2_0">11</td>
										<td class=" w2_0">12</td>
										<td class=" w2_0">13</td>
										<td class=" w2_0">14</td>
										<td class=" w2_0">15</td>
										<!-- <td class="tdbdr  tdbdr_nav"></td> -->
										<td class=" w2_0">16</td>
										<td class=" w2_0">17</td>
										<td class=" w2_0">18</td>
										<td class=" w2_0">19</td>
										<td class=" w2_0">20</td>
										<td class=" w2_0">21</td>
										<td class=" w2_0">22</td>
										<td class=" w2_0">23</td>
										<td class=" w2_0">24</td>
										<td class=" w2_0">25</td>
										<td class=" w2_0">26</td>
										<td class=" w2_0">27</td>
										<td class=" w2_0">28</td>
										<td class=" w2_0">29</td>
										<td class=" w2_0">30</td>
									</tr>
								</thead>
								<tbody class="zzhzs" id="data-tab">
									<?php if(is_array($kjh)): $i = 0; $__LIST__ = $kjh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo); endforeach; endif; else: echo "" ;endif; ?>									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/gmap_area -->

	<section id="bottom">
		<div class="container wow fadeInDown" data-wow-duration="1000ms"
			data-wow-delay="600ms">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3>七乐彩</h3>
						<ul>
							<li><a href="#">官方</a></li>
							<li><a href="#">360彩票</a></li>
							<li><a href="#">新浪彩票</a></li>
						</ul>
					</div>
				</div>
				<!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3>支持</h3>
						<ul>
							<li><a href="#">常见问题</a></li>
							<li><a href="#">博客</a></li>
							<li><a href="#">论坛</a></li>
						</ul>
					</div>
				</div>
				<!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3>占位</h3>
						<ul>
							<li><a href="#">列表项目1</a></li>
							<li><a href="#">列表项目2</a></li>
							<li><a href="#">列表项目3</a></li>
						</ul>
					</div>
				</div>
				<!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3>占位</h3>
						<ul>
							<li><a href="#">列表项目1</a></li>
							<li><a href="#">列表项目2</a></li>
							<li><a href="#">列表项目3</a></li>
						</ul>
					</div>
				</div>
				<!--/.col-md-3-->
			</div>
		</div>
	</section>
	<!--/#bottom-->

	<footer id="footer" class="midnight-blue">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">&copy; 2015-10-15 王巨龙</div>
				<div class="col-sm-6">
					<ul class="pull-right">
						<li><a href="#">主页</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="#">Faq</a></li>
						<li><a href="#">联系我</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/#footer-->

	<script src="/qlc/Public/js/jquery.js"></script>
	<script src="/qlc/Public/js/bootstrap.min.js"></script>
	<script src="/qlc/Public/js/jquery.prettyPhoto.js"></script>
	<script src="/qlc/Public/js/jquery.isotope.min.js"></script>
	<script src="/qlc/Public/js/main.js"></script>
	<script src="/qlc/Public/js/wow.min.js"></script>
</body>
</html>