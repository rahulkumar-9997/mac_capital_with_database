
@extends('frontend.layouts.master')
@section('title','MAC Capital Services (P) LTD')
@section('description', 'MAC Capital is a boutique corporate financial advisory firm with a strong focus on the middle market sector in India.')
@section('keywords', 'MAC Capital')
@section('main-content')
<!--===============PAGE CONTENT==============-->
<div id="content" class="site-content">
   <div class="banner_section_hm_16 ">
      <div class="inner_section bg_op_1 banner-section-icon" style="background: linear-gradient(to bottom,#4282aa  -18%, #021c31 127%);">
         <div class="container pd_zero">
            <div class="row gutter_30px">
               <div class="col-lg-12 pd_zero">
                  <div class="team_intro_box">
                     <div class="team_intro_inner">
                        <div class="team_intro_start pad-header-section">
                           <div class="row">
                              <div class="col-lg-12 col-md-12 d-flex align-items-center card-home">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3 col-12">
                                          <div class="service_box style_one dark_color animate-box">
                                             <a href="{{route('mutual-funds')}}" >
                                                <div class="service_content">
                                                   <div class="image">
                                                         <img src="{{asset('fronted/mac-image/banner-icon/money.png')}}" class="img-fluid" alt="Financial Services">
                                                   </div>
                                                   <div class="content_inner">
                                                         <h2>
                                                            <span style="color:#4282aa;"> Mutual Funds </span>
                                                         </h2>
                                                         <p style="color:#4a4e56;">Mutual funds help you grow your money by investing in a mix of stocks and bonds, managed by experts, making it easy and low-risk. </p>
                                                         <span class="read_more"> Read more </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                          <div class="service_box style_one dark_color animate-box">
                                             <a href="{{route('sme-ipos')}}" >
                                                <div class="service_content">
                                                   <div class="image">
                                                         <img src="{{asset('fronted/mac-image/banner-icon/invesment.png')}}" class="img-fluid" alt="Financial Services">
                                                   </div>
                                                   <div class="content_inner">
                                                         <h2>
                                                            <span style="color:#4282aa;"> SME IPO</span>
                                                         </h2>
                                                         <p style="color:#4a4e56;"> Investing in SME IPOs lets you support growing companies and offers the chance for high returns as these businesses expand.  </p>
                                                         <span class="read_more"> Read more </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                          <div class="service_box style_one dark_color animate-box">
                                             <a href="{{ route('other-services.insurance-solution') }}" >
                                                <div class="service_content">
                                                   <div class="image">
                                                         <img src="{{asset('fronted/mac-image/banner-icon/insurance.png')}}" class="img-fluid" alt="Financial Services">
                                                   </div>
                                                   <div class="content_inner">
                                                         <h2>
                                                            <span style="color:#4282aa;"> Insurance</span>
                                                         </h2>
                                                         <p style="color:#4a4e56;">Insurance keeps you and your family safe from unexpected events by offering financial support when you need it most.
                                                         </p>
                                                         <span class="read_more"> Read more </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                          <div class="service_box style_one dark_color animate-box">
                                             <a href="{{route('fixed-deposit')}}" >
                                                <div class="service_content">
                                                   <div class="image">
                                                         <img src="{{asset('fronted/mac-image/banner-icon/fixed-deposit.png')}}" class="img-fluid" alt="Financial Services">
                                                   </div>
                                                   <div class="content_inner">
                                                         <h2>
                                                            <span style="color:#4282aa;"> Fixed Deposit</span>
                                                         </h2>
                                                         <p style="color:#4a4e56;">Fixed Deposits grow your money safely with guaranteed returns over a fixed time - simple and risk-free.</p>
                                                         <span class="read_more"> Read more </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </div>
                                    </div>
                                    
                                 </div>
                              </div>                              
                           </div>
                           <div class="row justify-content-md-center">
                              <div class="col-lg-10">
                                 <div class="left_content">
                                    <div class="title">
                                       <h1>Transform Your Wealth, Secure Your Future.</h1>
                                    </div>
                                    <div class="quotes">
                                       <!-- <span class="icon-quote"></span> -->
                                       <h5>
                                          Discover the power of smart investing with our comprehensive financial services. We provide customized investment strategies and tax-saving solutions tailored to your needs, helping you achieve your financial goals with confidence. Build wealth, secure your future, and take control of your financial freedom today.
                                       </h5>
                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <!---slider-->
   <!--<section class="slider style_four nav_position_one">
      <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
         data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
         <div class="slide-item-content">
            <div class="slide-item content_left">
               <div class="image-layer" style="background-image:url({{asset('fronted/mac-image/banner/banner-new-2.jpg')}})">
               </div>
               <div class="slider-overlay"></div>
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="slider_content pd_top_180 pd_bottom_180">
                           
                           <h1 class="animate_left"> Your Growth,<br> Our Priority </h1>
                           <p class="description animate_right"> Expert Financial Advice for Your Business<br> -Helping you make the right financial moves.
                           </p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item-content">
            <div class="slide-item content_center">
               <div class="image-layer" style="background-image:url({{asset('fronted/mac-image/banner/banner-new-3.jpg')}})">
               </div>
               <div class="slider-overlay"></div>
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="slider_content pd_top_180 pd_bottom_180">
                           
                           <h1 class="animate_left"> Expert Guidance, <br>Proven Results</h1>
                           <p class="description animate_right">Focused on Your Business Growth - Strategic <br>solutions to grow your company.
                           </p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item-content">
            <div class="slide-item content_right">
               <div class="image-layer" style="background-image:url({{asset('fronted/mac-image/banner/banner-new-1.jpg')}})">
               </div>
               <div class="slider-overlay"></div>
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="slider_content pd_top_180 pd_bottom_180">
                           
                           <h1 class="animate_left animated _zoomOut"> Focused on Your <br>Financial Future.</h1>
                           <p class="description animate_right">Your Partner in Financial Success <br>-Personalized advice for better business outcomes.
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>-->
   <!-- https://html.rrdevs.net/bizan/index-3.html -->
   <!---slider-end--->
   <section class="service_section bg_light_1 eaight-style" id="service">
      <!--===============spacing==============-->
      <div class="pd_top_20"></div>
      <!--===============spacing==============-->
      <div class="container pd_zero">
         <div class="row">
            <!-- <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Empowerment</div>
                  <h2>Financial Solutions</h2>
                  <p>We work with your business to create custom financial plans, find new opportunities, and help you grow steadily.
                  </p>
               </div>
            </div> -->
            <!--===============spacing==============-->
            <div class="pd_bottom_10"></div>
            <!--===============spacing==============-->
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/SIP.png')}}" class="img-fluid" alt="Financial Services">
                     </div>
                     <div class="text_box">
                        <h2>SIP</h2>
                        
                     </div>
                     <a>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>SIP</p>
                              <a href="{{route('tools.sip-calculator')}}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/term-insurance.png')}}" class="img-fluid" alt="Term Insurance">
                     </div>
                     <div class="text_box">
                        <h2>Term Insurance</h2>
                        <!-- <p>The less water you use, the less runoff and wastewater that eventually end
                           up in the ocean.</p> -->
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>Term Insurance</p>
                              <a href="{{ route('other-services.insurance-solution.term-insurance') }}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/home-loan.png')}}" class="img-fluid" alt="Home Loan">
                     </div>
                     <div class="text_box">
                        <h2>Home Loan</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>Home Loan</p>
                              <a href="{{ route('other-services.loans.home-loan') }}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/Wealth-Insurance.png')}}" class="img-fluid" alt="Health Insurance">
                     </div>
                     <div class="text_box">
                        <h2>Health Insurance</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>Health Insurance</p>
                              <a href="{{ route('other-services.insurance-solution.health-insurance') }}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/US-Equity.png')}}" class="img-fluid" alt="U.S Equity">
                     </div>
                     <div class="text_box">
                        <h2>U.S Equity</h2>
                       
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>U.S Equity</p>
                              <a href="{{ route('other-services.global-investments.investing-in-us') }}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/Car-&-Bike-Insurance.png')}}" class="img-fluid" alt="Car & Bike Insurance">
                     </div>
                     <div class="text_box">
                        <h2>Car & Bike Insurance</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>Car & Bike Insurance</p>
                              <a href="{{ route('other-services.insurance-solution.car-bike-insurance') }}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/business-insurance.png')}}" class="img-fluid" alt="Business Insurance">
                     </div>
                     <div class="text_box">
                        <h2> Business Insurance</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p> Business Insurance</p>
                              <a href="{{route('other-services.insurance-solution.business-insurance')}}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/ekyc.png')}}" class="img-fluid" alt="EKYC">
                     </div>
                     <div class="text_box">
                        <h2>EKYC</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>EKYC</p>
                              <a href="{{route('other-services.ekyc')}}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/business-loan.png')}}" class="img-fluid" alt="Business loan">
                     </div>
                     <div class="text_box">
                        <h2>Business loan</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p>Business loan</p>
                              <a href="{{route('other-services.loans.business-loan')}}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-20 mb-sm-1 mb-md-1 mb-lg-5 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
               <div class="icon_box_all style_five">
                  <div class="icon_content">
                     <div class="icon">
                        <img src="{{asset('fronted/mac-image/sip-icon/new/bond-and-fixed-deposite.png')}}" class="img-fluid" alt="Bond & Fixed Deposits">
                     </div>
                     <div class="text_box">
                        <h2> Bond & Fixed Deposit</h2>
                        
                     </div>
                     <div class="hover_content">
                        <div class="content">
                           <div class="inner">
                              <p> Bond & Fixed Deposit</p>
                              <a href="{{route('other-services.bonds')}}" class="read_more">Read More<span class="icon-right-arrow-long"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
           
            
           
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_10"></div>
      <!--===============spacing==============-->
   </section>
   <!---about us-->
   <section class="about_us_section" id="about">
      <!--===============spacing==============-->
      <div class="pd_top_70"></div>
      <!--===============spacing==============-->
      <div class="container pd_zero position-relative">
         <div class="symbols-pulse active">
            <div class="pulse-1"></div>
            <div class="pulse-2"></div>
            <div class="pulse-3"></div>
            <div class="pulse-4"></div>
            <div class="pulse-x"></div>
         </div>
         <div class="row">
            <div class="col-xl-6 col-lg-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">
                     <!-- <div class="before_title"> Strategic </div> -->
                     <h4> Welcome to MAC Capital</h4>
                     <p> At MAC Capital, our power of choice is unrestricted, and we take pride in offering the best financial advisory services to suit your needs. Nothing holds us back from delivering innovative solutions to the middle market sector in India.
                     </p>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
               <div class="process_box style_one dark_color">
                  <div class="process_box_outer">
                     <div class="icon">
                        <span class=" icon-users"></span>
                        <div class="number"> 01 </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">Commitment to Clients</a>
                        </h2>
                        <p> MAC Capital is a boutique corporate financial advisory firm with a strong focus on the middle market sector in India. We, at MAC, specialize in providing finance and advisory solutions to middle-market public limited companies in India.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="process_box style_one dark_color">
                  <div class="process_box_outer">
                     <div class="icon">
                        <span class="icon-user-check"></span>
                        <div class="number"> 02 </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow"> Expert Solutions Always </a>
                        </h2>
                        <p> MAC has been able to create a niche for itself as arrangers of capital through some of the most innovative financial structuring and funding solutions.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="process_box style_one dark_color">
                  <div class="process_box_outer">
                     <div class="icon">
                        <span class=" icon-line-chart"></span>
                        <div class="number"> 03 </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow"> Customized Plans for Growth </a>
                        </h2>
                        <p> We create personalized financial plans to help businesses grow and succeed over time in the middle market sector.
                        </p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_30"></div>
               <!--===============spacing==============-->
               <!-- <div class="signature_wrapper">
                  <div class="row gutter_15px">
                     <div class="col-lg-4 col-md-12">
                        <div class="theme_btn_all color_one mobile-center">
                           <a href="{{route('about-us')}}" class="theme-btn two">Read More</a>
                        </div>
                     </div>

                  </div>
               </div> -->
               <div class="pd_bottom_30"></div>

            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="service_wrapper">
                  <div class="move_image_absolute">
                     <img src="{{asset('fronted/mac-image/home/home-image_circle.png')}}" class="class-fluid" alt="image" />
                  </div>
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="service_box style_one dark_color">
                           <div class="service_content">
                              <div class="image ">
                                 <img src="{{asset('fronted/mac-image/home/equity-fund-home.png')}}" class="img-fluid"
                                    alt="Financial Services" />
                              </div>
                              <div class="content_inner">
                                 <h2>
                                    <a href="{{route('other-services.equity-trading')}}"> Equity Fund </a>
                                 </h2>
                                 <!-- <p> MAC Capital connects Indian businesses with Western investors, offering deal structuring guidance and practical financial advice for growth.
                                 </p> -->
                                 <p>
                                 Equity Fund invests in company shares to grow money and earn returns.
                                 </p>
                                 <a href="{{route('other-services.equity-trading')}}" class="read_more"> Read more </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <!--===============spacing==============-->
                        <div class="pd_top_100 mobile_pd_top_30"></div>
                        <div class="pd_top_100 d_md_none"></div>
                        <!--===============spacing==============-->
                        <div class="service_box style_one dark_color last">
                           <div class="service_content">
                              <div class="image ">
                                 <img src="{{asset('fronted/mac-image/home/liquid-funds-home.png')}}" class="img-fluid"
                                    alt="Corporate Advisory" />
                              </div>
                              <div class="content_inner">
                                 <h2>
                                    <a href="{{ route('types.liquid-funds') }}">Liquid Funds </a>
                                 </h2>
                                 <p> Liquid Funds invest in short-term money market instruments for easy access and low-risk returns.
                                 </p>
                                 <a href="{{ route('types.liquid-funds') }}" class="read_more"> Read more </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </section>
   <!---about us end-->
   <!---service--->
   <section class="service_section bg_light_1" id="service">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <!-- <div class="before_title">Empowerment</div> -->
                  <h2>Financial Solutions</h2>
                  <p>We work with your business to create custom financial plans, find new opportunities, and help you grow steadily.
                  </p>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image:url({{asset('fronted/mac-image/financial-service/multi-faceted-style.jpg')}})">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{asset('fronted/mac-image/financial-service/financial_icon/multi.png')}}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2>
                              <a href="{{route('multi-facetedstyle')}}">Multi Faceted Style</a>
                           </h2>
                           <p>While MAC Capital routinely raises finance to drive clients’ initiatives towards fruition, the value,</p>
                           <ul>
                              <li>Ideation & Advice</li>
                              <li>Execution</li>

                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="{{route('multi-facetedstyle')}}">
                           <i class="icon-right-arrow"></i>
                        </a>
                     </div>
                     <div class="overlay_content">
                        <h2>
                           <a href="{{route('multi-facetedstyle')}}">Multi Faceted Style</a>
                        </h2>
                        <p>While MAC Capital routinely raises finance to drive clients’ initiatives towards fruition, the value,</p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two  active_ser">
                     <div class="content_inner"
                        style="background-image:url({{asset('fronted/mac-image/financial-service/capital-raising.jpg')}})">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{asset('fronted/mac-image/financial-service/financial_icon/multi.png')}}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2>
                              <a href="{{route('capital-raising')}}">Capital Raising</a>
                           </h2>
                           <p>The core MAC Capital competency lies in the raising of international capital.</p>
                           <ul>
                              <li>
                                 International Private Equity
                              </li>
                              <li>
                                 International Debt
                              </li>
                              <li>
                                 International M&A Finance
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="{{route('capital-raising')}}">
                           <i class="icon-right-arrow"></i>
                        </a>
                     </div>
                     <div class="overlay_content">
                        <h2>
                           <a href="{{route('capital-raising')}}">Capital Raising</a>
                        </h2>
                        <p>The core MAC Capital competency lies in the raising of international capital.
                        </p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image:url({{asset('fronted/mac-image/financial-service/international-debt-solutions.jpg')}})">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{asset('fronted/mac-image/financial-service/financial_icon/international-debt.png')}}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2>
                              <a href="{{route('internationaldebt-solution')}}">International Debt Solutions</a>
                           </h2>
                           <p>MAC Capital specializes in syndicating high value placements of corporate </p>
                           <ul>
                              <li>
                                 M&A financing
                              </li>
                              <li>
                                 Structured Debt
                              </li>

                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="{{route('internationaldebt-solution')}}">
                           <i class="icon-right-arrow"></i>
                        </a>
                     </div>
                     <div class="overlay_content">
                        <h2>
                           <a href="{{route('internationaldebt-solution')}}">International Debt Solutions</a>
                        </h2>
                        <p>MAC Capital specializes in syndicating high value </p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="text-center mt-4">
               <a href="{{route('financial-services')}}" class="theme-btn one">View All <i class="icon-right-arrow"></i>
               </a>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_70"></div>
      <!--===============spacing==============-->
   </section>
   <!---service end-->
   <!---expertise--->
   <!-- <section class="expertise">
      <div class="area_of_expertise">
         <div class="simpleParallax">
            <img src="{{asset('fronted/images/areaof-ecp-1.jpg')}}" class="cover-parallax" alt="image">
         </div>
         <div class="title_and_video">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="video_box text-center">
                        <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image"><i
                           class="icon-play"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="col-lg-6">
                     <div class="title_all_box style_one text-end">
                        <div class="title_sections">
                           <h2>Create Meaningful Experiences for employees</h2>
                           <p>Our power of choice is untrammelled and when nothing prevents our able to do what
                              we like best every pleasure is to be welcomed and occur that pleasures have to be
                              repudiated.
                           </p>
                        </div>
                        <div class="theme_btn">
                           <a href="service-default.html" class="theme-btn one">Read more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="expertise">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                     <div class="step_number">
                        <h1>01.</h1>
                     </div>
                     <h2 class="title"><a href="#">Payroll Management</a>
                     </h2>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                     <div class="step_number">
                        <h1>02.</h1>
                     </div>
                     <h2 class="title">
                        <a href="#">Employee Compensation</a>
                     </h2>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                     <div class="step_number">
                        <h1>03.</h1>
                     </div>
                     <h2 class="title">
                        <a href="#">Benefits Management</a>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!---expertise-end--->
   <section class="service-section bg_light_11 calculator-home">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container chart-container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center dark_color">
                  <div class="title_sections">
                     <!-- <div class="before_title">Leading</div> -->
                     <h2 class="mb-10">How much extra can you save with Mutual Fund?</h2>
                     <!--<p>We work with your company to identify position requirements, implement
                     recruitment programs, and <br> initiate employee assessments that maximize
                     recruitment efforts
                  </p>-->
                  </div>
                  <div class="pd_bottom_10"></div>
               </div>
            </div>
         </div>
         <div class="row">
            <!--start code-->
            <div class="row">
               <div class="col-lg-3">
                  <ul>
                     <li>
                        <span>Lumpsum</span>
                        <div class="inputFldBox input-chart">
                           <input type="text" id="lumpsum" value="100000" class="inputFld">
                           <i class="fa fa-rupee inputIcon"></i>
                        </div>
                     </li>
                     <!-- SIP input -->
                     <li>
                        <span>SIP</span>
                        <div class="inputFldBox input-chart">
                           <input type="text" id="sip" value="5000" class="inputFld">
                           <i class="fa fa-rupee inputIcon"></i>
                        </div>
                     </li>
                     <!-- Investment Year dropdown -->
                     <li>
                        <span>Investment Year</span>
                        <select id="investmentYear" class="input-chart">
                           @foreach (range(1, 20) as $year)
                           <option value="{{ $year }}" {{ $year == 10 ? 'selected' : '' }}>
                              {{ $year }} Year{{ $year > 1 ? 's' : '' }}
                           </option>
                           @endforeach
                        </select>
                     </li>
                     <!-- Compare With dropdown -->
                     <li>
                        <span>Compare With</span>
                        <select id="compareWith" class="input-chart">
                           <option value="fd">Fixed Deposit</option>
                           <option value="ppf">PPF</option>
                           <option value="sa">Savings Account</option>
                        </select>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-6">
                  <div class="my-custom-graph">
                     <canvas id="investmentGraph" width="550" height="450"></canvas>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 d-flex1 align-items-center">
                  <div class="investment-summary">
                     <div class="investment-item">
                        <strong>Mutual Fund</strong><span style="color: #3182bd" id="mfValue">0</span>
                     </div>
                     <div class="investment-item">
                        <strong>Fixed Deposit</strong><span style="color: #ff6f61" id="fdValue">0</span>
                     </div>
                     <div class="investment-item">
                        <strong>PPF</strong><span style="color: #2ca02c" id="ppfValue">0</span>
                     </div>
                     <div class="investment-item">
                        <strong>Savings Account</strong><span style="color: #f39c12" id="saValue">0</span>
                     </div>
                  </div>
                  <div class="theme_btn_all color_one" style="padding-top: 10px;">
                     <a href="{{route('calculators')}}" class="theme-btn five w-100">Calculator</a>
                  </div>
               </div>
            </div>
            <!--start code-->
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_10"></div>
      <!--===============spacing==============-->
   </section>
   <!---process--->
   <section class="service-section-two">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container pd_zero">
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_one text-center  dark_color">
                  <div class="title_sections">
                     <!-- <div class="before_title"> Making What’s </div> -->
                     <h2>Corporate Advisory</h2>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_70"></div>
            <!--===============spacing==============-->
         </div>
         <div class="row gutter_15px">
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
               <div class="service_box style_three dark_color">
                  <div class="service_content">
                     <div class="content_inner">
                        <span class="icon-dollar"><i></i></span>
                        <small class="nom">01</small>
                        <h2><a href="{{route('mergers')}}">Mergers and Aquisitions</a></h2>
                        <p>MAC Capital can enhance the precision of your growth strategy by assisting with a single acquisition.</p>
                        <a href="{{route('mergers')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
               <div class="service_box style_three dark_color">
                  <div class="service_content">
                     <div class="content_inner">
                        <span class="icon-pharmacy"><i></i></span>
                        <small class="nom">02</small>
                        <h2><a href="{{route('capital-structuring')}}">Capital Structuring Advisory</a></h2>
                        <p>MAC Capital provides capital structuring advisory services to help achieve your growth trajectory. </p>
                        <a href="{{route('capital-structuring')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
               <div class="service_box style_three dark_color">
                  <div class="service_content">
                     <div class="content_inner">
                        <span class="icon-service"><i></i></span>
                        <small class="nom">03</small>
                        <h2><a href="{{route('indications-of-value')}}">Indications of Value</a></h2>
                        <p>MAC Capital undertakes valuation mandates for clients who are seeking fair value assessments</p>
                        <a href="{{route('indications-of-value')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
               <div class="service_box style_three dark_color">
                  <div class="service_content">
                     <div class="content_inner">
                        <span class="icon-solution1"><i></i></span>
                        <small class="nom">04</small>
                        <h2><a href="{{route('project-structured-finance')}}">Project & Structured Finance</a></h2>
                        <p>MAC Capital offers advisory services in the provision of domestic and international project and</p>
                        <a href="{{route('project-structured-finance')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_30"></div>
               <!--===============spacing==============-->
            </div>
         </div>
         <div class="text-center mt-4">
            <a href="{{route('corporate-advisory')}}" class="theme-btn one">View All <i class="icon-right-arrow"></i>
            </a>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_50"></div>
      <!--===============spacing==============-->
   </section>
