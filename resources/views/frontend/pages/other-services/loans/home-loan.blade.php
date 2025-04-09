@extends('frontend.layouts.master')
@section('title','MAC Capital -  Home Loan')
@section('description', 'A home loan is money borrowed from a bank or a financial institution to buy a house.')
@section('keywords', 'What Are Loans, How Do Loans Work, Types of Loans, Why Do People Take Loans,  Home Loan')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/loans/Home-Loan.jpg');
$title="Home Loan";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Home Loan">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                A home loan is money borrowed from a bank or a financial institution to buy a house. The loan is repaid in installments over a set period, usually with interest. The house itself serves as collateral, meaning if you fail to repay the loan, the bank can take possession of the house.
                                </p>
                                <p>
                                Home loans typically have fixed or floating interest rates. In a <strong>fixed-rate loan</strong> , the interest rate stays the same throughout the loan term, making it easier to plan your payments. In a  <strong>floating-rate loan</strong> , the interest rate can change depending on market conditions, which may lead to fluctuating monthly payments.
                                </p>
                                <p>
                                Before applying for a home loan, it's important to check your credit score, as it affects the loan amount and interest rate you may receive. You should also evaluate your ability to repay the loan without straining your finances. A home loan is a significant financial commitment, so understanding the terms and conditions is essential for making the right decision.
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