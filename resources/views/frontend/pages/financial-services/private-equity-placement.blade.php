@extends('frontend.layouts.master')
@section('title','MAC Capital - Private Equity Placement')
@section('description', 'MAC Capital specializes in mobilizing private external risk capital by creating the right product to')
@section('keywords', 'Finance, financial, financial solutions, MAC mumbai, Indian stock market and economy, Private Equity Placement')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                  <h1>Private Equity Placement</h1>
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
                            <!-- <h1 class="title">Private Equity Placement</h1> -->
                            <div class="pd_bottom_10"></div>
                            <div class="blog_feature_image">
                                <img src="{{asset('fronted/mac-image/financial-services/private-equity-placement.jpg')}}" class="wp-post-image" alt="Private Equity Placement">
                            </div>
                            <div class="pd_bottom_20"></div>
                            <p>
                                <strong>
                                "The crucial thing is not what we know but how we can use it" - Bill Gates
                                </strong>
                           </p>
                           <p>
                           MAC Capital specializes in mobilizing private external risk capital by creating the right product to target the right investors with the right story.
                           </p>
                           <p>
                           Once the needs and profile of a client are calibrated, the structure frozen and placement documentation created, we speedily progress each mandate, tapping into our reservoir of market knowledge & vast, diversified investor pool.
                           </p>
                           
                           <p>
                           We utilize our extensive transaction experience and wide investor relationships to develop optimum private placement packages beneficial to both the client and potential investors. We maintain relationships with possibly the broadest array of sources for emerging market private equity investment. The firm’s financial creativity, industry leading private capital relationships and our transaction experience all distinguish MAC Capital as one of the premier facilitators of emerging market private equity placements.
                           </p>
                           <p>
                           Our placement specialists combine this in-depth knowledge of private capital sources with the firm’s unique insights into emerging markets and expertise in financial engineering and market analytics to create optimal capital structures and value maximization strategies for our corporate clients.
                           </p>
                           <p>
                           We also sometimes act on behalf of the investing institutions pursuant to mandates issued by them in our favor, a measure of their confidence in us.
                           </p>
                           <p>
                           We aim to add real, measurable value to each private equity engagement, beyond mere fund raising.
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