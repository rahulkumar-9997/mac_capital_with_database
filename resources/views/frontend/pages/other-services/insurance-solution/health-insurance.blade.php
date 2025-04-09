@extends('frontend.layouts.master')
@section('title','MAC Capital - Health Insurance')
@section('description', 'Health insurance is a crucial financial tool that helps you manage medical expenses during unexpected health issues.')
@section('keywords', 'Health Insurance, How to Choose the Right Insurance, What is an Insurance Solution, Types of Mutual Fund Tools,Types of Insurance Solutions, Why Do You Need an Insurance Solution, Insurance Solution')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/insurance-solution/health-insurance.jpg');
$title="Health Insurance";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Health Insurance">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                Health insurance is a crucial financial tool that helps you manage medical expenses during unexpected health issues. It provides coverage for hospital bills, doctor consultations, medications, and other healthcare needs, ensuring you don’t have to worry about the financial burden of medical treatment.
                                </p>
                                <p>
                                With health insurance, you gain access to quality medical care without draining your savings. Many policies also offer cashless treatment at network hospitals, making the process even more convenient during emergencies. Additionally, it can cover expenses like preventive health checkups and alternative treatments, depending on the plan you choose.
                                </p>
                                <p>
                                Health insurance not only protects your finances but also encourages regular healthcare, giving you and your family peace of mind and security in times of need. It’s an essential step toward maintaining both your health and your financial stability.
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
            @include('frontend.pages.other-services.insurance-solution.common.insurance-solution-submenu')
        </div>
    </div>
</div>
@endsection