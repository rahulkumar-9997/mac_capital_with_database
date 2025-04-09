@extends('frontend.layouts.master')
@section('title','MAC Capital - Term Insurance')
@section('description', 'Term insurance is a simple and affordable way to ensure financial security for your family..')
@section('keywords', 'Term Insurance, How to Choose the Right Insurance, What is an Insurance Solution, Types of Mutual Fund Tools,Types of Insurance Solutions, Why Do You Need an Insurance Solution, Insurance Solution')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/insurance-solution/term-insurance.jpg');
$title="Term Insurance";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Term Insurance">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Term insurance is a simple and affordable way to ensure financial security for your family. It provides a lump sum payout to your loved ones in case of your untimely demise during the policy period. This amount can be used to cover daily expenses, pay off loans, or secure future needs like education or healthcare.
                                </p>
                                <p>
                                    One of the biggest advantages of term insurance is its affordability. It offers high coverage at a lower cost, making it an ideal choice for individuals who want to protect their family’s financial future without straining their budget. You can also enhance your policy with optional add-ons like critical illness cover or accidental death benefits, providing comprehensive protection.
                                </p>
                                <p>
                                    Term insurance ensures that your family remains financially stable and independent, giving you peace of mind and a secure future. It’s a vital step toward planning for life’s uncertainties and safeguarding your loved ones.
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