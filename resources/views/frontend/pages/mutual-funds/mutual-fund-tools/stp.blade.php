@extends('frontend.layouts.master')
@section('title','MAC Capital - STP Calculator')
@section('description', 'An STP Calculator is a tool that helps you plan your Systematic Transfer Plan (STP) in Mutual Funds.')
@section('keywords', 'Finance, STP Calculator, Why Use an SIP Calculator, Who Should Use an SIP Calculator')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/mutual-fund-tools/STP-Calculator.png');
$title="STP Calculator";
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
                                <!-- <h1 class="title">STP Calculator</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt="STP Calculator">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    An STP Calculator is a tool that helps you plan your Systematic Transfer Plan (STP) in Mutual Funds. STP is a method where you transfer a fixed amount of money regularly from one Mutual Fund to another. The calculator shows you how much money will grow during the transfer process.
                                </p>
                                <div class="why-choose-mutual">
                                    <h3>How Does It Work?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Initial Investment
                                                </a>
                                            </h3>
                                            <p>
                                                The amount of money you want to start with.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Transfer Amount
                                                </a>
                                            </h3>
                                            <p>
                                                The fixed amount you want to transfer regularly.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Transfer Period
                                                </a>
                                            </h3>
                                            <p>
                                                How long you want the transfers to happen.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Rate of Return
                                                </a>
                                            </h3>
                                            <p>
                                                The expected return on the remaining balance in the source fund.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>The Calculator Will Show You:</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Final Amount
                                                </a>
                                            </h3>
                                            <p>
                                                How much money you’ll have at the end of the transfer period.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Total Returns
                                                </a>
                                            </h3>
                                            <p>
                                                The total returns earned during the process.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Why Use an STP Calculator?</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Better Planning
                                                </a>
                                            </h3>
                                            <p>
                                                To plan your transfers better between funds.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Know Remaining Balance
                                                </a>
                                            </h3>
                                            <p>
                                                To know how much money will remain in the source fund while it earns returns.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    Smarter Decisions
                                                </a>
                                            </h3>
                                            <p>
                                                To help you make smarter investment decisions.
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Example</h3>
                                    <div class="content_box_cn style_one">
                                        <div class="txt_content">
                                            <h3>
                                                <a href="#" target="_blank" rel="nofollow">
                                                    ₹1,00,000 Investment and ₹5,000 Transfers
                                                </a>
                                            </h3>
                                            <p>
                                                If you invest ₹1,00,000 in a debt fund and transfer ₹5,000 every month to an equity fund for 20 months with a return rate of 8%, the STP Calculator will show you the remaining balance in the debt fund and how much your total returns will be.
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