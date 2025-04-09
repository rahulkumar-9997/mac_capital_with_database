@extends('frontend.layouts.master')
@section('title','MAC Capital - Car and Bike Insurance')
@section('description', 'Car and bike insurance provides financial protection for your vehicle against unexpected events like accidents, theft, or natural disasters.')
@section('keywords', ' Car and Bike Insurance, How to Choose the Right Insurance, What is an Insurance Solution, Types of Mutual Fund Tools,Types of Insurance Solutions, Insurance Solution')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/insurance-solution/car-and-bike-insurance.jpg');
$title="Car and Bike Insurance";
@endphp
<div class="page_header_default style_one ">

    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            <h1> {{$title}}</h1>
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
                                    <img src="{{$image}}" class="wp-post-image" alt="car and bike insurance">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                Car and bike insurance provides financial protection for your vehicle against unexpected events like accidents, theft, or natural disasters. It ensures that you’re not burdened with high repair costs or liabilities in case of damage or loss.
                                </p>
                                <p>
                                These policies typically cover damage to your vehicle, third-party liabilities, and personal accident protection for the owner-driver. Some plans also offer additional benefits like roadside assistance and cashless repairs at network garages, making the experience hassle-free.
                                </p>
                                <p>
                                Having car or bike insurance isn’t just about complying with legal requirements; it’s about ensuring peace of mind while you’re on the road. It safeguards your vehicle and finances, helping you drive with confidence every day.
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