</div>
<!--===============PAGE CONTENT END==============-->
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
   $(document).ready(function() {
      var $lumpsumInput = $("#lumpsum");
      var $sipInput = $("#sip");
      var $investmentYearSelect = $("#investmentYear");
      var $compareWithSelect = $("#compareWith");
      var ctx = document.getElementById("investmentGraph").getContext("2d");

      var investmentChart = new Chart(ctx, {
         type: 'line',
         data: {
            labels: [],
            datasets: [{
                  label: 'Mutual Fund (12%)',
                  borderColor: '#3182bd',
                  data: [],
                  fill: false
               },
               {
                  label: 'Fixed Deposit (6%)',
                  borderColor: '#ff6f61',
                  data: [],
                  fill: false
               },
               {
                  label: 'PPF (7.1%)',
                  borderColor: '#2ca02c',
                  data: [],
                  fill: false
               },
               {
                  label: 'Savings Account (3%)',
                  borderColor: '#f39c12',
                  data: [],
                  fill: false
               }
            ]
         },
         options: {
            responsive: true,
            scales: {
               x: {
                  title: {
                     display: true,
                     text: 'Years'
                  }
               },
               y: {
                  title: {
                     display: true,
                     text: 'Investment Value (in Lakhs)'
                  }
               }
            }
         }
      });

      function updateChart() {
         var lumpsum = parseFloat($lumpsumInput.val()) || 0;
         var sip = parseFloat($sipInput.val()) || 0;
         var years = parseInt($investmentYearSelect.val()) || 10;
         var rates = {
            mf: 12,
            /* Mutual Fund */
            fd: 6,
            /* Fixed Deposit */
            ppf: 7.1,
            /* PPF */
            sa: 3 /* Savings Account */
         };

         var mfData = [];
         var fdData = [];
         var ppfData = [];
         var saData = [];

         for (var i = 1; i <= years; i++) {
            /*Compound growth for lumpsum*/
            var mfGrowth = lumpsum * Math.pow(1 + (rates.mf / 100), i);
            var fdGrowth = lumpsum * Math.pow(1 + (rates.fd / 100), i);
            var ppfGrowth = lumpsum * Math.pow(1 + (rates.ppf / 100), i);
            var saGrowth = lumpsum * Math.pow(1 + (rates.sa / 100), i);
            //alert(mfGrowth);
            /*SIP Growth Calculation with yearly compounding (annually compounded SIP)*/
            var mfSipGrowth = sip * 12 * ((Math.pow(1 + (rates.mf / 100), i) - 1) / (rates.mf / 100));
            var fdSipGrowth = sip * 12 * ((Math.pow(1 + (rates.fd / 100), i) - 1) / (rates.fd / 100));
            var ppfSipGrowth = sip * 12 * ((Math.pow(1 + (rates.ppf / 100), i) - 1) / (rates.ppf / 100));
            var saSipGrowth = sip * 12 * ((Math.pow(1 + (rates.sa / 100), i) - 1) / (rates.sa / 100));
            //alert(mfSipGrowth);
            /*Total value = lumpsum growth + SIP growth*/
            var mfTotal = mfGrowth + mfSipGrowth;
            var fdTotal = fdGrowth + fdSipGrowth;
            var ppfTotal = ppfGrowth + ppfSipGrowth;
            var saTotal = saGrowth + saSipGrowth;

            /*Push values to data arrays, convert to lakhs*/
            mfData.push((mfTotal / 100000).toFixed(2));
            fdData.push((fdTotal / 100000).toFixed(2));
            ppfData.push((ppfTotal / 100000).toFixed(2));
            saData.push((saTotal / 100000).toFixed(2));
         }

         /*Set x-axis labels (years)*/
         investmentChart.data.labels = Array.from({
            length: years
         }, function(_, i) {
            return (i + 1) + " yrs";
         });
         //alert(JSON.stringify(investmentChart.data.labels));
         /*Update chart data*/
         investmentChart.data.datasets[0].data = mfData;
         investmentChart.data.datasets[1].data = fdData;
         investmentChart.data.datasets[2].data = ppfData;
         investmentChart.data.datasets[3].data = saData;
         //alert(JSON.stringify(investmentChart.data.datasets[0].data));
         investmentChart.update();

         /*Update final year value display (in Lakhs)*/
         $("#mfValue").text(mfData[years - 1] || 0);
         $("#fdValue").text(fdData[years - 1] || 0);
         $("#ppfValue").text(ppfData[years - 1] || 0);
         $("#saValue").text(saData[years - 1] || 0);
      }

      /*Trigger chart update on input changes*/
      $lumpsumInput.on("input", updateChart);
      $sipInput.on("input", updateChart);
      $investmentYearSelect.on("change", updateChart);
      $compareWithSelect.on("change", updateChart);
      updateChart();
   });
</script>






@endpush