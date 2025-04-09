@extends('frontend.layouts.master')
@section('title','MAC Capital - Global Investments')
@section('description', 'Bonds are a type of investment where you lend money to a company, government, or organization for a specific time.')
@section('keywords', 'Global Investments, What Are Global Investments, Why Invest Globally, Types of Global Investments, How to Start Global Investing')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/global-investments.jpg');
$title="Global Investments";
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
                                    Global Investments mean investing in financial markets or companies outside your own country. This allows you to benefit from opportunities in other countries and diversify your investments.
                                </p>
                                
                                <div class="why-choose-mutual">
                                    <h3>
                                        Why Invest Globally?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Diverse Opportunities
                                                </a>
                                            </h3>
                                            <p>
                                                You can invest in top global companies like Apple, Amazon, or Tesla.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Spread Risk
                                                </a>
                                            </h3>
                                            <p>
                                                If one country’s market isn’t performing well, other markets might balance your losses.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Currency Benefits
                                                </a>
                                            </h3>
                                            <p>
                                                Changes in foreign currency values can sometimes increase your returns.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Types of Global Investments
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    International Mutual Funds
                                                </a>
                                            </h3>
                                            <p>
                                                Funds that invest in companies outside your country.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    ETFs (Exchange-Traded Funds)
                                                </a>
                                            </h3>
                                            <p>
                                                These track global markets or industries.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Stocks
                                                </a>
                                            </h3>
                                            <p>
                                                Directly buy shares of foreign companies.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Bonds
                                                </a>
                                            </h3>
                                            <p>
                                                Invest in bonds issued by other countries.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        How to Start Global Investing?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                Open a trading account that allows international investments.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Research global markets and companies.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Choose the type of investment (stocks, funds, or ETFs) that suits your goals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Things to Consider
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                Understand the rules and taxes for investing abroad.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Keep an eye on currency exchange rates.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Be aware of the risks, as international markets can also fluctuate.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Global investments help you grow your wealth by accessing the best opportunities from around the world!
                                </p>
                                
                            </div>
                            <div class="theme_btn_all color_one enquiry-now">
                                <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                            </div>
                        </div>

                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.pages.other-services.global-investment.common.global-investment-submenu')
        </div>
    </div>
</div>
@endsection