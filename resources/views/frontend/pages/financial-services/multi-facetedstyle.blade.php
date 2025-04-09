@extends('frontend.layouts.master')
@section('title','MAC Capital - Multi Faceted Style')
@section('description', 'MWhile MAC Capital routinely raises finance to drive clients’ initiatives towards fruition')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     <h1>Multi Faceted Style</h1>
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
                            <!-- <h1 class="title">Multi Faceted Style</h1> -->
                            <div class="pd_bottom_10"></div>
                            <div class="blog_feature_image">
                                <img src="{{asset('fronted/mac-image/financial-services/multi-faceted-style.jpg')}}" class="wp-post-image" alt="Multi Faceted Style">
                            </div>
                            <div class="pd_bottom_20"></div>
                            <p>
                                <strong>
                                 "We are what we repeatedly do – excellence then is not an act, but a habit" - Aristotle
                                </strong>
                           </p>
                           <p>
                              While MAC Capital routinely raises finance to drive clients’ initiatives towards fruition, the value, depth and range of the its service portfolio extends much beyond finance.
                           </p>
                           <p>
                              From the origination of powerful ideas and their conversion into deals, from the making of high level introductions to the presentation of new international opportunities, MAC Capital sees itself as a business partner and catalyst whose role transcends far beyond mere fund raising. Our niche lies in serving as a bridge between Western capital and Eastern enterprise, deftly combining knowledge of ground realities and demands of emerging markets like India on the one hand with deep insights into the practices and expectations of the international business and financial community on the other. This knowledge blend enables superior advice on timing, structuring and other intricacies of diverse business and financing initiatives.
                           </p>
                           <p>
                              Our service portfolio navigates the entire spectrum from concept to closure.
                           </p>
                           <h3 class="h3">Ideation & Advice:</h3>
                           <p>
                              MAC Capital gets actively involved at the earliest possible stage. An engagement often starts by addressing the client’s commercial and financial goals and strategies - we bring our experience and exposure to bear in co-piloting the conception, development & crystallization of client strategies. As part of this stage, our focus is on being pro-active and in consistently presenting the full spectrum of meaningful financial choices.
                           </p>
                           <h4 class="h4">Execution:</h4>
                           <p>
                              Once such strategies and choices are crystallized, MAC Capital will identify and line up suitable international opportunities & thereafter proceed on the task of international fund raising through private equity placements, debt product placements or M&A origination and / or financing as may be the case - sometimes straddling all of these.
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