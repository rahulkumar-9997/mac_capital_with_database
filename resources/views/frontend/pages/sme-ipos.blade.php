@extends('frontend.layouts.master')
@section('title','MAC Capital :: Explore SME IPO with Mac Capital')
@section('description', 'We enjoy strategic alliance and close association with many direct investors, hedge funds, private equity funds')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')

@section('main-content')
@php
$image = asset('fronted/mac-image/sme-ipo/hem_sme_ipo.png');
$title="Explore SME IPO with Mac Capital";
@endphp
<!-- <div class="page_header_default style_one ">

   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     <h1>SME IPOs</h1>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</div> -->
<div id="content" class="site-content sme-content">
   <section class="single_banner style_one bg_op_1 sme-ipo" style="background: linear-gradient(to bottom, #4282aa -18%, #021c31 127%);">
      <div class="auto-container">
         <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <!--===============spacing==============-->
               <div class="pd_top_40"></div>
               <!--===============spacing==============-->
               <div class="slider_content light_color">
                  <h6>Explore SME IPO with MAC Capital!</h6>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_10"></div>
                  <!--===============spacing==============-->
                  <h1 class="color_white">What is SME IPO?</h1>
                  <p class="description color_white">
                     An SME IPO (Small and Medium Enterprise Initial Public Offering) offers organizations a chance to enhance their market visibility and use it to their advantage.
                     <br><br>
                     From expanding your business to unlocking equity value and raising significant capital, SME IPOs open up endless possibilities!
                  </p>
                  <div class="theme_btn_all color_one enquiry-now">
                     <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquire Now</a>
                  </div>

               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_40"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-lg-6 hidden-md image_column">
               <div class="slider_image margin_extra_image1">
                  <img src="{{ asset('fronted/mac-image/sme-ipo/hem_sme_ipo.png') }}" class="img-fluid" alt="slider image">
               </div>
            </div>
         </div>
      </div>

   </section>
   <section class="seo_fact_area sec_pad ">
      <div class="home_bubble">
         <div class="bubble b_one"></div>
         <div class="bubble b_three"></div>
         <div class="bubble b_four"></div>
         <div class="bubble b_six"></div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_two text-center dark_color">
                  <div class="title_sections two">
                     <!-- <div class="before_title"> Effective Solutions</div> -->
                     <h2>Key Statistics on SME Listings</h2>
                     <p>At Mac Capital, we help businesses achieve exponential growth through SME IPO listings</p>
                  </div>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <section class="section__counter four_column">
            <div class="grid_show_case grid_layout clearfix">
               <div class="grid_box _card">
                  <div class="counter-block style_one count-box">
                     <div class="icon_box icon_yes">
                        <div class="icon">
                           <span class="fa fa-building"></span>
                        </div>
                        <div class="coun_ter">
                           <span class="count-text" data-speed="4000" data-stop="544"></span>
                           <small>+</small>
                        </div>
                     </div>
                     <div class="content_box">
                        <h6>Companies listed on SME Exchanges</h6>
                        <!-- <p>in fulfilling orders</p> -->
                     </div>
                  </div>
               </div>
               <div class="grid_box _card">
                  <div class="counter-block style_one count-box">
                     <div class="icon_box icon_yes">
                        <div class="icon">
                           <span class="fa fa-building"></span>
                        </div>
                        <div class="coun_ter">
                           <span class="count-text" data-speed="4000" data-stop="191"></span>
                           <small>+</small>
                        </div>
                     </div>
                     <div class="content_box">
                        <h6>Companies migrated to the Main Board</h6>
                        <!-- <p>Business Deals</p> -->
                     </div>
                  </div>
               </div>
               <div class="grid_box _card">
                  <div class="counter-block style_one count-box">
                     <div class="icon_box   icon_yes ">
                        <div class="icon">
                           <span class="fa fa-rupee"></span>
                        </div>
                        <div class="coun_ter">
                           <span class="count-text" data-speed="4000" data-stop="8008"></span>
                           <small>+ crore</small>
                        </div>
                     </div>
                     <div class="content_box">
                        <h6>Total funds raised on the SME platform</h6>
                     </div>
                  </div>
               </div>
               <div class="grid_box _card">
                  <div class="counter-block style_one count-box">
                     <div class="icon_box   icon_yes ">
                        <div class="icon">
                           <span class="fa fa-rupee"></span>
                        </div>
                        <div class="coun_ter">
                           <span class="count-text" data-speed="4000" data-stop="73829"></span>
                           <small>+ crore</small>
                        </div>
                     </div>
                     <div class="content_box">
                        <h6>Market capitalization of listed SMEs</h6>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--===============spacing==============-->

      </div>
   </section>
   <section class="process-section">

      <!--===============spacing==============-->
      <div class="pd_top_40"></div>
      <!--===============spacing==============-->
      <div class="container position-relative">
         <div class="symbols-pulse active">
            <div class="pulse-1"></div>
            <div class="pulse-2"></div>
            <div class="pulse-3"></div>
            <div class="pulse-4"></div>
            <div class="pulse-x"></div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_two text-center dark_color">
                  <div class="title_sections two">
                     <!-- <div class="before_title">The Steps of</div> -->
                     <h2>Benefits of SME IPO Listing</h2>
                     <!-- <p>
                        Keep rising employee health care costs down. An employer's total benefit costs <br> can be
                        as much as 40 percent of the company's operating budget.
                     </p> -->
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_15"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
         <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-0 mb-xl-0">
               <div class="process_box style_three dark_color">
                  <div class="process_box_outer_three left">
                     <div class="icon">
                        <div class="img">
                           <img src="{{asset('fronted/mac-image/sme-ipo/benfits-of-sme-ipo-icon/Boost-Visibility-and-Credibility.png')}}" class="img-fluid svg_image" alt="icon png">
                        </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">Boost Visibility and Credibility</a>
                        </h2>
                        <p>
                           Increase brand value and stakeholder trust.
                        </p>
                     </div>
                     <div class="number">
                        <h6>01</h6>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_10"></div>
               <!--===============spacing==============-->
               <div class="divider_1"></div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
               <div class="process_box style_three dark_color">
                  <div class="process_box_outer_three left">
                     <div class="icon">
                        <div class="img">
                           <img src="{{asset('fronted/mac-image/sme-ipo/benfits-of-sme-ipo-icon/Improved-Banking.png')}}" class="img-fluid svg_image" alt="icon png">
                        </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">
                              Improved Banking Opportunities
                           </a>
                        </h2>
                        <p>
                           Gain better access to banking facilities for growth.
                        </p>
                     </div>
                     <div class="number">
                        <h6> 02</h6>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_10"></div>
               <!--===============spacing==============-->
               <div class="divider_1"></div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
               <div class="process_box style_three dark_color">
                  <div class="process_box_outer_three left">
                     <div class="icon">
                        <div class="img">
                           <img src="{{asset('fronted/mac-image/sme-ipo/benfits-of-sme-ipo-icon/Raise-Funds-for-Expansion.png')}}" class="img-fluid svg_image" alt="icon png">
                        </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">
                              Raise Funds for Expansion
                           </a>
                        </h2>
                        <p>
                           Explore new options to meet your business goals.
                        </p>
                     </div>
                     <div class="number">
                        <h6> 03</h6>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-0 mb-xl-0">
               <div class="image_boxes style_three  border_yes ">
                  <img src="{{asset('fronted/mac-image/sme-ipo/Benefits-of-SME-IPO-Listing.png')}}" class="background_image" alt="image">
                  <!-- <div class="video_box">
                     <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image"><i class="icon-play"></i></a>
                  </div> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 ">
               <div class="process_box style_three dark_color mobile-pa">
                  <div class="process_box_outer_three right">
                     <div class="icon">
                        <div class="img">
                           <img src="{{asset('fronted/mac-image/sme-ipo/benfits-of-sme-ipo-icon/Evolve-as-a-Brand.png')}}" class="img-fluid svg_image" alt="icon png">
                        </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">
                              Evolve as a Brand
                           </a>
                        </h2>
                        <p>Build goodwill and establish your organization as a trusted name.</p>
                     </div>
                     <div class="number">
                        <h6>04</h6>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_10"></div>
               <!--===============spacing==============-->
               <div class="divider_1"></div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
               <div class="process_box style_three dark_color">
                  <div class="process_box_outer_three right">
                     <div class="icon">
                        <div class="img">
                           <img src="{{asset('fronted/mac-image/sme-ipo/benfits-of-sme-ipo-icon/Higher-Valuation.png')}}" class="img-fluid svg_image" alt="icon png">
                        </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">
                              Higher Valuation
                           </a>
                        </h2>
                        <p>Enjoy increased market capitalization benefits.</p>
                     </div>
                     <div class="number">
                        <h6>05</h6>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_10"></div>
               <!--===============spacing==============-->
               <div class="divider_1"></div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
               <div class="process_box style_three dark_color">
                  <div class="process_box_outer_three right">
                     <div class="icon">
                        <div class="img">
                           <img src="{{asset('fronted/mac-image/sme-ipo/benfits-of-sme-ipo-icon/Collateral-Creation.png')}}" class="img-fluid svg_image" alt="icon png">
                        </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">
                              Collateral Creation
                           </a>
                        </h2>
                        <p>Use listed shares as collateral to raise loans.</p>
                     </div>
                     <div class="number">
                        <h6>06</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_20"></div>
      <!--===============spacing==============-->
   </section>
   <section class="content-section bg_dark_1">
      <div class="row no-space">
         <div class="col-xxl-1 hidden-xl hidden-lg col-lg-1"></div>
         <div class="col-md-6 col-lg-6">
            <div class="video-wrapper">
               <!--===============spacing==============-->
               <div class="pd_top_40"></div>
               <!--===============spacing==============-->
               <div class="title_all_box style_one light_color">
                  <div class="title_sections">
                     <!-- <div class="before_title color_white">Free Forever Attendance</div> -->
                     <h2 class="title">
                        Role of Merchant Banker in SME IPO
                     </h2>
                     <p>A Merchant Banker plays a vital role in SME IPO listing, assisting in</p>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
               <div class="row gutter_20px">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="icon_box_all style_seven light_color">
                        <div class="icon_content">
                           <div class="icon">
                              <span class="icon-risk-management-3"></span>
                           </div>
                           <div class="text_box">
                              <h2>
                                 <a href="#" target="_blank" rel="nofollow">
                                    Portfolio Management
                                 </a>
                              </h2>
                              <!-- <p>Holds in these matters principles selection right rejects.</p> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="icon_box_all style_seven light_color">
                        <div class="icon_content">
                           <div class="icon">
                              <span class="icon-solution"></span>
                           </div>
                           <div class="text_box">
                              <h2>
                                 <a href="#" target="_blank" rel="nofollow">
                                    Loan Syndication  
                                 </a>
                              </h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="icon_box_all style_seven light_color">
                        <div class="icon_content">
                           <div class="icon">
                              <span class="icon-human-resources-1"></span>
                           </div>
                           <div class="text_box">
                              <h2>
                                 <a href="#" target="_blank" rel="nofollow">
                                    Leasing Activities 
                                 </a>
                              </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
               <div class="row gutter_20px">                  
                  <div class="col-lg-9 col-md-9 col-sm-12">
                     <div class="extra_content authour_box light_color">
                        <div class="authour_box_content">
                           <div class="text">
                              <h6>
                                 <strong>Did you know? </strong>They also help navigate the entire SME IPO process, ensuring smooth listing and maximizing benefits.
                              </h6>
                              <!-- <h6>
                                 <strong>Learn more </strong>about how Mac Capital supports your journey to an SME IPO.
                              </h6> -->
                           </div>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_10"></div>
                     <!--===============spacing==============-->
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
            </div>
         </div>
         <!-- <div class="col-xxl-1 hidden-xl hidden-lg"></div> -->
         <div class="col-md-5 col-lg-5 bg_op_1 text-center" style="background-image: url('{{ asset('fronted/mac-image/sme-ipo/Role-of-Merchant.png') }}');">
            <div class="video_btn_all">
               <!--===============spacing==============-->
               <div class="pd_top_170"></div>
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
               <!-- <div class="video_box">
                  <a href="https://www.youtube.com/71EZb94AS1k" class="lightbox-image"><i class="icon-play"></i></a>
               </div> -->
               <!--===============spacing==============-->
               <div class="pd_bottom_80"></div>
               <!--===============spacing==============-->
            </div>
         </div>
      </div>
   </section>
</div>


@endsection