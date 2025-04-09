@extends('frontend.layouts.master')
@section('title','MAC Capital - International Structured Finance Solutions')
@section('description', 'MAC Capital specializes in mobilizing private external risk capital by creating the right product to')
@section('keywords', 'Finance, financial, financial solutions, MAC mumbai, Indian stock market and economy, International Structured Finance Solutions')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                  <h1>International Structured Finance Solutions</h1>
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
                            <!-- <h1 class="title">International Structured Finance Solutions</h1> -->
                            <div class="pd_bottom_10"></div>
                            <div class="blog_feature_image">
                                <img src="{{asset('fronted/mac-image/financial-services/international-structured-finance-solutions.jpg')}}" class="wp-post-image" alt="International Structured Finance Solutions">
                            </div>
                            <div class="pd_bottom_20"></div>
                            <p>
                                <strong>
                                "To simplify complications is the first essential of success"- George Earle Buckle
                                </strong>
                           </p>
                           <p>
                           At the crossroads of the lending and capital markets, MAC Capital advises and intermediates on a wide range of innovative and multi-faceted structured finance instruments.

                           </p>
                           <p>
                           Structured Finance straddles all layers of capital and we at MAC Capital are adept at designing & combining debt and equity financing components in a structured manner and with a bespoke style, to solve particular issuer problems or investor problems that cannot be solved by conventional methods.
                           </p>
                           
                           <p>
                           By leverage our banking relationships, MAC Capital creates bespoke solutions to help our clients raise structured debt from the international markets. We maintain ongoing relationships with such specialized lenders — from specialized lending institutions to hedge funds and private funds — and regularly consult with many of these capital providers regarding their evolving credit criteria. Using this insight and knowledge, we strive to identify the most appropriate financing sources for our clients and structure transactions to address the needs of all participants. Furthermore, these relationships allow us to tailor the return profile for individual clients, striking a careful balance between current and future return.
                           </p>
                           <p>
                           Our goal is to match the needs & expectations of emerging market corporate borrowers with demand patterns from banks globally through a solution driven, debt product flow from India.
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