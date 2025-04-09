@extends('frontend.layouts.master')
@section('title','MAC Capital - Lumpsum Calculator')
@section('description', 'A Lumpsum Calculator is a tool that helps you estimate how much money your one-time investment (lumpsum) in a Mutual Fund can grow over time.')
@section('keywords', 'Finance, Lumpsum Calculator, Benefits of Arbitrage Funds', 'Who Should Invest in Arbitrage Funds')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/mutual-fund-tools/Lumpsum-Calculator.png');
$title="Lumpsum Calculator";
@endphp
<div class="page_header_default style_one ">
    
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            <h1>{{$title}}</h1>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="{{URL::to('/')}}">Home</a> </li>
                     <li class="active">Basics of Mutual Funds</li>
                  </ul>
               </div>
            </div> -->
            </div>
        </div>
    </div>
</div>
<div id="content" class="site-content left-sidebar">
    <div class="auto-container">
        <div class="row default_row">
            <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <main id="main" class="site-main" role="main">
                    <div class="pd_top_85 mo_pd_top"></div>
                    <article class="clearfix service type-service status-publish has-post-thumbnail hentry">
                        <div class="title_all_box style_one dark_color basic-of">
                            <div class="title_sections left">
                                <!-- <h1 class="title">Lumpsum Calculator</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Lumpsum Calculator">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    A Lumpsum Calculator is a tool that helps you estimate how much money your one-time investment (lumpsum) in a Mutual Fund can grow over time. It is very easy to use and saves you from doing complex calculations.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>How Does It Work ?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Investment Amount
                                                </a>
                                            </h3>
                                            <p>
                                                How much money you are investing in one go.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Expected Rate of Return
                                                </a>
                                            </h3>
                                            <p>
                                                The percentage of returns you think your investment will earn.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Investment Time Period
                                                </a>
                                            </h3>
                                            <p>
                                                How many years you plan to keep your money invested.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                The calculator will then show you how much your investment can grow by the end of the chosen period.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>Why Use a Lumpsum Calculator</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                It helps you plan your investments better.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                You can see how much wealth you can create over time.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                            It shows you the effect of different return rates or time periods on your investment.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                If you invest ₹1,00,000 for 10 years at an expected return rate of 10%, the calculator will show you that your investment could grow to ₹2,59,000 by the end of 10 years.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                A Lumpsum Calculator makes it easy to plan your financial goals and see the power of investing over time!.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="theme_btn_all color_one enquiry-now">
                                    <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>

                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.pages.mutual-funds.common.mutual-fund-tools-menu')
        </div>
    </div>
</div>
@endsection