@extends('layouts.admin')

@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="widget widget-nopad">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> 今日统计</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <div class="widget big-stats-container">
                                    <div class="widget-content">
                                        <h6 class="bigstats">今日访客数据.</h6>
                                        <div id="big_stats" class="cf">
                                            <div class="stat"> <i class="icon-anchor"></i> <span class="value">851</span> </div>
                                            <!-- .stat -->

                                            <div class="stat"> <i class="icon-thumbs-up-alt"></i> <span class="value">423</span> </div>
                                            <!-- .stat -->

                                            <div class="stat"> <i class="icon-twitter-sign"></i> <span class="value">922</span> </div>
                                            <!-- .stat -->

                                            <div class="stat"> <i class="icon-bullhorn"></i> <span class="value">25%</span> </div>
                                            <!-- .stat -->
                                        </div>
                                    </div>
                                    <!-- /widget-content -->

                                </div>
                            </div>
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header"> <i class="icon-file"></i>
                                <h3> 访客留言</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <ul class="messages_layout">
                                    <li class="from_user left"> <a href="#" class="avatar"><img src="admin/img/message_avatar1.png"/></a>
                                        <div class="message_wrap"> <span class="arrow"></span>
                                            <div class="info"> <a class="name">小明</a> <span class="time">1 小时前</span>
                                                <div class="options_arrow">
                                                    <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                                                        <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                            <li><a href="#"><i class=" icon-share-alt icon-large"></i> 回复</a></li>
                                                            <li><a href="#"><i class=" icon-trash icon-large"></i> 删除</a></li>
                                                            <li><a href="#"><i class=" icon-share icon-large"></i> 分享</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text"> 这家店铺真心不错，物美价廉，服务还好！</div>
                                        </div>
                                    </li>
                                    <li class="from_user right"> <a href="#" class="avatar"><img src="admin/img/message_avatar1.png"/></a>
                                        <div class="message_wrap"> <span class="arrow"></span>
                                            <div class="info"> <a class="name">小明</a> <span class="time">1 小时前</span>
                                                <div class="options_arrow">
                                                    <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                                                        <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                            <li><a href="#"><i class=" icon-share-alt icon-large"></i> 回复</a></li>
                                                            <li><a href="#"><i class=" icon-trash icon-large"></i> 删除</a></li>
                                                            <li><a href="#"><i class=" icon-share icon-large"></i> 分享</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text"> 这家店铺真心不错，物美价廉，服务还好！</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    <!-- /span6 -->
                    <div class="span6">

                        <div class="widget">
                            <div class="widget-header"> <i class="icon-signal"></i>
                                <h3> 周访问量</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
                                <!-- /area-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget widget-nopad">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> 信息列表</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <ul class="news-items">
                                    <li>

                                        <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                                        <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank">Thursday Roundup # 40</a>
                                            <p class="news-item-preview"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                                        </div>

                                    </li>
                                    <li>

                                        <div class="news-item-date"> <span class="news-item-day">15</span> <span class="news-item-month">Jun</span> </div>
                                        <div class="news-item-detail"> <a href="http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/" class="news-item-title" target="_blank">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                                            <p class="news-item-preview"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                                        </div>

                                    </li>
                                    <li>

                                        <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Oct</span> </div>
                                        <div class="news-item-detail"> <a href="http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/" class="news-item-title" target="_blank">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                                            <p class="news-item-preview"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    <!-- /span6 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /main -->
@endsection
