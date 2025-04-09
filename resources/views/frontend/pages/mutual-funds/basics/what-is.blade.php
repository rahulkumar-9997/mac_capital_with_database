@extends('frontend.layouts.master')
@section('title','MAC Capital - What is a Mutual Fund')
@section('description', ' A mutual fund is a way to invest your money. Many people put their money together.')
@section('keywords', 'Finance, Why Are Mutual Funds Easy, Benefits of Mutual Funds, Why Choose Mutual Funds, Types of Mutual Funds, Who Should Invest in Mutual Funds')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/What-is-a-Mutual-Fund.png');
$title="What is a Mutual Fund";
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
                                <!-- <h1 class="title">What is a Mutual Fund</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="What is a Mutual Fund">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    A mutual fund is a way to grow your money.
                                </p>
                                <p>
                                    Many people put their money together in one fund.
                                </p>
                                <p>
                                    Experts, called <strong>fund managers</strong>, use this money to buy things like <strong>, bonds, or other investments </strong>.
                                </p>
                                <p>
                                    When these investments do well, your money grows too.
                                </p>
                                
                                <div class="why-choose-mutual">
                                    <h3>
                                        Why Are Mutual Funds Easy
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">No Big Knowledge Needed</a>
                                            </h3>
                                            <p>
                                                Experts handle everything.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Start Small</a>
                                            </h3>
                                            <p>
                                                You can invest little amounts, like ₹5000 a month.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Less Risky:</a>
                                            </h3>
                                            <p>
                                                Your money is spread across many investments, so it's safer.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <p>
                                    Mutual funds are great for saving for your future, like retirement, a child’s education, or buying a home!
                                </p>
                                <div class="benefits-of-mutual">
                                    <h3>
                                        Benefits of Mutual Funds
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Professional Management
                                                </a>
                                            </h3>
                                            <p>
                                                Experts take care of your investments.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Diversification
                                                </a>
                                            </h3>
                                            <p>
                                                Your money is invested in many places, reducing risk.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Flexibility
                                                </a>
                                            </h3>
                                            <p>
                                                You can invest a lump sum or small amounts regularly.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Liquidity
                                                </a>
                                            </h3>
                                            <p>
                                                You can withdraw your money when needed.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="who-should-invest">
                                    <h3>
                                        Who Should Invest in Mutual Funds
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                People saving for long-term goals like a child’s marriage, retirement, or a dream house
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Those who want to grow their money without spending time learning about investments.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Anyone looking for a simple, safe, and convenient way to invest
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
            @include('frontend.pages.mutual-funds.common.basics-of-mutual-funds-menu')
        </div>
    </div>
</div>
@endsection