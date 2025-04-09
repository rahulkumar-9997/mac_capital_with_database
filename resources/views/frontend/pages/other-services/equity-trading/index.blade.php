@extends('frontend.layouts.master')
@section('title','MAC Capital - Equity Trading')
@section('description', ' Equity Trading means buying and selling shares (or stocks) of companies in the stock market. When you buy a share, you own a small part of that company.')
@section('keywords', 'What is Equity Trading, How Does Equity Trading Work, Types of Equity Trading, Why Trade in Equities, Things to Remember, Equity Trading')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/equity-trading.jpg');
$title="Equity Trading";
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
                                <!-- <h1 class="title">Reasons to Invest</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Reasons to Invest">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Equity Trading means buying and selling shares (or stocks) of companies in the stock market. When you buy a share, you own a small part of that company. The goal of equity trading is to earn money by selling shares at a higher price than what you paid.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>
                                        How Does Equity Trading Work ?
                                    </h3>
                                    
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                You buy shares of a company listed on the stock market.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                If the company grows or performs well, the share price increases.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                You can sell the shares later to earn a profit.
                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        You can also earn money through dividends, which are a part of the company’s profit shared with its shareholders.
                                    </p>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Types of Equity Trading
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Intraday Trading</a>
                                            </h3>
                                            <p>
                                                Buying and selling shares within the same day.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Delivery Trading</a>
                                            </h3>
                                            <p>
                                                Buying shares and keeping them for a long time to earn profits in the future.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                    Why Trade in Equities?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                To grow your wealth over time.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To benefit from the company’s success.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To diversify your investments.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                    Things to Remember
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                Stock prices can go up or down, so there is some risk.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Research the companies before investing.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Use a trading account to buy and sell shares.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                Equity trading is a popular way to grow your money, but it’s important to understand the risks and invest wisely!
                                </p>
                                <div class="theme_btn_all color_one enquiry-now">
                                    <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>

                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.pages.other-services.equity-trading.common.equity-trading-submenu')
        </div>
    </div>
</div>
@endsection