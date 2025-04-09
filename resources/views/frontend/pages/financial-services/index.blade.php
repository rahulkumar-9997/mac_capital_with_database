@extends('frontend.layouts.master')
@section('title','MAC Capital - Financial Services')
@section('description', 'MAC Capital is dedicated in providing optimum solutions to its clients’ financing needs that comes with years ')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                    <h1>Financial Services</h1>
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
                                <!-- <h1 class="title">Financial Services</h1> -->
                                <div class="pd_bottom_10"></div>
                                <div class="blog_feature_image">
                                    <img src="{{asset('fronted/mac-image/financial-services/financial-services.jpg')}}" class="wp-post-image" alt="Financial Services">
                                </div>
                                <div class="pd_bottom_20"></div>
                                <p>
                                    While MAC Capital routinely raises finance to drive clients’ initiatives towards fruition, the value, depth and range of the its service portfolio extends much beyond finance.
                                </p>
                                <p>
                                    From the origination of powerful ideas and their conversion into deals, from the making of high level introductions to the presentation of new international opportunities, MAC Capital sees itself as a business partner and catalyst whose role transcends far beyond mere fund raising. Our niche lies in serving as a bridge between Western capital and Eastern enterprise, deftly combining knowledge of ground realities and demands of emerging markets like India on the one hand with deep insights into the practices and expectations of the international business and financial community on the other. This knowledge blend enables superior advice on timing, structuring and other intricacies of diverse business and financing initiatives.
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