@extends('frontend.layouts.master')
@section('title','MAC Capital - Personal Loan')
@section('description', 'A personal loan is money borrowed from a bank or financial institution that you can use for almost any purpose.')
@section('keywords', 'What Are Loans, How Do Loans Work, Types of Loans, Why Do People Take Loans,   Personal Loan')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/loans/Personal-Loan.jpg');
$title="Personal Loan";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Personal Loan">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                A personal loan is money borrowed from a bank or financial institution that you can use for almost any purpose, like covering medical expenses, funding a wedding, or managing an emergency. Unlike some other loans, a personal loan is usually unsecured, meaning you don’t need to offer any asset as collateral.
                                </p>
                                <p>
                                The loan is repaid in fixed monthly installments over a set period, along with interest. The interest rate and loan amount depend on factors like your credit score, income, and repayment history. Personal loans often have a quicker approval process compared to other loans, making them a convenient option in urgent situations.
                                </p>
                                <p>
                                However, since these loans are unsecured, the interest rates might be higher than secured loans. Before taking a personal loan, it’s important to assess your financial situation and ensure you can repay it on time to avoid additional charges or impact on your credit score. Personal loans are flexible and can provide quick financial relief when used responsibly.
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
            @include('frontend.pages.other-services.loans.common.loans-submenu')
        </div>
    </div>
</div>
@endsection