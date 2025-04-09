@extends('frontend.layouts.master')
@section('title','MAC Capital - Ways of Investing in Mutual Funds')
@section('description', 'There are a few simple ways to invest in mutual funds. You can choose the one that suits you best.')
@section('keywords', 'Finance, SIP (Systematic Investment Plan), Lump Sum Investment, Direct Investment, Types of Mutual Funds, Through a Mobile App or Online Platform')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/Ways-of-Investing-in-Mutual-Funds.png');
$title="Ways of Investing in Mutual Funds";
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
                                <!-- <h1 class="title">Ways of Investing in Mutual Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Ways of Investing in Mutual Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    There are a few simple ways to invest in mutual funds. You can choose the one that suits you best. Here are the main ways:
                                </p>
                                <div class="way-to-invest-mutual">
                                    <div class="investment-options">
                                        <div class="who-should-invest">
                                            <h3>SIP (Systematic Investment Plan)</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>SIP allows you to invest a fixed amount of money regularly, like ₹500 or ₹1000 each month.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>It’s like setting up a monthly payment plan.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>It helps you invest small amounts consistently and build wealth over time.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Good for long-term goals like retirement or buying a house.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Lump Sum Investment</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>With Lump Sum, you invest a big amount of money all at once.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>This method is best if you have a large amount of money saved up, like a bonus or savings.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>It’s good if you want to invest for a longer period and are comfortable with market risks.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Direct Investment</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>You can invest in mutual funds directly without using any agent or advisor.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>You invest by going to the fund company’s website and choosing the fund you want to invest in.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Direct plans usually have lower fees compared to regular plans, so you keep more of the returns.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Through a Distributor or Advisor</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>If you are new to mutual funds, you can invest through a distributor or financial advisor.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>They help you choose the right mutual fund based on your goals and risk level.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>They might charge you a fee or commission for their services.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Through a Mobile App or Online Platform</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>You can also use apps or online platforms to invest in mutual funds.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Popular apps like Groww, Zerodha, and ET Money allow you to choose and invest in mutual funds easily.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>These apps also provide information and advice to help you make decisions.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Tax-Saving Mutual Funds (ELSS)</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>If you want to save taxes while investing, you can choose ELSS (Equity Linked Savings Scheme).</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>These are mutual funds that allow you to get tax benefits under Section 80C of the Income Tax Act.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>They have a 3-year lock-in period, meaning you can’t withdraw the money for 3 years.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="who-should-invest">
                                            <h3>Which Way is Right for You?</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>SIP is good if you want to invest small amounts regularly.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Lump sum is best if you have a large amount to invest at once.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>If you’re new to mutual funds, getting help from a distributor or advisor can be useful.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Online platforms and apps make it easy to invest at your own pace.</p>
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