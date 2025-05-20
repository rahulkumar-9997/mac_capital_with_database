@extends('frontend.layouts.master')
@section('title','MAC Capital :: About us')
@section('description', 'MAC Capital is dedicated in providing optimum solutions to its clients’ financing needs that comes with years ')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')
@push('css')
<link rel='stylesheet' href="{{asset('fronted/css/about-us.css')}}" type='text/css' media='all' />
@endpush
@section('main-content')
<div class="page_header_default style_one ">

   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     <h1> About Us</h1>
                  </div>
               </div>
            </div>
            <!-- <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="{{URL::to('/')}}">Home</a> </li>
                     <li class="active">About Us</li>
                  </ul>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</div>
<div id="content" class="site-content">
   
   <section class="about-us-top bg_light_1 position-relative">
      <div class="position_absolute curve_shape_top_1" data-negative="false">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
               <path class="elementor-shape-fill"
                  d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
               </path>
               <path class="elementor-shape-fill"
                  d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
               </path>
               <path class="elementor-shape-fill"
                  d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
               </path>
               <path class="elementor-shape-fill"
                  d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
               </path>
               <path class="elementor-shape-fill"
                  d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
               </path>
               <path class="elementor-shape-fill"
                  d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
               </path>
               <path class="elementor-shape-fill"
                  d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
               </path>
               <path class="elementor-shape-fill"
                  d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
               </path>
               <path class="elementor-shape-fill"
                  d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
               </path>
         </svg>
      </div>
      <div class="pd_top_80"></div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-sm-6 pe-sm-4 order-sm-0 order-2 d-flex align-items-center">
               <div>
                  <!-- <h2>Background and Experience of MAC Capital</h2> -->
                  <h2>Your Trusted Partner in Wealth Management</h2>
                  <div class="about-back">
                     <!-- <p>
                        With over <strong>30 years of experience</strong> in the financial industry, MAC Capital Services is a trusted financial advisory firm committed to delivering expert guidance and tailored solutions. Our extensive track record reflects our deep understanding of market dynamics, enabling us to provide clients with strategic advice that drives growth and financial success. At MAC Capital Services, we prioritize building long-term relationships based on integrity, expertise, and a deep commitment to your financial well-being.
                     </p> -->
                     <p>
                        With a strong foundation built over 3 decades , MAC Capital has been at the forefront of Wealth Management & Investment, offering expert insights and strategic financial planning. We specialize in crafting dynamic investment strategies that help clients build, preserve, and grow their wealth. Our commitment to integrity, innovation, and excellence ensures that every financial decision aligns with our clients' long-term success.
                     </p>
                  </div>
               </div>
            </div>
            <!-- <div class="col-sm-1"></div> -->
            <div class="col-sm-6 order-sm-0 order-1">
               <img src="{{asset('fronted/mac-image/our-board/Background-and-Experience.jpg')}}" class="img-fluid mb-sm-0 mb-3 border-radius-img" width="100%">
            </div>
         </div>

      </div>
      <div class="pd_top_80"></div>
      <div class="position_absolute curve_shape_bottom_1" data-negative="false">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
               <path class="elementor-shape-fill"
                  d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
               </path>
               <path class="elementor-shape-fill"
                  d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
               </path>
               <path class="elementor-shape-fill"
                  d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
               </path>
               <path class="elementor-shape-fill"
                  d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
               </path>
               <path class="elementor-shape-fill"
                  d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
               </path>
               <path class="elementor-shape-fill"
                  d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
               </path>
               <path class="elementor-shape-fill"
                  d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
               </path>
               <path class="elementor-shape-fill"
                  d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
               </path>
               <path class="elementor-shape-fill"
                  d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
               </path>
         </svg>
      </div>
   </section>
   <section class="pt-0 pb-4">
      <div class="pd_top_30"></div>
      <div class="container">
         <div class="row m-0 bg-magenta vision-mission-card mb-4">
            <div class="col-sm-12">
               <div class="row align-items-center">
                  <div class="col-sm-2 col-4">
                     <img src="{{asset('fronted/mac-image/our-board/our-vision.png')}}" alt="Vision" class="img-fluid">
                  </div>
                  <div class="col-lg-3 col-sm-4 col-8">
                     <h2 class="text-white">VISION</h2>
                  </div>
                  <div class="col-lg-6 col-sm-6 mt-sm-0 mt-3">
                     <p class="text-white pe-sm-5">
                        To be the epitome of trust and excellence in the Wealth Management & Investment industry, fostering lasting relationships built on integrity, innovation, and expertise. At MAC Capital, we strive to empower individuals and businesses with strategic financial guidance that turns aspirations into achievements. Our unwavering commitment to personalized wealth-building solutions ensures that every client navigates their financial journey with confidence and success.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row m-0 bg-magenta vision-mission-card">
            <div class="col-sm-12">
               <div class="row align-items-center">
                  <div class="col-sm-2 col-4">
                     <img src="{{asset('fronted/mac-image/our-board/our-mission.png')}}" alt="MISSION" class="img-fluid">
                  </div>
                  <div class="col-lg-3 col-sm-4 col-8">
                     <h2 class="text-white">MISSION</h2>
                  </div>
                  <div class="col-lg-6 col-sm-6 mt-sm-0 mt-3">
                     <p class="text-white pe-sm-5">
                        At MAC Capital, we strive to redefine the Wealth Management & Investment experience by alleviating financial concerns and providing strategic guidance that brings our clients closer to their investment goals with confidence and ease. Through expertise, innovation, and a client-centric approach, we are committed to delivering seamless wealth-building solutions that empower individuals and businesses to achieve lasting financial success.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pd_top_30"></div>
         
   </section>
   <section class="service_section bg_light_1 ">
      <div class="pd_top_40"></div>
      <div class="container">
         
         <div class="row">
            <div class="col-lg-12">
               <div class="title_all_box style_two text-center dark_color">
                  <div class="title_sections two">
                     <!-- <div class="before_title"> Effective Solutions</div> -->
                     <h3>Our Board</h3>
                     <div class="pd_top_10"></div>
                     <!-- <p>At Mac Capital, we help businesses achieve exponential growth through SME IPO listings</p> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="row justify-content-md-center">
            <div class="col-sm-3 col-6">
               <div class="team-card-div team-contents team_card" id="ajoy-lodha">
                  <a href="javaScript:void(0)" class="team-ct">
                     <div class="management-team-card border_line_pink">
                        <img src="{{asset('fronted/mac-image/our-board/Late-Ashok-Agarwal.jpg')}}" alt="Late Shri Ashok Agarwal" class="img-fluid team-img">
                        <p class="team-name"><b>Late Shri Ashok Agarwal </b></p>
                        <p class="team-designation">Founder, Chairman and Visionary Leader</p>
                        <div class="team-large-desc" style="display: none">
                           <h4 class="team-name">Shri Late  Ashok Agarwal</h4>
                           <p class="team-modal-designation">Founder, Chairman and Visionary Leader</p>
                           <div class="message-body">
                              <p class="text-magenta">
                                 With over five decades of expertise in Corporate Finance and Investment Management, Late Shri Ashok Agarwal was the guiding force behind MAC Capital Services Pvt. Ltd. His visionary leadership, unwavering integrity, and commitment to excellence laid the foundation for the firm's success.

                              </p>
                              <p class="text-magenta">
                                 His legacy continues to inspire us as we uphold his values and drive MAC Capital forward as a trusted name in the financial and investment industry.
                              </p>
                           </div>
                        </div>
                     </div>
                  </a>
                  <p class="about-social-link">
                     <a href="https://www.linkedin.com/in/ashok-agarwal-6748911b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="Linkedin">
                        <span class="fa fa-linkedin"></span>
                     </a>
                  </p>
               </div>
            </div>
            <div class="col-sm-3 col-6">
               <div class="team-card-div team-contents team_card" id="ajoy-lodha">
                  <a href="javaScript:void(0)" class="team-ct">
                     <div class="management-team-card border_line_pink">
                        <img src="{{asset('fronted/mac-image/our-board/Shri-Anupam-Agarwal.jpg')}}" alt="Shri Anupam  Agarwal" class="img-fluid team-img">
                        <p class="team-name"><b>Anupam  Agarwal</b></p>
                        <p class="team-designation">
                           Founder & Managing Director
                        </p>
                        <div class="team-large-desc" style="display: none">
                           <h4 class="team-name">Anupam  Agarwal</h4>
                           <p class="team-modal-designation">
                              Founder & Managing Director 
                           </p>
                           <div class="message-body">
                              <p class="text-magenta">
                                 With over three decades of experience in the financial services industry, Mr. Anupam Agarwal is a distinguished leader and visionary behind MAC Capital Services Pvt. Ltd. His unmatched expertise and strategic insight have positioned the firm as a leading player in wealth management and investment advisory services.
                              </p>
                              <p class="text-magenta">
                                 As the Founder and Managing Director, Mr. Agarwal has built MAC Capital into a trusted name for high-net-worth individuals, institutional clients, and investors seeking long-term, value-driven financial solutions. His leadership is characterized by a commitment to delivering sustainable, growth-oriented equity platforms, setting MAC Capital apart from speculative investment options.

                              </p>
                              <p class="text-magenta">
                                 Mr. Agarwal’s forward-thinking approach emphasizes personalized financial strategies and prudent investment management, ensuring that every client receives tailored, innovative solutions that align with their goals. Under his stewardship, MAC Capital has consistently provided unparalleled service and expertise, solidifying its reputation as a premier wealth management firm.

                              </p>
                              <p class="text-magenta">
                                 Driven by an unwavering dedication to excellence and client success, Mr. Agarwal continues to shape the future of MAC Capital, ensuring its place as a trusted partner in navigating the complexities of modern financial and investment landscapes.
                              </p>
                           </div>
                        </div>
                     </div>
                  </a>
                  <p class="about-social-link">
                     <a href="https://www.linkedin.com/in/anupam-agarwal-19753611?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="Linkedin">
                        <span class="fa fa-linkedin"></span>
                     </a>
                  </p>
               </div>
            </div>
            <div class="col-sm-3 col-6">
               <div class="team-card-div team-contents team_card" id="ABOUT-CARD">
                  <a href="javaScript:void(0)" class="team-ct">
                     <div class="management-team-card border_line_pink">
                        <img src="{{asset('fronted/mac-image/our-board/Shri-Achintya-Agarwal.jpg')}}" alt="Shri Achintya Agarwal" class="img-fluid team-img">
                        <p class="team-name"><b>Achintya  Agarwal </b></p>
                        <p class="team-designation">Director & CEO </p>
                        
                        <div class="team-large-desc" style="display: none">
                           <h4 class="team-name">Achintya  Agarwal</h4>
                           <p class="team-modal-designation">Director & CEO </p>
                           <div class="message-body">
                              <p class="text-magenta">
                                 He is a dynamic leader dedicated to driving the firm's vision and success. A Bachelor of Business Administration graduate from O.P. Jindal Global University, Haryana, and a certified Investment Advisor by NISM, he has seamlessly transitioned the company to the digital era, leveraging social media and digital platforms to expand outreach and attract new clients.
                              </p>
                              <p class="text-magenta">
                                 Mr. Agarwal is actively involved in managing and nurturing relationships with new clients, ensuring they receive personalized financial and investment solutions. His innovative strategies and forward-thinking approach have been instrumental in enhancing the firm's marketing capabilities and positioning MAC Capital as a leader in the financial services sector.
                              </p>
                              <p class="text-magenta">
                                 With a keen vision for growth, Mr. Agarwal is focused on expanding the business to new heights, exploring untapped opportunities, and ensuring that MAC Capital continues to deliver exceptional services tailored to the evolving needs of its clients. His commitment to excellence and innovation is at the core of the firm's success.
                              </p>
                           </div>
                        </div>
                     </div>
                  </a>
                  <p class="about-social-link">
                     <a href="https://www.linkedin.com/in/achintya-agarwal-29a808213?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="Linkedin">
                        <span class="fa fa-linkedin"></span>
                     </a>
                  </p>
               </div>
            </div>
            <div class="col-sm-3 col-6">
               <div class="team-card-div team-contents team_card" id="ajoy-lodha">
                  <a href="javaScript:void(0)" class="team-ct">
                     <div class="management-team-card border_line_pink">
                        <img src="{{asset('fronted/mac-image/our-board/gauri-agarwal.jpg')}}" alt="Shri Gauri Agarwal" class="img-fluid team-img">
                        <p class="team-name"><b>Gauri Agarwal</b></p>
                        <p class="team-designation">Director & Head of Marketing & Outreach, PR</p>
                        <div class="team-large-desc" style="display: none">
                           <h4 class="team-name">Gauri Agarwal</h4>
                           <p class="team-modal-designation">Director & Head of Marketing & Outreach, PR</p>
                           <div class="message-body">
                              <p class="text-magenta">
                                 Mrs.  Agarwal has been a cornerstone of MAC Capital Services, playing a pivotal role in fostering strong relationships with our valued clients. As a passionate marketing leader, she has been instrumental in advancing our vision of promoting financial literacy and creating greater awareness about investments and personal finance.
                              </p>
                              <p class="text-magenta">
                                 Under her expert guidance, MAC Capital has strengthened its outreach initiatives, nurturing trust and empowering clients with the knowledge and resources to make informed financial decisions. Her commitment to excellence continues to drive the firm's success and uphold its reputation as a trusted partner in wealth management.
                              </p>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            
         </div>
      </div>
      <!-- Modal -->
      <div class="modal" tabindex="-1" id="teamModal" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable opacity-animate3">
            <div class="modal-content">
               <div class="modal-body team">
                  <div class="d-flex justify-content-end">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="row m-0 p-0">
                     <div class="col-lg-3">
                        <img id="teamProfile" src="" class="img-fluid team-modal-image mb-3 d-block mx-auto">
                     </div>
                     <div class="col-lg-9 p-0 m-0">
                        <div class="team-model-content">
                           <!-- <h4 class="team-name" id="teamName"></h4>
                           <p class="team-modal-designation" id="teamDesignation"></p> -->
                           <div>
                              <p class="text-magenta" id="teamDetails"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
@push('scripts')
<script>
   $(document).ready(function() {
      $(".management-team-card").on("click", function() {
         var name = $(this).find(".team-name").text();
         var designation = $(this).find(".team-designation").text();
         var description = $(this).find(".team-large-desc").html();
         var imageSrc = $(this).find("img").attr("src");
         $("#teamName").text(name);
         $("#teamDesignation").text(designation);
         $("#teamDetails").html(description);
         $("#teamProfile").attr("src", imageSrc);
         $('#teamModal').modal('show');
         $(this).find('.team-large-desc').css('display', 'none');
      });
   });
</script>
@endpush