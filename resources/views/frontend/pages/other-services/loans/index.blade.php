@extends('frontend.layouts.master')
@section('title','MAC Capital - Loans')
@section('description', 'A loan is when you borrow money from a bank, financial institution, or lender with a promise to pay it back later.')
@section('keywords', 'What Are Loans, How Do Loans Work, Types of Loans, Why Do People Take Loans, Things to Remember About Loans')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/loans.jpg');
$title="Loans";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Reasons to Invest">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                A loan is when you borrow money from a bank, financial institution, or lender with a promise to pay it back later. You also pay an extra amount called interest for using the money.
                                </p>
                                
                                <div class="why-choose-mutual">
                                    <h3>
                                        How Do Loans Work?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            
                                            <p>
                                                You apply for a loan when you need money for something like buying a house, starting a business, or education.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            
                                            <p>
                                                The lender gives you the money based on your repayment ability.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            
                                            <p>
                                                You repay the loan in small parts, called EMIs (Equated Monthly Installments), over a fixed period.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Types of Loans
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Personal Loan
                                                </a>
                                            </h3>
                                            <p>
                                                Used for personal needs like weddings, travel, or emergencies.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Home Loan
                                                </a>
                                            </h3>
                                            <p>
                                            To buy or build a house.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Car Loan
                                                </a>
                                            </h3>
                                            <p>
                                            To purchase a vehicle.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Education Loan
                                                </a>
                                            </h3>
                                            <p>
                                                To pay for studies.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Business Loan
                                                </a>
                                            </h3>
                                            <p>
                                                To start or grow a business.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Why Do People Take Loans?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                To afford expensive things like homes or cars.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To manage emergencies or big expenses.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To grow a business or achieve financial goals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                    Things to Remember About Loans
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Interest Rate
                                                </a>
                                            </h3>
                                            <p>
                                                Check how much extra money you need to pay back.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Repayment Period
                                                </a>
                                            </h3>
                                            <p>
                                            Choose a time frame that suits your budget.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Eligibility
                                                </a>
                                            </h3>
                                            <p>
                                                Ensure you meet the bank’s requirements to get a loan.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                Credit Score
                                                </a>
                                            </h3>
                                            <p>
                                                A good credit score increases your chances of getting a loan.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <p>
                                    Loans are helpful for achieving your dreams, but always borrow wisely and repay on time to avoid financial stress!
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