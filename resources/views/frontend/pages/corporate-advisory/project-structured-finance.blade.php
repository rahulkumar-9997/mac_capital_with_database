@extends('frontend.layouts.master')
@section('title','MAC Capital - Project & Structured Finance')
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
                    <h1>Project & Structured Finance</h1>
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
                                <!-- <h1 class="title">Project & Structured Finance</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{asset('fronted/mac-image/corporate-advisory/project-and-structured-finance.jpg')}}" class="wp-post-image" alt="Project & Structured Finance">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                 MAC Capital offers advisory services in the provision of domestic and international project and structured finance. Project finance is as much a technique as it is a product. It involves structuring the financing for a project based on the credit of the project itself, wholly or partly. This reduces or eliminates recourse to the project's sponsors, a vital consideration.
                                </p>
                                <p>
                                 Projects with significant capital expenditures, which will produce an identifiable and independent revenue stream, are ideal candidates for project financing. Attributes include those that have contracts for feedstocks (inputs) and off-takes (outputs) at fixed prices or variable prices on both sides that effectively lock in margins. The technique is also highly applicable in the financing of joint ventures with two or more owners who have varying interests and financial strength.
                                </p>
                                <p>
                                MAC Capital offers an end-to-end service for project and structured finance, including the analysis of funding requirements, preparation of financial models (including valuation and ROI analysis), financial structuring advisory, and introduction to funding partners.
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