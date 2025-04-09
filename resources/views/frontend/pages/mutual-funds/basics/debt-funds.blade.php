@extends('frontend.layouts.master')
@section('title','MAC Capital - Debt Funds')
@section('description', ' Equity Funds are special investment plans that help you save money for your life after retirement.')
@section('keywords', 'Finance, SIP (Systematic Investment Plan), Lump Sum Investment, Direct Investment, Types of Mutual Funds, Through a Mobile App or Online Platform')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/Debt-Funds.png');
$title="Debt Funds";
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
                                <!-- <h1 class="title">Debt Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Debt Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Debt funds are a type of mutual fund that invests your money in safer options like bonds, government securities, or fixed deposits. These funds aim to give you steady returns with lower risk compared to equity funds.
                                </p>
                                <div class="way-to-invest-mutual">
                                    <div class="investment-options">
                                        <div class="how-do-they-work">
                                            <h3>How Do They Work</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>When you invest in a debt fund, your money is used to buy bonds or loans from companies or the government.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>These bonds pay you interest over time.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Your money grows slowly but steadily as the interest is paid to you.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="why-choose-debt-funds">
                                            <h3>Why Choose Debt Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Safer Investment</a>
                                                    </h3>
                                                    <p>Debt funds are less risky than equity funds because they invest in stable, low-risk options.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Steady Returns</a>
                                                    </h3>
                                                    <p>You can expect regular interest payments and moderate returns.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Good for Short-Term Goals</a>
                                                    </h3>
                                                    <p>Best if you need your money within a few years, like saving for a vacation or an emergency fund.</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Types of Debt Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Short-Term Debt Funds</a>
                                                    </h3>
                                                    <p>Invest in bonds with a short time frame. Low risk and stable returns.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Long-Term Debt Funds</a>
                                                    </h3>
                                                    <p>Invest in bonds with a longer time frame. Slightly higher risk but better returns.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Government Bond Funds</a>
                                                    </h3>
                                                    <p>Invest only in government bonds, which are very safe. Ideal for conservative investors.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Corporate Bond Funds</a>
                                                    </h3>
                                                    <p>Invest in bonds issued by companies. Higher risk, but can give higher returns than government bonds.</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Who Should Invest in Debt Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>People who want low risk and steady returns.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Those looking to save for short-term goals or build an emergency fund.</p>
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