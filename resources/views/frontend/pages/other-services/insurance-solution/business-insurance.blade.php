@extends('frontend.layouts.master')
@section('title','MAC Capital - Business Insurance')
@section('description', 'Business insurance is designed to protect your business from unexpected financial losses caused by')
@section('keywords', 'Business Insurance, How to Choose the Right Insurance, What is an Insurance Solution, Types of Mutual Fund Tools,Types of Insurance Solutions, Insurance Solution')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/insurance-solution/business-insurance.jpg');
$title="Business Insurance";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Business Insurance">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                Business insurance is designed to protect your business from unexpected financial losses caused by risks like property damage, legal liabilities, or employee-related issues. It acts as a safety net, ensuring that your business operations remain stable even during challenging times.
                                </p>
                                <p>
                                This type of insurance can cover a wide range of needs, including protection for physical assets like buildings and equipment, liability coverage for third-party claims, and even coverage for business interruptions due to unforeseen events. With customized policies, you can choose the right plan that fits the unique requirements of your business.
                                </p>
                                <p>
                                Business insurance not only safeguards your investment but also builds trust and credibility with clients and stakeholders, showing them that your business is prepared for uncertainties. It’s a crucial step toward ensuring long-term success and growth.
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