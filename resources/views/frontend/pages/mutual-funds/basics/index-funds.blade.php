@extends('frontend.layouts.master')
@section('title','MAC Capital - Index Fundss')
@section('description', 'Index funds are a type of mutual fund that invests your money in a specific group of stocks or indexes.')
@section('keywords', 'How Do They Work (Index Funds), Why Choose Index Funds, Types of Index Funds, Who Should Invest in Index Funds')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/Index-Funds.png');
$title="Index Funds";
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
                                <!-- <h1 class="title">Index Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Debt Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Index funds are a type of mutual fund that invests your money in a specific group of stocks or indexes. These stocks represent a part of the market, like a set of the biggest companies or top-performing industries.
                                </p>
                                <div class="index-fund">
                                    <div class="investment-options">
                                        <div class="who-should-invest">
                                            <h3>How Do They Work (Index Funds)?</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Performance Tracking</a>
                                                    </h3>
                                                    <p>An index fund tries to match the performance of a specific market index, like the Nifty 50 or Sensex.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Index-Based Investments</a>
                                                    </h3>
                                                    <p>Instead of picking individual stocks, the fund buys shares that are part of the index.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Market-Driven Growth</a>
                                                    </h3>
                                                    <p>If the companies in the index do well, the value of your fund goes up. If they don’t do well, the value can go down.</p>
                                                </div>
                                            </div>

                                            <h3>Why Choose Index Funds?</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Low Cost</a>
                                                    </h3>
                                                    <p>Index funds usually have lower fees compared to other mutual funds because they don't need active management.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Simple and Easy</a>
                                                    </h3>
                                                    <p>They automatically track the market, so you don’t need to pick individual stocks.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Diversification</a>
                                                    </h3>
                                                    <p>You invest in many companies at once, which reduces risk.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Long-Term Growth</a>
                                                    </h3>
                                                    <p>Good for growing your money over many years.</p>
                                                </div>
                                            </div>

                                            <h3>Types of Index Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Stock Index Funds</a>
                                                    </h3>
                                                    <p>
                                                        Track stock market indexes, like Nifty 50 or Sensex.
                                                        <br>Invest in shares of large companies.
                                                    </p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Bond Index Funds</a>
                                                    </h3>
                                                    <p>
                                                        Track bond indexes.
                                                        <br>Invest in government or corporate bonds.
                                                    </p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">International Index Funds</a>
                                                    </h3>
                                                    <p>
                                                        Invest in global indexes.
                                                        <br>Expose your money to international markets.
                                                    </p>
                                                </div>
                                            </div>

                                            <h3>Who Should Invest in Index Funds?</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Low-Cost Investing</a>
                                                    </h3>
                                                    <p>Investors who want simple, low-cost investing.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Long-Term Growth</a>
                                                    </h3>
                                                    <p>Those who want long-term growth and don’t want to actively manage their investments.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="theme_btn_all color_one enquiry-now">
                                            <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.pages.mutual-funds.common.basics-of-mutual-funds-menu')
        </div>
    </div>
</div>
@endsection