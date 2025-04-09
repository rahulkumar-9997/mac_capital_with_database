@extends('frontend.layouts.master')
@section('title','MAC Capital - Capital Raising')
@section('description', 'The core MAC Capital competency lies in the raising of international capital.')
@section('keywords', 'Finance, financial, financial solutions, Capital Raising, MAC mumbai, Indian stock market and economy, Capital Raising')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                    <h1>Capital Raising</h1>
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
                            <!-- <h1 class="title">Capital Raising</h1> -->
                            <div class="pd_bottom_10"></div>
                            <div class="blog_feature_image">
                                <img src="{{asset('fronted/mac-image/financial-services/capital-raising.jpg')}}" class="wp-post-image" alt="Capital Raising">
                            </div>
                            <div class="pd_bottom_20"></div>
                            <p>
                                <strong>
                                "A market is the combined behavior of thousands of people responding to information, misinformation & whim" - Kenneth Chang
                                </strong>
                           </p>
                           <p>
                            The core MAC Capital competency lies in the raising of international capital.
                           </p>
                           <p>
                            Within this domain, the MAC Capital advisory & execution service encompasses:
                           </p>
                           <div class="ulli">
                                <ul>
                                    <li>International Private Equity</li>
                                    <li>International Debt</li>
                                    <li>International M&A Finance</li>
                                    <li>International Structured Finance</li>
                                </ul>
                           </div>
                           <p>
                            We have a dedicated core of placement specialists and private equity coverage officers who are in continuous contact with private equity funds, senior credit sources, subordinated debt providers and mezzanine finance providers.
                           </p>
                           <p>
                            MAC Capital arranges financing for a wide range of needs, whether the purpose of the financing is for growth capital, mergers and acquisitions, consolidations, leveraged or management buyouts, shareholder monetization & liquidity initiatives and re-financings / recapitalizations.

                           </p>
                           <p>
                            Once any deal is in motion, we help negotiate the best valuation and terms that the market will bear. Team MAC Capital manages the entire process, staying by the client's side all the way through and to closing. We are equally at home raising international finance for listed companies as for closely held enterprises. This is made possible by our wide international relationship network of investors and banks which is diverse enough in geography, specialization and “bite” size to be responsive to most situations and compulsions
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