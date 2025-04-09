@extends('frontend.layouts.master')
@section('title','MAC Capital - Car Loan')
@section('description', 'A car loan is money borrowed from a bank or financial institution to buy a new or used car')
@section('keywords', 'What Are Loans, How Do Loans Work, Types of Loans, Why Do People Take Loans, Car Loan')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/loans/Car-Loan.jpg');
$title="Car Loan";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Car Loan">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                A car loan is money borrowed from a bank or financial institution to buy a new or used car. The loan amount is repaid in monthly installments over a fixed period, along with interest. The car you purchase serves as collateral for the loan, which means the lender can take possession of the car if you fail to repay the loan.
                                </p>
                                <p>
                                Car loans usually come with fixed interest rates, so your monthly payments remain the same throughout the loan term. The loan amount, interest rate, and repayment period depend on factors like your income, credit score, and the price of the car.
                                </p>
                                <p>
                                Before taking a car loan, it’s important to compare offers from different lenders to find the best interest rates and terms. Make sure the monthly installments fit your budget to avoid financial stress. A car loan is a convenient way to own a car without paying the full amount upfront, but careful planning ensures smooth repayment.
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