<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
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
		<div class="container">			
			<div class="row">
				<div style="width:30%">
					<form action="" method="post">
						<div class="input-group">						
							<input type="text" class="form-control" placeholder="期数" name="numbers">
							<span class="input-group-btn">
								<button class="btn btn-success" type="submit">Go!</button>
							</span>
						</div>
					</form>
				</div>						
			</div><!-- /.row -->
		</div>
		<!--/.container-->
		
		<div class="container">
			<div class="row">
				<table class="table table-bordered text-center table-hover table-responsive">
					<thead>
						<tr>
							<td><strong>期号</strong></td>									
							<td><strong>00</strong></td>
							<td><strong>01</strong></td>
							<td><strong>03</strong></td>
							<td><strong>04</strong></td>
							<td><strong>05</strong></td>
							<td><strong>06</strong></td>
							<td><strong>07</strong></td>
							<td><strong>08</strong></td>
							<td><strong>09</strong></td>
							<td><strong>10</strong></td>
							<td><strong>11</strong></td>
							<td><strong>12</strong></td>
							<td><strong>13</strong></td>
							<td><strong>14</strong></td>
							<td><strong>15</strong></td>
							<td><strong>16</strong></td>
							<td><strong>17</strong></td>
							<td><strong>18</strong></td>
							<td><strong>19</strong></td>
							<td><strong>20</strong></td>
							<td><strong>21</strong></td>
							<td><strong>22</strong></td>
							<td><strong>23</strong></td>
							<td><strong>24</strong></td>
							<td><strong>25</strong></td>
							<td><strong>26</strong></td>
							<td><strong>27</strong></td>
							<td><strong>28</strong></td>
							<td><strong>29</strong></td>
							<td><strong>30</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($kjh)): $i = 0; $__LIST__ = $kjh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo); endforeach; endif; else: echo "" ;endif; ?>									
					</tbody>
				</table>
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
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