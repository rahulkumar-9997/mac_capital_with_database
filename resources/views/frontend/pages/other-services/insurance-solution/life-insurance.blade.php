@extends('frontend.layouts.master')
@section('title','MAC Capital - Life Insurance')
@section('description', 'Life insurance is a financial safety net that provides long-term security for your family.')
@section('keywords', 'Life Insurance, How to Choose the Right Insurance, What is an Insurance Solution, Types of Mutual Fund Tools,Types of Insurance Solutions, Why Do You Need an Insurance Solution, Insurance Solution')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/insurance-solution/life-insurance.jpg');
$title="Life Insurance";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Life Insurance">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                Life insurance is a financial safety net that provides long-term security for your family. It ensures that in the event of your untimely demise, your loved ones receive a payout to manage their expenses and maintain their lifestyle without financial worries.
                                </p>
                                <p>
                                Unlike term insurance, life insurance not only offers protection but can also help you save and grow your wealth over time. Some plans come with maturity benefits, allowing you to receive a lump sum amount at the end of the policy term. This can be used for future goals like children’s education, marriage, or retirement planning.
                                </p>
                                <p>
                                Life insurance also offers flexibility, as you can choose from different types of plans such as whole life, endowment, or unit-linked insurance, depending on your needs. It’s a practical way to secure your family’s future while building financial stability for yourself.
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