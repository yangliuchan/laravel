<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Piccolo Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('/template').'/'.$name }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/template').'/'.$name }}/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="{{ url('/template').'/'.$name }}/css/prettyPhoto.css" />
    <link rel="stylesheet" href="{{ url('/template').'/'.$name }}/css/flexslider.css" />
    <link rel="stylesheet" href="{{ url('/template').'/'.$name }}/css/custom-styles.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="{{ url('/template').'/'.$name }}/css/style-ie.css"/>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ url('/template').'/'.$name }}/img/favicon.ico">
    <link rel="apple-touch-icon" href="{{ url('/template').'/'.$name }}/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/template').'/'.$name }}/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/template').'/'.$name }}/img/apple-touch-icon-114x114.png">

    <!-- JS
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="{{ url('/template').'/'.$name }}/js/bootstrap.js"></script>
    <script src="{{ url('/template').'/'.$name }}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ url('/template').'/'.$name }}/js/jquery.flexslider.js"></script>
    <script src="{{ url('/template').'/'.$name }}/js/jquery.custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
                $('#clientCarousel').carousel('prev')
            });

        });

        $(window).load(function(){

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });

    </script>

</head>

<body class="home">
<!-- Color Bars (above header)-->
<div class="color-bar-1"></div>
<div class="color-bar-2 color-bg"></div>

