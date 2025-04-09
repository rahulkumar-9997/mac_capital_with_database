@extends('frontend.layouts.master')
@section('title','MAC Capital - Business Loan')
@section('description', 'A business loan is money borrowed from a bank or financial institution to help grow or run your business. It can be used for various purposes')
@section('keywords', 'What Are Loans, How Do Loans Work, Types of Loans, Why Do People Take Loans,   Business Loan')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/loans/Business-Loan.jpg');
$title="Business Loan";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Business Loan">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                A business loan is money borrowed from a bank or financial institution to help grow or run your business. It can be used for various purposes, like purchasing equipment, expanding operations, or covering day-to-day expenses. Business loans are typically repaid in monthly installments with interest.
                                </p>
                                <p>
                                There are different types of business loans, such as secured loans, where you offer an asset (like property) as collateral, and unsecured loans, where no asset is needed. The interest rate and loan amount often depend on the business’s creditworthiness, which is determined by its financial health and credit score.
                                </p>
                                <p>
                                Before applying for a business loan, it’s important to have a clear plan on how you will use the funds and how you will repay the loan. Lenders will also look at your business’s financial history and future prospects to decide if you qualify for the loan. A business loan can help fuel growth, but it’s essential to borrow responsibly and ensure you can meet the repayment terms.
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