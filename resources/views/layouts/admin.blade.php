<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>Dashboard - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="admin/css/font-awesome.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/pages/dashboard.css" rel="stylesheet">

    @yield('css')

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">博麟网络管理后台 </a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li>
                        <a href="{{ url('/') }}">网站首页</a>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-cog"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">个人资料</a></li>
                            <li><a href="javascript:;">公司信息</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-user"></i> 会员中心 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">店铺修改</a></li>
                            <li><a href="javascript:;">店铺预览</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>退出</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li class="active"><a href="{{ url('/home') }}"><i class="icon-dashboard"></i><span>首页</span> </a> </li>
                <li><a href="{{ url('/info') }}"><i class="icon-list-alt"></i><span>公司信息</span> </a> </li>
                <li><a href="{{ url('/template') }}"><i class="icon-facetime-video"></i><span>模板选择</span> </a></li>
                <li><a href="{{ url('/data') }}"><i class="icon-bar-chart"></i><span>数据统计</span> </a> </li>
                <li><a href="{{ url('/Shop') }}"><i class="icon-code"></i><span>店铺修改</span> </a> </li>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>添加信息</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/product') }}">产品</a></li>
                        <li><a href="{{ url('/article') }}">文章</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
{{ Auth::user() }}

@yield('content')

<div class="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="span12"> &copy; 2017 <a href="#">博麟网络工作室</a>. </div>
                <!-- /span12 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /footer-inner -->
</div>
<!-- /footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="admin/js/jquery-1.7.2.min.js"></script>
<script src="admin/js/excanvas.min.js"></script>
<script src="admin/js/chart.min.js" type="text/javascript"></script>
<script src="admin/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="admin/js/full-calendar/fullcalendar.min.js"></script>
@yield('js')
</body>
</html>