<div class="container">

    <div class="row header"><!-- Begin Header -->

        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
            <a href="index.htm">
                <!--<img src="{{ url('/template').'/'.$name }}/img/piccolo-logo.png" alt="" />-->
                康芙佳美苑
            </a>
            <h5>绿色 - 专业 - 健康 - 美丽</h5>
        </div>

        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">

                <ul class="nav">
                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">首页 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.htm">Full Page</a></li>
                            <li><a href="index-gallery.htm">Gallery Only</a></li>
                            <li><a href="index-slider.htm">Slider Only</a></li>
                        </ul>
                    </li>
                    <li><a href="features.htm">Features</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page-full-width.htm">Full Width</a></li>
                            <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                            <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                            <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                            <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                            <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                            <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                            <li><a href="gallery-single.htm">Gallery Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-style1.htm">Blog Style 1</a></li>
                            <li><a href="blog-style2.htm">Blog Style 2</a></li>
                            <li><a href="blog-style3.htm">Blog Style 3</a></li>
                            <li><a href="blog-style4.htm">Blog Style 4</a></li>
                            <li><a href="blog-single.htm">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.htm">Contact</a></li>
                </ul>

            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                    <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                        <option value="">导航...</option>
                        <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                        <option value="features.htm">Features</option>
                        <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                        <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                        <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                        <option value="page-contact.htm">Contact</option>
                    </select>
                </div>
            </form>

        </div>

    </div><!-- End Header -->

    <div class="row headline"><!-- Begin Headline -->

        <!-- Slider Carousel
       ================================================== -->
        <div class="span8">
            <div class="flexslider">
                <ul class="slides">
                    <li><a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                    <li><a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                    <li><a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                    <li><a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                    <li><a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                </ul>
            </div>
        </div>

        <!-- Headline Text
        ================================================== -->
        <div class="span4">
            <h3>欢迎光临康芙佳美苑. <br />
                一家专业的养生美容美体会所.</h3>
            <p class="lead">本店宗旨:专业打造健康美丽出水芙蓉般的佳人</p>
            <p>本店成立于2010年5月1日，主营养生理疗，美体塑形，专业护肤</p>
            <a href="#"><i class="icon-plus-sign"></i>了解详情</a>
        </div>
    </div><!-- End Headline -->

    <div class="row gallery-row"><!-- Begin Gallery Row -->

        <div class="span12">
            <h5 class="title-bg">服务项目 / 护肤品
                <small>健康美丽新生活的开始！</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">查看更多 > </button>
            </h5>

            <!-- Gallery Thumbnails
            ================================================== -->

            <div class="row clearfix no-margin">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">鲜活红玫瑰童颜能量液</a>滋养肌肤 深层补水保湿</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">3 Color Poster Design</a>For a regional festival event.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="#" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Ink Pen Illustration</a>Created for a best selling children's book.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span3 gallery-item" data-id="id-5" data-type="web illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Icon Design</a>Classic retro style illustration.</span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span3 gallery-item" data-id="id-6" data-type="illustration design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Animation Cell</a>Creative storyboard illustration</span>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span3 gallery-item" data-id="id-7" data-type="design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Poster Ad Campaign</a>Regional ad for a local company.</span>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span3 gallery-item" data-id="id-8" data-type="web video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Magazine Ad</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 9 -->
                    <li class="span3 gallery-item" data-id="id-9" data-type="design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Character Designs</a>For a feature film.</span>
                    </li>

                    <!-- Gallery Item 10 -->
                    <li class="span3 gallery-item" data-id="id-10" data-type="web design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Poster and Ad Design</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 11 -->
                    <li class="span3 gallery-item" data-id="id-11" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Website and Animation</a>For a local business.</span>
                    </li>

                    <!-- Gallery Item 12 -->
                    <li class="span3 gallery-item" data-id="id-12" data-type="illustration video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Branding Design</a>For an international add campaign.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div><!-- End Gallery Row -->

    <div class="row"><!-- Begin Bottom Section -->

        <!-- Blog Preview
        ================================================== -->
        <div class="span6">

            <h5 class="title-bg">最新活动
                <small>适合你才是最好的</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            <div id="blogCarousel" class="carousel slide ">

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <!-- Blog Item 1 -->
                    <div class="active item">
                        <a href="blog-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">十一特惠 全场8折</a></h4>
                            <ul class="blog-details-preview">
                                <li>汇香坊十周年全场优惠，买一送一，满280元抽奖一次，千元大奖等你拿</li>
                                <li><i class="icon-calendar"></i><strong>活动日期:</strong> 2017.10.1-2017.10.7</li>
                                <li><i class="icon-user"></i><strong>发布人:</strong> <a href="#" title="Link">Admin</a><li>
                                <li><i class="icon-comment"></i><strong>回复:</strong> <a href="#" title="Link">12</a><li>
                            </ul>
                        </div>
                        <p class="blog-summary">国庆中秋双节来临之际，康芙佳美苑联合汇香坊公司十周年庆，举办国庆大促狂欢购物节活动... <a href="#">更多 ></a><p>
                    </div>

                    <!-- Blog Item 2 -->
                    <div class="item">
                        <a href="blog-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                                <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                    </div>

                    <!-- Blog Item 3 -->
                    <div class="item">
                        <a href="blog-single.htm"><img src="{{ url('/template').'/'.$name }}/img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                                <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Client Area
        ================================================== -->
        <div class="span6">

            <h5 class="title-bg">客户评价
                <small>展示你的美</small>
                <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            <!-- Client Testimonial Slider-->
            <div id="clientCarousel" class="carousel slide no-margin">
                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="active item">
                        <p class="quote-text">"康芙佳真的很专业，服务也好，我脸上的痘痘就是在这儿治好的"<cite>- 好运多又多</cite></p>
                    </div>

                    <div class="item">
                        <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Another Client Name, Company Name</cite></p>
                    </div>

                    <div class="item">
                        <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam quis condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."<cite>- On More Client, The Company</cite></p>
                    </div>

                </div>
            </div>

        </div>

    </div><!-- End Bottom Section -->

</div> <!-- End Container -->

<!-- Footer Area
    ================================================== -->

<div class="footer-container"><!-- Begin Footer -->
    <div class="container">
        <div class="row footer-row">
            <div class="span3 footer-col">
                <h2>康芙佳美苑</h2>
            </div>
            <div class="span3 footer-col">
                <h5>联系地址</h5>
                黄岛区炜伦广场月亮湾路87号
            </div>
            <div class="span3 footer-col">
                <h5>联系电话</h5>
                13583232096
            </div>
            <div class="span3 footer-col">
                <h5>其他</h5>
                微信号：13678862731<br>
                QQ号：287643563
            </div>
        </div>
        <div class="row"><!-- Begin Sub Footer -->
            <div class="span12 footer-col footer-sub">
                <div class="row no-margin">
                    <div class="span6"><span class="left">Copyright 2017 博麟网络工作室. All rights reserved.</span></div>
                    <div class="span6">
                            <span class="right">
                            <a href="#">首页</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">活动</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">服务</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">关于我们</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">联系我们</a>
                            </span>
                    </div>
                </div>
            </div>
        </div><!-- End Sub Footer -->

    </div>
</div><!-- End Footer -->

<!-- Scroll to Top -->
<div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>
</html>
