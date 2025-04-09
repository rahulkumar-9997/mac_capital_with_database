@extends('frontend.layouts.master')
@section('title','MAC Capital - Liquid Funds')
@section('description', 'Liquid funds are a type of mutual fund that invests in short-term financial instruments like treasury bills, government securities, or certificates of deposit.')
@section('keywords', 'Finance, Benefits of Liquid Funds, Liquid Funds, Who Should Invest in Liquid Funds')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/type-of-mutual-funds/Liquid-Funds.png');
$title="Liquid Funds";
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
                                <!-- <h1 class="title">Liquid Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Liquid Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Liquid funds are a type of mutual fund that invests in short-term financial instruments like treasury bills, government securities, or certificates of deposit. These funds are designed to provide quick access to your money while earning better returns than a regular savings account.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>Key Features of Liquid Funds</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">High Liquidity</a>
                                            </h3>
                                            <p>You can withdraw your money quickly, usually within a day, making them ideal for emergencies.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Low Risk</a>
                                            </h3>
                                            <p>Since they invest in safe and short-term instruments, the risk of losing money is low.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Short Investment Period</a>
                                            </h3>
                                            <p>These funds are suitable for parking money for a few days to a few months.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Benefits of Liquid Funds</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Quick Access</a>
                                            </h3>
                                            <p>You can use them to keep extra cash that you might need soon.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Better Returns</a>
                                            </h3>
                                            <p>They typically offer higher returns than a regular bank account.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Low Investment Risk</a>
                                            </h3>
                                            <p>These funds are less affected by market fluctuations because they invest in stable instruments.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Who Should Invest in Liquid Funds?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>People who want to keep their emergency money safe and easily accessible.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Investors looking for a short-term parking space for extra cash.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Those who want to earn slightly higher returns without taking too much risk.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>If you have extra money that you don’t need right now but might use soon for expenses like a vacation, home repairs, or school fees, you can invest it in a liquid fund. It will earn more than sitting idle in your bank account and will still be available when you need it. Liquid funds are a smart choice for short-term savings with easy access to your money!</p>
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