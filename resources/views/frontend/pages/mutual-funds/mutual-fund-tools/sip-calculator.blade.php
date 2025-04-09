@extends('frontend.layouts.master')
@section('title','MAC Capital - SIP Calculator')
@section('description', 'An SIP Calculator is a simple tool that helps you figure out how much money you can save and grow by investing in a Systematic Investment Plan (SIP).')
@section('keywords', 'Finance, SIP Calculator, Why Use an SIP Calculator, Who Should Use an SIP Calculator')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/mutual-fund-tools/SIP-Calculator.png');
$title="SIP Calculator";
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
                                <!-- <h1 class="title">SIP Calculator</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="SIP Calculator">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    An SIP Calculator is a simple tool that helps you figure out how much money you can save and grow by investing in a Systematic Investment Plan (SIP). It shows how small, regular investments can turn into a big amount over time.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>How Does an SIP Calculator Work?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Enter the Monthly Investment Amount
                                                </a>
                                            </h3>
                                            <p>
                                                How much you plan to invest every month.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Enter the Expected Return Rate
                                                </a>
                                            </h3>
                                            <p>
                                                The percentage of growth you expect from the mutual fund.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Enter the Investment Period
                                                </a>
                                            </h3>
                                            <p>
                                                The number of years you want to invest for.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Total Investment
                                                </a>
                                            </h3>
                                            <p>
                                                How much you will invest in total.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Estimated Returns
                                                </a>
                                            </h3>
                                            <p>
                                                How much money your investment could earn.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Final Amount
                                                </a>
                                            </h3>
                                            <p>
                                                The total amount you will have after the investment period.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Why Use an SIP Calculator?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Easy Planning
                                                </a>
                                            </h3>
                                            <p>
                                                It helps you decide how much to invest based on your financial goals.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Saves Time
                                                </a>
                                            </h3>
                                            <p>
                                                You don’t have to do any complicated math; the tool does it for you.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Clear Picture
                                                </a>
                                            </h3>
                                            <p>
                                                You can see how small investments grow over time with the power of compounding.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    ₹5,000 Monthly Investment
                                                </a>
                                            </h3>
                                            <p>
                                                If you invest ₹5,000 every month for 10 years with an expected return rate of 12%, the SIP calculator will show that you could have around ₹11 lakh at the end of 10 years.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Who Should Use an SIP Calculator?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Beginners
                                                </a>
                                            </h3>
                                            <p>
                                                Anyone planning to start an SIP.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Financial Goal Setters
                                                </a>
                                            </h3>
                                            <p>
                                                Those who want to set financial goals like buying a house, saving for a child’s education, or retirement.
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