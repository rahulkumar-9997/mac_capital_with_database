@extends('frontend.layouts.master')
@section('title','MAC Capital - Hybrid Fund')
@section('description', 'A hybrid fund is a type of mutual fund that invests in both stocks (equity) and bonds (debt).')
@section('keywords', 'Finance, Hybrid Fund, How Do Hybrid Funds Work', 'Key Features of Hybrid Funds')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/type-of-mutual-funds/Hybrid Fund.png');
$title="Hybrid Fund";
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
                                <!-- <h1 class="title">What are Arbitrage Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="What are Arbitrage Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    A hybrid fund is a type of mutual fund that invests in both stocks (equity) and bonds (debt). The idea behind a hybrid fund is to balance the risk and return by combining the potential for growth from stocks and the stability from bonds.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>How Do Hybrid Funds Work?</h3>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Equity</a>
                                            </h3>
                                            <p>The fund invests a part of your money in stocks, which can grow your wealth over time.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Debt</a>
                                            </h3>
                                            <p>The fund also invests in bonds, which give you stable, regular returns with lower risk.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Key Features of Hybrid Funds</h3>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Balanced Risk</a>
                                            </h3>
                                            <p>Since they invest in both stocks and bonds, they provide a mix of higher returns and lower risk.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Diversification</a>
                                            </h3>
                                            <p>Your money is spread across different types of investments, which reduces the overall risk.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Suitable for Medium-Term Goals</a>
                                            </h3>
                                            <p>These funds are ideal if you want a balance between risk and return and are planning to invest for a few years.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Who Should Invest in Hybrid Funds?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>People looking for balanced returns with moderate risk.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Investors who want to combine growth with stability.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Those who are not sure about investing only in stocks or only in bonds.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>A hybrid fund is a good choice if you want your money to grow but don't want to take too much risk. It helps you enjoy the benefits of both stocks and bonds, giving you the potential for higher returns while managing risk.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Hybrid funds are an easy way to get a mix of both growth and safety in your investments!</p>
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
            @include('frontend.pages.mutual-funds.common.type-of-mutual-funds-menu')
        </div>
    </div>
</div>
@endsection