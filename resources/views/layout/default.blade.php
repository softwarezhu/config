<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>惠多多管理后台@yield('meta', '')</title>

    <meta name="keywords" content="历史价格查询,历史价格搜索,比价网站,天天比价">
    <meta name="description" content="最专业的历史价格搜索引擎。收录了京东、天猫等一百多个电商的历史价格。">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <link href="//cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/summernote/0.6.16/summernote.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="">
<div class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">菜单</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">惠多多管理后台</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/rewards">优惠券</a></li>
                <li><a href="/products">商品</a></li>
                <li><a href="/merchants">商家</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>你好，{{ $currentUser->name }}<a href="/auth/logout" class="logout">退出登录</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container" id="content">
    @section('content')
    @show
</div>

<div class="footer" id="footer">
    <div class="container">
        <div class="row footer-top">
            <div class="col-sm-6 col-lg-6">
                <h4>
                    <img src="/img/logo.png" height="120">
                </h4>
                <p>天天比价网，最专业的历史价格查询网站。</p>
            </div>
            <div class="col-sm-6  col-lg-5 col-lg-offset-1">å
                <div class="row about">
                    <div class="col-xs-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="/">关于我们</a></li>
                            <li><a href="/">广告合作</a></li>
                            <li><a href="/">友情链接</a></li>
                            <li><a href="/">招聘</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a href="/" title="" target="_blank">微博</a></li>
                            <li><a href="mailto:admin@tiantianbijia.com">电子邮件</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li>
                    <a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a>
                </li>
                <li>京公网安备11010802014853</li>
            </ul>
        </div>
    </div>
</div>
<a href="#" class="scroll-to-top" id="scroll-to-top" title="回到顶部" data-toggle="tooltip" data-placement="left"><i class="fa fa-arrow-circle-up fa2"></i></a>

@section('js')
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/summernote/0.6.16/summernote.min.js"></script>
    <script src="/js/app.js"></script>
@show
</body>
</html>
