@extends('frontend.layouts.master')
@section('title','MAC Capital - ELSS Fund – Tax Saving Mutual Fund')
@section('description', 'ELSS Fund – Tax Saving Mutual Fund are a type of mutual fund that invests only in one specific sector or industry.')
@section('keywords', 'Finance, Key Features of Sectoral Mutual Funds, Benefits of ELSS Fund – Tax Saving Mutual Fund, Who Should Invest')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/type-of-mutual-funds/Tax-Saving-Mutual-Fund.png');
$title="ELSS Fund – Tax Saving Mutual Fund";
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
                                <!-- <h1 class="title">ELSS Fund – Tax Saving Mutual Fund</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="ELSS Fund – Tax Saving Mutual Fund">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    <strong>
                                        ELSS, or Equity Linked Savings Scheme, is a mutual fund that helps you save
                                    </strong>
                                    taxes while growing your money. It primarily invests in stocks, which can offer higher returns but come with some risk.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>Key Features of ELSS Funds</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Tax Saving</a>
                                            </h3>
                                            <p>ELSS allows you to reduce your taxable income under Section 80C of the Income Tax Act.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Short Lock-in Period</a>
                                            </h3>
                                            <p>These funds have a lock-in period of a few years, meaning you cannot withdraw your money during that time.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Potential for Higher Returns</a>
                                            </h3>
                                            <p>Since ELSS funds invest in stocks, they have the potential to grow your money more than traditional tax-saving options.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Diversification</a>
                                            </h3>
                                            <p>ELSS funds spread your money across different industries, which can help balance the risks.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Benefits of ELSS Funds</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Save Taxes and Grow Wealth</a>
                                            </h3>
                                            <p>ELSS offers the dual benefit of tax savings and wealth creation.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Easy to Start</a>
                                            </h3>
                                            <p>You can begin investing in ELSS with a small amount.</p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Investment Flexibility</a>
                                            </h3>
                                            <p>You can invest all at once or in small amounts regularly through SIPs (Systematic Investment Plans).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Who Should Invest in ELSS?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>Those looking to save on taxes.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Investors aiming for long-term financial growth.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>Individuals who are comfortable with stock market risks.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>When you invest in an ELSS fund, you can save on taxes while giving your money a chance to grow. Over time, depending on market performance, your investment can help you reach financial goals like buying a home or funding education.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-mutual">
                                    <h3>Things to Keep in Mind</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>ELSS funds are linked to the stock market, so returns may vary.</p>
                                        </div>
                                        <div class="txt_content">
                                            <p>It’s important to choose a fund that matches your financial goals and risk tolerance.</p>
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