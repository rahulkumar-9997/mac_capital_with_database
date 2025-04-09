@extends('frontend.layouts.master')
@section('title','MAC Capital - Equity Funds')
@section('description', ' Equity Funds are special investment plans that help you save money for your life after retirement.')
@section('keywords', 'Finance, SIP (Systematic Investment Plan), Lump Sum Investment, Direct Investment, Types of Mutual Funds, Through a Mobile App or Online Platform')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/Equity-Funds.png');
$title="Equity Funds";
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
                                <!-- <h1 class="title"> Equity Funds</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{$image}}" class="wp-post-image" alt=" Equity Funds">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    Equity funds are a type of mutual fund that invests your money in company shares (stocks). The goal is to grow your money as the value of these shares increases over time.
                                </p>
                                <div class="way-to-invest-mutual">
                                    <div class="investment-options">
                                        <div class="how-do-they-work">
                                            <h3>How Do They Work (Equity Funds)</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>When you invest in an equity fund, your money is pooled with money from other investors.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>A fund manager uses this money to buy shares of different companies.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>If the value of these shares goes up, your money grows.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="how-do-they-work">
                                            <h3>How Do They Work (Retirement Mutual Funds)</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>You invest regularly in a retirement mutual fund while you are earning.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>The fund grows over time as the money is invested.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>When you retire, you can withdraw the money in parts or as a lump sum to meet your expenses.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="why-choose-equity">
                                            <h3>Why Choose Equity Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Higher Returns</a>
                                                    </h3>
                                                    <p>Equity funds can give higher returns compared to other types of mutual funds or savings accounts.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Long-Term Growth</a>
                                                    </h3>
                                                    <p>Best for long-term goals like retirement or buying a home.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Professional Management</a>
                                                    </h3>
                                                    <p>Experts handle the investments for you.</p>
                                                </div>
                                            </div>

                                            <h3>Types of Equity Funds</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Large-Cap Funds</a>
                                                    </h3>
                                                    <p>
                                                        Invest in big, well-known companies.
                                                        <br>
                                                        Safer and less risky.
                                                        <p />
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Mid-Cap Funds</a>
                                                    </h3>
                                                    <p>Invest in medium-sized companies. More risk but higher growth potential.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Small-Cap Funds</a>
                                                    </h3>
                                                    <p>Invest in small companies. High risk but can give very high returns.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">Sector Funds</a>
                                                    </h3>
                                                    <p>Focus on a specific industry, like IT, healthcare, or banking. Risky but rewarding if the sector grows.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <h3>
                                                        <a href="#" target="_blank" rel="nofollow">ELSS (Equity Linked Savings Scheme)</a>
                                                    </h3>
                                                    <p>Helps save tax and grow wealth. Lock-in period of 3 years.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="who-should-invest">
                                            <h3>Who Should Invest in Equity Funds?</h3>
                                            <div class="content_box_cn style_one">
                                                <div class="txt_content">
                                                    <p>People looking for higher returns and willing to take some risk.</p>
                                                </div>
                                                <div class="txt_content">
                                                    <p>Investors saving for long-term goals like education, marriage, or retirement.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="theme_btn_all color_one enquiry-now">
                                            <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.pages.mutual-funds.common.basics-of-mutual-funds-menu')
        </div>
    </div>
</div>
@endsection