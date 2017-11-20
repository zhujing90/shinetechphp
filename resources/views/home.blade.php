@extends('main')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@section('title', 'Home')

@section('content')

<div id="shinetech">

    <div class="wrapper-big-box">
        <!-- header start -->
        @include('header')

        <!-- banner start -->
        <div class="container-fluid">
            <div class="row top-banner-box">
                <div class="banner-mask"></div>
                <div class="index-banner-box">
                    <p class="big-title">
                        Banner轮播图展示
                        <br>
                    </p>
                    <div class="pages-title">
                        <p class="text-center sm-word">
                            一些简介
                        </p>
                    </div>
                </div>
                <div class="top-banner">
                    <img src="{{ asset('imgs/index-banner.jpg') }}" alt="banner" class="img-responsive">
                </div>
                <div class="breadcrumb-box"></div>
            </div>
        </div>
        <!-- banner end-->
        <div class="container-fluid top-banner-control"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row home-r6">
                        <div class="col-md-12">
                            <h2 class="text-center">关于我们</h2>
                            <p class="text-center">
                                分公司介绍，获得的资质等
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row home-r1-bg">
                <div class="container home-r1">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="home-image-all-in partners-logo Deloitte center-block"></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 center-block">
                            <a class="home-image-all-in partners-logo Inc5000 center-block"
                               href="http://www.inc.com/profile/shinetech-software" target="_blank"></a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="home-image-all-in partners-logo IAOP center-block"></div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="home-image-all-in partners-logo IDC center-block"></div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background: #ebebeb;">
            <div class="row">
                <div class="container">
                    <div class="row home-r6">
                        <div class="col-md-12">
                            <h2 class="text-center">我们的客户</h2>
                            <p class="text-center" style="margin-bottom: 50px;">
                                这部分展示几个重点的客户
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid homenew">
            <div class="row">
                <div class="container">
                    <div class="row home-r6">
                        <div class="col-md-12">
                            <div id="myCarousel" class="carousel slide myshine-slider">
                                <!-- 轮播（Carousel）指标 -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!-- 轮播（Carousel）项目 -->
                                <div class="carousel-inner">
                                    <div class="item active clearfix">
                                        <div class="col-md-8">
                                            <p class="title">inNovated Leasing Australia</p>
                                            <p>"We are now into our second year with the Shinetech software development
                                                team and the attention to detail as well as suggested enhancements that
                                                exceed requirements continue to impress. I am delighted with the
                                                professionalism and the high standard of work provided that has
                                                facilitated a transformation in our systems, and enhances our capacity
                                                to grow our service based business. Good communication is essential to
                                                outcome focused IT development and in this the Shinetech developers
                                                excel. Confidence and peace of mind are the result..."</p>
                                            <p>-Neil Campbell, Managing Director, inNovated Leasing Australia</p>
                                            <div><a class="mygreenBtn" href="case/case-novated.html">View Case</a></div>
                                        </div>
                                        <div class="col-md-4 img-right">
                                            <div class="circle-img">
                                                <img src="{{ asset('imgs/Innovated logo.png') }}"
                                                     alt="Shinetech Australia clients, a motor leasing company">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-8">
                                            <p class="title">AccountAbility Access Pty Ltd</p>
                                            <p>"AccountAbility have worked with Shinetech in a very effective
                                                relationship continuously since 2007. Shinetech deliver a consistently
                                                high standard of work. We find all of the Shinetech people we deal with
                                                to be skilled, productive and a pleasure to work with. We highly
                                                recommend Shinetech."</p>
                                            <p>-Terry McMillan, AccountAbility Access Pty Ltd</p>
                                            <div><a class="mygreenBtn" href="case/case-account.html">View Case</a></div>
                                        </div>
                                        <div class="col-md-4 img-right">
                                            <div class="circle-img">
                                                <img src="{{ asset('imgs/accountability.gif') }}"
                                                     alt="Shinetech's Australia client, a office automation solution provider">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-8">
                                            <p class="title">NuPoint Systems Inc.</p>
                                            <p>“Leon and his team were responsible for developing our software system
                                                and the hardware integration. His technical knowledge, leadership and
                                                experience working in software technology has been impressive. The team
                                                are talented, efficient, dedicated and extremely resourceful, they have
                                                developed a system which is adaptable to any industry.”</p>
                                            <p>- Lance, NuPoint Systems Inc.</p>
                                            <div><a class="mygreenBtn" href="case/case-nupoint.html">View Case</a></div>
                                        </div>
                                        <div class="col-md-4 img-right">
                                            <div class="circle-img">
                                                <img src="{{ asset('imgs/Bitmap.png') }}"
                                                     alt="Shinetech Australia client, a intelligent farming system provider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background: #ebebeb;">
            <div class="row">
                <div class="container">
                    <div class="row home-r6">
                        <div class="col-md-12">
                            <h2 class="text-center">我们的案例</h2>
                            <p class="text-center" style="margin-bottom: 50px;">
                                这部分展示几个典型的案例
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row home-r5-bg">
                <div class="container">
                    <div class="row home-r3">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <h2>我们的员工</h2>
                            <p class="text-left">
                                精英员工介绍
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div>这里放一个地图</div>
            </div>
        </div>
        <div class="footer-push"></div>
    </div>

    <!-- footer start -->
    @include('footer')
</div>

@stop

