@extends('frontend.layouts.master')
@section('title','MAC Capital - Open a Demat Account')
@section('description', 'A Demat account is essential for anyone looking to invest in stocks, bonds, or mutual funds. ')
@section('keywords', 'What is Equity Trading, How Does Equity Trading Work, A Demat account, Why Trade in Equities, Things to Remember, Open a Demat Account')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/equity-trading/Open-a-Demat-Account.jpg');
$title="Open Demat Account";
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
                                    <img src="{{$image}}" class="wp-post-image" alt="Open-a-Demat-Account">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                A <strong>Demat account</strong>  is essential for anyone looking to invest in stocks, bonds, or mutual funds. It holds your financial securities in an electronic form, making buying and selling investments easier and safer.
                                </p>
                                <p>
                                Opening a Demat account allows you to store your shares and other securities digitally, eliminating the need for physical certificates. This makes transactions quicker, more secure, and easier to track. You can open a Demat account with a broker or financial institution, and it usually requires basic documentation like proof of identity and address.
                                </p>
                                <p>
                                Once your Demat account is active, you can start trading and investing in the stock market with ease, keeping all your investments organized in one place. It’s a key step toward becoming an active investor.
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
            @include('frontend.pages.other-services.equity-trading.common.equity-trading-submenu')
        </div>
    </div>
</div>
@endsection