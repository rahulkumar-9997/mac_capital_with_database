@extends('frontend.layouts.master')
@section('title','MAC Capital - Capital Structuring Advisory')
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
                    <h1>Capital Structuring Advisory</h1>
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
                                <!-- <h1 class="title">Capital Structuring Advisory</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{asset('fronted/mac-image/corporate-advisory/capital-structuring-advisory.jpg')}}" class="wp-post-image" alt="Capital Structuring Advisory">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                 MAC Capital provides capital structuring advisory services to help achieve your growth trajectory. We undertake a holistic analysis of your existing capital structure, corporate strategy and future financing requirements. We will then recommend changes to provide your business with the financial flexibility to meet those funding needs. Our partners analyze the feasibility of various types of financing, and our goal is to achieve an optimum capital structure in which your overall cost of capital is minimized, yet providing maximum financial flexibility.
                                </p>
                                <p>
                                 MAC Capital extensive contact base of qualified funders allows us to introduce our clients to future partners who specialize in:
                                </p>
                                <div class="ulli">
                                    <li>Equity</li>
                                    <li>Senior debt</li>
                                    <li>Asset Backed debt</li>
                                    <li>Mezzanine / subordinated debt</li>
                                    <li>Leasing and structured products</li>
                                    <li>Transaction Support Services</li>
                                    <li>Tax based products</li>
                                    <li>Trade finance</li>
                                </div>
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