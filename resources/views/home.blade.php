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
                        PROGRESSIVE BUSINESSES NEED AN
                        <br>OUTSOURCING PARTNER THAT CAN KEEP UP
                    </p>
                    <div class="pages-title">
                        <p class="text-center sm-word">
                            It is time to rethink your outsourcing model — full stack capabilities are the key for
                            project success.
                            Shinetech provides flexible teams comprise 1-8 full stack developers that can directly add
                            value to your rapidly evolving business.
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
                            <h2 class="text-center">WHO WE ARE</h2>
                            <p class="text-center">
                                Shinetech is a globally established provider of bespoke software development that was
                                founded in Beijing, China in 2001. It has collaborated with 1000+ companies around the
                                world, out of which, over 200 are from Australia. With a unique focus on building
                                strong, collaborative relationships with clients, Shinetech provides solutions that
                                quickly solve clients' business problems, promote their business innovation and growth.
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
                            <h2 class="text-center">OUR CLIENTS</h2>
                            <!--p class="text-center" style="margin-bottom: 50px;">
                                We have cooperated with over 300 Australian companies, covering agriculture and animal husbandry, manufacturing, public service, IT and healthcare sectors. The longest cooperation with an IT consulting company has been 9 years.
                            </p-->
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
        <div class="container-fluid">
            <div class="row home-r5-bg">
                <div class="container">
                    <div class="row home-r3">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <h2>TRY SHINETECH<br>FOR ONE WEEK,<br>FREE OF CHARGE!</h2>
                            <p class="text-left">
                                Share with us a specific requirement such as a module or function point that needs
                                further development. You’ll then be able to try our services risk-free for one week to
                                learn about our working methods, development efficiency, and other capabilities—all
                                before signing a final contract. Start a trial project now, risk free.
                            </p>
                            <a href="/free-trial.html" class="bigRedButton">START YOUR FREE TRIAL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row home-r2">
                    <div class="col-xs-12 col-sm-4 posts">
                        <h2>INSIGHTS</h2>
                        <div class="home-block-content">
                            <img src="{{ asset('imgs/recent_insights.jpg') }}" alt="Recent blog posts" class="img-responsive">
                            <p class="text-left t1"><span>Deshui Wang | Apr 8, 2017</span></p>
                            <p class="text-left">Something you don't know about ODC
                                <br>
                            </p>
                        </div>
                        <a href="/insights.html" class="learn-more">LEARN MORE</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 news">
                        <h2>RECENT NEWS</h2>
                        <div class="home-block-content">
                            <img src="{{ asset('imgs/recent-news.jpg') }}" alt="Recent news" class="img-responsive">
                            <p class="text-left t1"><span>April 20 </span></p>
                            <p class="text-left">Shinetech Software, Inc. Announces New Global Structure, Promotes Key
                                Leaders</p>
                        </div>
                        <a href="/about-us/newsroom.html" class="learn-more">NEWS ROOM</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 tweets">
                        <h2>LATEST TWEETS</h2>
                        <div class="home-block-content">
                            <p class="text-left">
                                <!-- <a href="https://twitter.com/ShinetechUS" class="twitter-timeline" data-widget-id="566901533678120961" data-link-color="#cc0000" width="290" height="320" data-tweet-limit="2" data-chrome="noheader nofooter transparent" target="_blank">Latest Tweets</a> -->
                                <a class="twitter-timeline" href="https://twitter.com/ShinetechUS" width="290"
                                   height="320">Latest Tweets</a>
                            </p>
                        </div>
                        <a href="https://twitter.com/ShinetechUS" class="learn-more" target="_blank">LATEST TWEETS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-push"></div>
    </div>



    <!-- footer start -->
    <footer class="footer-box">
        @include('footer')
    </footer>

</div>

@stop

