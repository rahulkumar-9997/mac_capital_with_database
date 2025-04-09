@extends('frontend.layouts.master')
@section('title','MAC Capital - Mutual Funds Tools')
@section('description', ' Mutual Fund Tools are online calculators or guides that help you plan and manage your mutual fund investments.')
@section('keywords', 'Finance, Mutual Funds Tools, Types of Mutual Fund Tools, SIP Calculator, SWP Calculator, Why Use Mutual Fund Tools')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/mutual-fund-tools/Mutual-Funds-Tools.png');
$title="Mutual Funds Tools";
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
                        <!-- <h1 class="title">Mutual Funds Tools</h1> -->
                        <div class="pd_bottom_10"></div>
                        <div class="blog_feature_image">
                           <img src="{{$image}}" class="wp-post-image" alt="Mutual Funds Tools">
                        </div>
                        <div class="pd_bottom_20"></div>
                        <p>
                           Mutual Fund Tools are online calculators or guides that help you plan and manage your mutual fund investments. They make it easy to understand how your money can grow and help you make better financial decisions.
                        </p>
                        <div class="why-choose-mutual">
                           <h3>
                              Types of Mutual Fund Tools
                           </h3>
                           <div class="content_box_cn style_one">
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">SIP Calculator :</a>
                                 </h3>
                                 <p>
                                    Helps you calculate the future value of your regular investments.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Lumpsum Calculator : </a>
                                 </h3>
                                 <p>
                                    Estimates the growth of a one-time investment.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">SWP Calculator :</a>
                                 </h3>
                                 <p>
                                    Shows how long your money will last with regular withdrawals.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">STP Calculator :</a>
                                 </h3>
                                 <p>
                                    Helps plan systematic transfers between funds.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Risk Profiler :</a>
                                 </h3>
                                 <p>
                                    Helps you understand your risk-taking ability before investing.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Goal Planner :</a>
                                 </h3>
                                 <p>
                                    Assists in calculating how much to invest to achieve specific financial goals like buying a house or saving for education.
                                 </p>
                              </div>
                           </div>
                        </div>

                        <div class="types-of-mutual-funds">
                           <h3>
                              Why Use Mutual Fund Tools ?
                           </h3>
                           <div class="content_box_cn style_one">
                              <div class="txt_content">
                                 
                                 <p>
                                    To plan your investments smartly.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <p>
                                    To estimate your returns easily.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <p>
                                    To make informed decisions without needing advanced knowledge of finance.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 
                                 <p>
                                    Mutual Fund Tools are like a personal guide for your financial journey. They make investing simple, clear, and stress-free!
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