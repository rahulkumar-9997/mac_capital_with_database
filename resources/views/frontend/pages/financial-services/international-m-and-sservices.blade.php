@extends('frontend.layouts.master')
@section('title','MAC Capital - International M & S Services')
@section('description', 'MAC Capital specializes in mobilizing private external risk capital by creating the right product to')
@section('keywords', 'Finance, financial, financial solutions, MAC mumbai, Indian stock market and economy, International M & S Services')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                  <h1>International M & S Services</h1>
                  </div>
               </div>
            </div>
            
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
                    <div class="title_all_box style_one dark_color">
                        <div class="title_sections left ">
                            <!-- <h1 class="title">International M & S Services</h1> -->
                            <div class="pd_bottom_10"></div>
                            <div class="blog_feature_image">
                                <img src="{{asset('fronted/mac-image/financial-services/international-M-and-S-services.jpg')}}" class="wp-post-image" alt="International M & S Services">
                            </div>
                            <div class="pd_bottom_20"></div>
                            <p>
                                <strong>
                                "Price is what you pay. Value is what you get" - Warren Buffett
                                </strong>
                           </p>
                           <p>
                           Merger, Acquisition and partnering opportunities are significant milestones in the life cycle of any company and for its owners or prospective owners. The financial, organizational, managerial and strategic dimensions which they pose create problems the solutions to which can be be very complex. Team MAC has broad experience in assisting clients in various aspects of the merger and acquisition process.

                           </p>
                           <p>
                           Our M&A services are born out of our pro-active approach. By combining our international relationship network with our ongoing client insights, we create opportunities for mergers, acquisitions, joint ventures and other such strategic alliances or financial restructurings.
                           </p>
                           
                           <p>
                           This vantage view enables the pro-active creation of opportunities, choices and solutions which tend to accelerate achievement of client goals and enhancement of shareholder value.
                           </p>
                           <p>
                           Within this domain, we are as much focused on creating M&A and joint venturing opportunities for Indian clients in global markets- what we call “taking India to the world”, as on emerging market acquisitions for global companies.
                           </p>
                           <p>
                           Third party financing often plays a vital role in M&A transactions. Through the firm’s vast network of capital sources, we can arrange financing for a wide range of M&A situations including roll-ups, consolidations, leveraged and management buyouts. We are able to handle all layers of a company’s capitalization to maximize flexibility, pricing and structural optimization.
                           </p>
                        </div>
                    </div>
                  
               </article>
               <div class="pd_bottom_65"></div>
            </main>
         </div>
         @include('frontend.layouts.finance-services-inc')
      </div>
   </div>
</div>
@endsection