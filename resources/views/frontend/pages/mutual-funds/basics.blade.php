@extends('frontend.layouts.master')
@section('title','MAC Capital - Basics of Mutual Funds')
@section('description', ' A mutual fund is a way to invest your money. Many people put their money together.')
@section('keywords', 'Finance, Basics of Mutual Funds, How It Works, Why Choose Mutual Funds, Types of Mutual Funds, Who Should Invest')

@section('main-content')
@php
$image = asset('fronted/mac-image/mutual-fund/Basics-of-Mutual-Funds.png');
$title="Basics of Mutual Funds";
@endphp
<div class="page_header_default style_one ">
   <!-- <div class="parallax_cover">
      <img src="{{asset('fronted/mac-image/home/bread-1.jpg')}}" alt="Financial Services" class="cover-parallax">
   </div> -->
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
                        <!-- <h1 class="title">Basics of Mutual Funds</h1> -->
                        <div class="pd_bottom_10"></div>
                        <div class="blog_feature_image ">
                           <img src="{{$image}}" class="wp-post-image" alt="Basics of Mutual Funds">
                        </div>
                        <div class="pd_bottom_20"></div>
                        <p>
                           A mutual fund is a way to invest your money. Many people put their money together, and experts called fund managers use it to buy shares, bonds, or other investments.
                        </p>
                        <p>
                           The goal is to grow your money over time.
                        </p>
                        
                        <div class="work-it">
                              <h3>
                                 How It Works
                              </h3>
                           <div class="content_box_cn style_one">
                              <div class="txt_content">
                                 <p>
                                    You invest money in a mutual fund.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <p>
                                    The fund manager invests this money in different places, like company shares or government bonds.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <p>
                                    You earn money if these investments do well.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="why-choose-mutual">
                           <h3>
                              Why Choose Mutual Funds
                           </h3>
                           <div class="content_box_cn style_one">
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Simple to Use:</a>
                                 </h3>
                                 <p>
                                    You don’t need to be an expert.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Start Small:</a>
                                 </h3>
                                 <p>
                                    Begin investing with ₹500 in a SIP (Systematic Investment Plan).
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Less Risky:</a>
                                 </h3>
                                 <p>
                                    Your money is spread across many investments.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Expert Help:</a>
                                 </h3>
                                 <p>
                                    Professionals manage your money.
                                 </p>
                              </div>
                           </div>
                        </div>

                        <div class="types-of-mutual-funds">
                           <h3>
                              Types of Mutual Funds
                           </h3>
                           <div class="content_box_cn style_one">
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Equity Funds:</a>
                                 </h3>
                                 <p>
                                    Invest in company shares. High risk, high returns.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Debt Funds:</a>
                                 </h3>
                                 <p>
                                    Invest in safe options like bonds. Low risk, steady returns.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">Balanced Funds:</a>
                                 </h3>
                                 <p>
                                    A mix of shares and bonds. Medium risk.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <h3>
                                    <a href="#" target="_blank" rel="nofollow">ELSS Funds:</a>
                                 </h3>
                                 <p>
                                    Help you save tax under Section 80C.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="who-should-invest">
                           <h3>
                              Who Should Invest
                           </h3>
                           <div class="content_box_cn style_one">
                              <div class="txt_content">
                                 <p>
                                    People saving for big goals like retirement, a house, or education.
                                 </p>
                              </div>
                              <div class="txt_content">
                                 <p>
                                    Those who want professionals to manage their money.
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
         @include('frontend.pages.mutual-funds.common.basics-of-mutual-funds-menu')
      </div>
   </div>
</div>
@endsection