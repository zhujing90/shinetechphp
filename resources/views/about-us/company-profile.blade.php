@extends('main')

@section('title', 'Home')

@section('content')

<div id="shinetech">
    <div class="wrapper-big-box">

        <!-- header start -->
        @include('header')

        <!-- banner start-->
        <div class="container-fluid">
            <div class="row top-banner-box">

                <div class="banner-mask"></div>
                <div class="container pages-title-ctn">
                    <div class="pages-title-bg">
                        <div class="pages-title-box">
                            <div class="pages-title">
                                <p class="text-center text-nowrap">COMPANY PROFILE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-banner">
                    <img src="{{ asset('imgs/company-profile-new.jpg') }}" alt="Shinetech foucuses on cultivating full stack developers that bring value to clents directly" class="img-responsive">
                </div>
                <div class="breadcrumb-box"></div>

            </div>
        </div>
        <!-- banner end-->

        <div class="container-fluid top-banner-control"></div>

        <div class="container-fluid">
            <div class="row common-bg cp-r1-bg">
                <div class="container wrapper cp-r1">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <p class="text-left">
                                Shinetech Software Inc. is a trusted partner and a recognized leader in providing application outsourcing, systems integration and solution delivery services.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <img src="{{ asset('imgs/company-profile-bubble_0.png') }}" alt="Shinetech company profile" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row cp-r2-bg">
                <div class="container wrapper cp-r2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <p class="text-left">
                                Since 2001, we have provided premium software development and strategy expertise to hundreds of companies around the world. With a unique focus on building strong, collaborative relationships with clients, Shinetech has created a solid reputation for
                                exceeding our client expectations with quality work and fast delivery turnaround. When you partner with Shinetech, you will work with the highest-quality development talent and project managers.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p class="text-left">
                                Over the years Shinetech has successfully completed a wide range of development projects in the finance, manufacturing, healthcare, government, education, e-commerce and retail sectors. This industry experience, combined with our expertise in the latest
                                technologies, enables us to successfully adapt to our clients' diverse needs and makes Shinetech the best choice for offshore outsourcing company.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row common-bg Technologies-r2-bg" style="background-image: url({{ asset('imgs/contact-us-bg.png')}}">
                <div class="container Technologies-r2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <h2><span>Shinetech in Australia</span></h2>
                            <p style="font-size:18px;">Shinetech served its first Australian client in 2006 and the cooperation last 2 years. To date, we have collaborated with more than 200 companies from Australia and New Zealand. In 2015, Shinetech officially launched office in Sydney to better serve the local customers with well managed outsourcing.</p>

                            <p style="font-size:18px;">With the local talents and colleagues from different culture background, Shinetech provides highly responsive services through meaningful communication and transparent working process, which increasing efficiency and consistency of project results and ultimately bringing value to your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row common-bg cp-r3-bg">
                <div class="container wrapper cp-r3">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>FAST FACTS ON SHINETECH:</h4></div>
                    </div>
                    <div class="row img-box">
                        <div class="col-xs-6 col-sm-3">
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts1.png') }}" alt="Shinetech fast facts " class="img-responsive">
                            </p>
                            <p class="text-center ts1">
                                <img src="{{ asset('imgs/fast-facts/fast-facts2.png') }}" alt="Shinetech fast facts" class="img-responsive">
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts3.png') }}" alt="Shinetech fast facts" class="img-responsive">
                            </p>
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts4.png') }}" alt="Shinetech fast facts" class="img-responsive">
                            </p>
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts5.png') }}" alt="Shinetech fast facts" class="img-responsive">
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts6.png') }}" alt="Shinetech fast facts" class="img-responsive">
                            </p>
                            <p class="text-center ts2">
                                <img src="{{ asset('imgs/fast-facts/fast-facts7.png') }}" alt="Shinetech fast facts" class="img-responsive">
                                <img src="{{ asset('imgs/fast-facts/fast-facts8.png') }}" alt="Shinetech fast facts" class="img-responsive">
                                <img src="{{ asset('imgs/fast-facts/fast-facts9.png') }}" alt="Shinetech fast facts" class="img-responsive">
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts10.png') }}" alt="" class="img-responsive">
                            </p>
                            <p class="text-center">
                                <img src="{{ asset('imgs/fast-facts/fast-facts11.png') }}" alt="" class="img-responsive">
                            </p>
                            <p class="text-center ts3">
                                <img src="{{ asset('imgs/fast-facts/fast-facts12.png') }}" alt="" class="img-responsive">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start -->
        <div class="footer-push"></div>
    </div>

    <!-- footer start -->
    @include('footer')
</div>

@stop
