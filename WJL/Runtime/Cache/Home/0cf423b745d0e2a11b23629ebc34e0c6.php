<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
	
	<!-- core CSS -->
    <link href="/qlc/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/qlc/Public/css/font-awesome.min.css" rel="stylesheet">
    <link href="/qlc/Public/css/animate.min.css" rel="stylesheet">
    <link href="/qlc/Public/css/prettyPhoto.css" rel="stylesheet">
    <link href="/qlc/Public/css/main.css" rel="stylesheet">
    <link href="/qlc/Public/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/qlc/Public/js/html5shiv.js"></script>
    <script src="/qlc/Public/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/qlc/Public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/qlc/Public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/qlc/Public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/qlc/Public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/qlc/Public/images/ico/apple-touch-icon-57-precomposed.png">
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
                    <a class="navbar-brand" href="index.html"><img src="/qlc/Public/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo ($address["index"]); ?>">首页</a></li>
                        <li><a href="<?php echo ($address["chart"]); ?>">走势图</a></li>
                        <li class="active"><a href="<?php echo ($address["quickstart"]); ?>">使用流程</a></li>
                        <li><a href="<?php echo ($address["testing"]); ?>">概率测试</a></li>
                        <li><a href="<?php echo ($address["analysis"]); ?>">分析计算</a></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div> 
    </section>

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

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

    <script src="/qlc/Public/js/jquery.js"></script>
    <script src="/qlc/Public/js/bootstrap.min.js"></script>
    <script src="/qlc/Public/js/jquery.prettyPhoto.js"></script>
    <script src="/qlc/Public/js/jquery.isotope.min.js"></script>
    <script src="/qlc/Public/js/main.js"></script>
    <script src="/qlc/Public/js/wow.min.js"></script>
</body>
</html>