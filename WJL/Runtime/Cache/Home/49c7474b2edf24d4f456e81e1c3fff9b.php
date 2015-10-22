<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
	
	<!-- core CSS -->
    <link href="<?php echo C('CSS_URL'); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo C('CSS_URL'); ?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo C('CSS_URL'); ?>animate.min.css" rel="stylesheet">
    <link href="<?php echo C('CSS_URL'); ?>prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo C('CSS_URL'); ?>main.css" rel="stylesheet">
    <link href="<?php echo C('CSS_URL'); ?>responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo C('JS_URL'); ?>html5shiv.js"></script>
    <script src="<?php echo C('JS_URL'); ?>respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo C('IMG_URL'); ?>ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo C('IMG_URL'); ?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo C('IMG_URL'); ?>ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo C('IMG_URL'); ?>ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo C('IMG_URL'); ?>ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">            
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo C('IMG_URL'); ?>logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo ($address["index"]); ?>">首页</a></li>
                        <li><a href="<?php echo ($address["chart"]); ?>">走势图</a></li>
                        <li><a href="<?php echo ($address["quickstart"]); ?>">使用流程</a></li>
                        <li><a href="<?php echo ($address["testing"]); ?>">概率测试</a></li>
                        <li><a href="<?php echo ($address["analysis"]); ?>">分析计算</a></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(<?php echo C('IMG_URL'); ?>slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">七乐彩走势图</h1>
                                    <h2 class="animation animated-item-2">七乐彩走势图</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">立即前往</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo C('IMG_URL'); ?>slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo C('IMG_URL'); ?>slider/bg2.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">使用流程</h1>
                                    <h2 class="animation animated-item-2">网站简介和功能使用流程</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">立即前往</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo C('IMG_URL'); ?>slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo C('IMG_URL'); ?>slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">分析计算</h1>
                                    <h2 class="animation animated-item-2">可自定义参数分析计算号码特征</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">立即前往</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo C('IMG_URL'); ?>slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">&nbsp;
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">&nbsp;
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>图片新闻标题</h2>
                <p class="lead">图片新闻+换行 <br> 图片新闻</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题1(链接)</a> </h3>
                                <p>标题1 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题2(链接)</a></h3>
                                <p>标题2 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题3(链接) </a></h3>
                                <p>标题3 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题4(链接) </a></h3>
                                <p>标题4 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题5(链接)</a></h3>
                                <p>标题5 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题6(链接) </a></h3>
                                <p>标题6 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题7(链接) </a></h3>
                                <p>标题7 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>portfolio/recent/item8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">标题8 </a></h3>
                                <p>标题8 的说明文字</p>
                                <a class="preview" href="<?php echo C('IMG_URL'); ?>portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> 更多(链接)</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>图标说明新闻标题</h2>
                <p class="lead">图标说明 + 换行 <br> 图标说明</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">图标说明1</h3>
                            <p>图标说明1 详细内容</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">图标说明2</h3>
                            <p>图标说明2 详细内容</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">图标说明3</h3>
                            <p>图标说明3 详细内容</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">图标说明4</h3>
                            <p>图标说明4 详细内容</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">图标说明5</h3>
                            <p>图标说明5 详细内容</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">图标说明6</h3>
                            <p>图标说明6 详细内容</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>图表和说明</h2>
                        <p>图表和说明详细说明</p>

                        <div class="progress-wrap">
                            <h3>图表1</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>图表2</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>图表3</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>图表4</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>面板组</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  面板1
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>面板1 -> 标题</h4>
                                             <p>面板1 -> 说明文字</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  面板2
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                面板2 说明文字
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  面板3
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                面板3 说明文字
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  面板4
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                面板4 说明文字
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">选项卡1</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">选项卡2</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">选项卡3</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">选项卡4</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">选项卡5</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>tab2.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>选项卡1 包含的内容</h2>
                                                 <p>选项卡1 -> p标签中 包含的内容</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="<?php echo C('IMG_URL'); ?>tab1.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>选项卡2 包含的内容</h2>
                                                 <p>选项卡2 -> p标签中 包含的内容
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <p>选项卡3 包含的内容</p>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <p>选项卡4 包含的内容</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>选项卡5 包含的内容</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>选项卡右侧标题</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="<?php echo C('IMG_URL'); ?>testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>选项卡右侧上</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="<?php echo C('IMG_URL'); ?>testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>选项卡右侧下</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
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
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>支持</h3>
                        <ul>
                            <li><a href="#">常见问题</a></li>
                            <li><a href="#">博客</a></li>
                            <li><a href="#">论坛</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>占位</h3>
                        <ul>
                            <li><a href="#">列表项目1</a></li>
                            <li><a href="#">列表项目2</a></li>
                            <li><a href="#">列表项目3</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>占位</h3>
                        <ul>
                            <li><a href="#">列表项目1</a></li>
                            <li><a href="#">列表项目2</a></li>
                            <li><a href="#">列表项目3</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015-10-15 王巨龙 
                </div>
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
    </footer><!--/#footer-->

    <script src="<?php echo C('JS_URL'); ?>jquery.js"></script>
    <script src="<?php echo C('JS_URL'); ?>bootstrap.min.js"></script>
    <script src="<?php echo C('JS_URL'); ?>jquery.prettyPhoto.js"></script>
    <script src="<?php echo C('JS_URL'); ?>jquery.isotope.min.js"></script>
    <script src="<?php echo C('JS_URL'); ?>main.js"></script>
    <script src="<?php echo C('JS_URL'); ?>wow.min.js"></script>
</body>
</html>