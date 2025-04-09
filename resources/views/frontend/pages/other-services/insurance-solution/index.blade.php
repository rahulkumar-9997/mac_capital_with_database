@extends('frontend.layouts.master')
@section('title','MAC Capital - Insurance Solution')
@section('description', 'An Insurance Solution is a financial plan that protects you and your family from unexpected events like accidents, illness, or financial loss.')
@section('keywords', 'How to Choose the Right Insurance, What is an Insurance Solution, Types of Mutual Fund Tools,Types of Insurance Solutions, Why Do You Need an Insurance Solution, Insurance Solution')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/insurance-solution.jpg');
$title="Insurance Solution";
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
                                    An Insurance Solution is a financial plan that protects you and your family from unexpected events like accidents, illness, or financial loss. It ensures you are prepared for emergencies by providing money when you need it the most.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Types of Insurance Solutions
                                    </h3>
                                    <p>
                                        There are different types of insurance plans based on your needs:
                                    </p>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Life Insurance</a>
                                            </h3>
                                            <p>
                                                Protects your family’s financial future if something happens to you.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Health Insurance</a>
                                            </h3>
                                            <p>
                                                Covers medical expenses during illness or hospitalization.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Car Insurance</a>
                                            </h3>
                                            <p>
                                                Provides protection in case of vehicle damage or accidents.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Travel Insurance</a>
                                            </h3>
                                            <p>
                                                Ensures safety during trips by covering emergencies like lost baggage or medical issues.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">Home Insurance</a>
                                            </h3>
                                            <p>
                                                Protects your home from natural disasters, theft, or damage.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        Why Do You Need an Insurance Solution?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                To protect your loved ones financially.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To reduce the burden of unexpected expenses.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To secure your assets like your home or car.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                To ensure peace of mind, knowing you’re covered in emergencies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-choose-mutual">
                                    <h3>
                                        How to Choose the Right Insurance Solution?
                                    </h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <p>
                                                Think about your needs: Are you looking for health, life, or asset protection?
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Compare policies and premiums from different providers.
                                            </p>
                                        </div>
                                        <div class="txt_content">
                                            <p>
                                                Choose a trusted company with good customer reviews.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    An Insurance Solution gives you peace of mind by ensuring you are financially prepared for life’s uncertainties. It’s a smart step towards securing your future!
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