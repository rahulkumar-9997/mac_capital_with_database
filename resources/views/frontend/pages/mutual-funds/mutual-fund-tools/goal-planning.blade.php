@extends('frontend.layouts.master')
@section('title','MAC Capital - Goal planning')
@section('description', 'An Goal planning is a tool that helps you plan your Systematic Withdrawal Plan (SWP) from a Mutual Fund.')
@section('keywords', 'Finance, Goal planning, Why Use an Goal planning, The Calculator Will Show You')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/mutual-fund-tools/Goal-planning.png');
$title="Goal planning";
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
                                <!-- <h1 class="title">Goal planning</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="Goal planning">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Goal planning means deciding what you want to achieve with your money and creating a plan to reach those goals. It helps you save and invest wisely to fulfil your dreams, whether buying a house, funding your child’s education, or retiring comfortably.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>Why is Goal Planning Important?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Clear Focus
                                                </a>
                                            </h3>
                                            <p>
                                                It gives you a clear idea of where to save or invest your money.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Better Financial Discipline
                                                </a>
                                            </h3>
                                            <p>
                                                You learn to manage your income, expenses, and savings effectively.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Reduces Stress
                                                </a>
                                            </h3>
                                            <p>
                                                When you plan well, you are prepared for future expenses.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Achieve Dreams
                                                </a>
                                            </h3>
                                            <p>
                                                Whether it’s a dream vacation, a car, or a secure future, goal planning helps you reach them.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>How to Do Goal Planning?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Set Your Goals
                                                </a>
                                            </h3>
                                            <p>
                                                Decide what you want, like saving for your child’s education, buying a home, or planning for retirement.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Estimate the Cost
                                                </a>
                                            </h3>
                                            <p>
                                                Find out how much money you’ll need to achieve your goal.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Set a Time Frame
                                                </a>
                                            </h3>
                                            <p>
                                                Decide when you want to achieve the goal—short-term, medium-term, or long-term.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Start Saving and Investing
                                                </a>
                                            </h3>
                                            <p>
                                                Use tools like mutual funds, SIPs, or other investments to grow your money.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Saving ₹10 Lakh in 10 Years
                                                </a>
                                            </h3>
                                            <p>
                                                If you want to save ₹10 lakh for your child’s education in 10 years, you can plan monthly investments through an SIP to achieve this goal without stress.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Conclusion</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Take Control of Your Money
                                                </a>
                                            </h3>
                                            <p>
                                                Goal planning helps you take control of your money and make your dreams a reality. It’s a smart way to ensure you’re prepared for the future while enjoying the present.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme_btn_all color_one enquiry-now">
                                    <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>

                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.pages.mutual-funds.common.mutual-fund-tools-menu')
        </div>
    </div>
</div>
@endsection