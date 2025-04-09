@extends('frontend.layouts.master')
@section('title','MAC Capital - Corporate  Services')
@section('description', 'MAC Capital is dedicated in providing optimum solutions to its clients’ financing needs that comes with years ')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy,')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                    <h1>Corporate  Services</h1>
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
                            <div class="title_sections left">
                                <!-- <h1 class="title">Corporate  Advisory</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{asset('fronted/mac-image/corporate-advisory/corporate-advisory.jpg')}}" class="wp-post-image" alt="Corporate Advisory">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    MAC Capital has an experienced team of professionals with many years of experience in all facets of corporate advisory. Our team provides a targeted suite of services to enhance corporate value and assist in your growth trajectory.
                                </p>
                                <p>
                                    We always take a partnership approach with our clients, ensuring that all mandates are firmly anchored in your long-term corporate strategy. We accomplish this by embedding formal strategy analysis into each mandate. Having this long-term focus enables MAC Capital to provide solutions which are synergistic with your long term growth strategy.
                                </p>
                                <p>
                                    Our service advisory portfolio includes mergers and acquisitions, capital structuring advisory, valuation assessment, project and structured finance, and an assortment of financial support services.
                                </p>
                            </div>
                        </div>
                    
                </article>
                <div class="pd_bottom_65"></div>
                </main>
            </div>
            @include('frontend.layouts.corporate-advisory-inc')
      </div>
   </div>
</div>
@endsection