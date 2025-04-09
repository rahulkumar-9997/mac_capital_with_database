@extends('frontend.layouts.master')
@section('title','MAC Capital - Retirement Mutual Funds')
@section('description', 'Retirement mutual funds are special investment plans that help you save money for your life after retirement.')
@section('keywords', 'Finance, SIP (Systematic Investment Plan), Lump Sum Investment, Direct Investment, Types of Mutual Funds, Through a Mobile App or Online Platform')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/Retirement-Mutual-Funds.png');
$title="Retirement Mutual Funds";
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
                                <!-- <h1 class="title">Retirement Mutual Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Retirement Mutual Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Retirement mutual funds are special investment plans that help you save money for your life after retirement.
                                </p>
                                <div class="way-to-invest-mutual">
                                    <div class="investment-options">
                                        <div class="investment-option">
                                            <ul>
                                                <li>They invest your money in shares, bonds, or a mix of both.</li>
                                                <li>The goal is to grow your savings so you have enough money when you stop working.</li>

                                            </ul>
                                        </div>
                                        <div class="who-should-invest">
                                            <h3>How Do They Work</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>You invest regularly in a retirement mutual fund while you are earning.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>The fund grows over time as the money is invested.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>When you retire, you can withdraw the money in parts or as a lump sum to meet your expenses.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Why Choose Retirement Mutual Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Long-Term Growth</a>
                                                    </h3>
                                                    <p>They are designed to grow your money over many years.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Regular Income</a>
                                                    </h3>
                                                    <p>After retirement, they can give you a steady income.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Easy to Start</a>
                                                    </h3>
                                                    <p>You can begin with small investments.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Professional Help</a>
                                                    </h3>
                                                    <p>Experts manage your money to ensure good returns.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="who-should-invest">
                                            <h3>Benefits of Retirement Mutual Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Financial Security</a>
                                                    </h3>
                                                    <p>You can live comfortably without worrying about money after retirement.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Disciplined Savings</a>
                                                    </h3>
                                                    <p>Helps you save regularly for your future.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Tax Benefits</a>
                                                    </h3>
                                                    <p>Some funds offer tax savings under Section 80C.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="who-should-invest">
                                            <h3>Types of Retirement Mutual Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Equity-Based Funds</a>
                                                    </h3>
                                                    <p>Invest more in shares for higher returns. Good for young investors.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Debt-Based Funds</a>
                                                    </h3>
                                                    <p>Invest more in safer options like bonds. Suitable for older investors.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Balanced Funds</a>
                                                    </h3>
                                                    <p>A mix of both shares and bonds, offering moderate risk and returns.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="who-should-invest">
                                            <h3>Who Should Invest in Retirement Mutual Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>Anyone who wants to save for their future and avoid money troubles after retirement.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>People looking for a simple way to build a retirement fund.</p>
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