@extends('frontend.layouts.master')
@section('title','MAC Capital - SWP Calculator')
@section('description', 'An SWP Calculator is a tool that helps you plan your Systematic Withdrawal Plan (SWP) from a Mutual Fund.')
@section('keywords', 'Finance, SWP Calculator, Why Use an SWP Calculator, The Calculator Will Show You')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/mutual-fund-tools/SWP-Calculator.png');
$title="SWP Calculator";
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
                                <!-- <h1 class="title">SWP Calculator</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="SWP Calculator">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    An SWP Calculator is a tool that helps you plan your Systematic Withdrawal Plan (SWP) from a Mutual Fund. With SWP, you can withdraw a fixed amount of money regularly from your investment while the remaining amount keeps earning returns.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>How Does It Work?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Investment Amount
                                                </a>
                                            </h3>
                                            <p>
                                                The total money you have invested in the Mutual Fund.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Withdrawal Amount
                                                </a>
                                            </h3>
                                            <p>
                                                The amount you want to withdraw regularly (monthly or yearly).
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Rate of Return
                                                </a>
                                            </h3>
                                            <p>
                                                The expected return your fund will earn.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Withdrawal Period
                                                </a>
                                            </h3>
                                            <p>
                                                How long you want to keep withdrawing.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>The Calculator Will Show You:</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Remaining Balance
                                                </a>
                                            </h3>
                                            <p>
                                                How much money you will have after each withdrawal.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Investment Duration
                                                </a>
                                            </h3>
                                            <p>
                                                How long your investment will last.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Total Returns
                                                </a>
                                            </h3>
                                            <p>
                                                The total returns earned during the withdrawal period.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Why Use an SWP Calculator?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Plan Regular Withdrawals
                                                </a>
                                            </h3>
                                            <p>
                                                To plan your regular withdrawals for expenses like retirement or education.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Ensure Money Lasts
                                                </a>
                                            </h3>
                                            <p>
                                                To ensure your money lasts for the desired period.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Track Growth
                                                </a>
                                            </h3>
                                            <p>
                                                To track how much your investment grows even while you withdraw from it.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    ₹10,00,000 Investment and ₹20,000 Withdrawals
                                                </a>
                                            </h3>
                                            <p>
                                                If you have ₹10,00,000 invested in a fund earning 8% annually and withdraw ₹20,000 per month, the SWP Calculator will show you how long your money will last and the total returns earned.
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