@extends('frontend.layouts.master')
@section('title','MAC Capital - SIP Calculator')
@section('description', ' A mutual fund is a way to invest your money. Many people put their money together.')
@section('keywords', 'Finance, SIP Calculator, How It Works, Why Choose Mutual Funds, Types of Mutual Funds, Who Should Invest')
@push('css')
<link rel="stylesheet" href="{{ asset('fronted/css/calculator.css') }}">
@endpush
@section('main-content')
<div class="page_header_default style_one ">
   <!-- <div class="parallax_cover">
      <img src="{{asset('fronted/mac-image/home/bread-1.jpg')}}" alt="Financial Services" class="cover-parallax">
   </div> -->
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     <h1>SIP Calculator</h1>
                  </div>
               </div>
            </div>
            <!-- <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="{{URL::to('/')}}">Home</a> </li>
                     <li class="active">Basics of Mutual Funds</li>
                  </ul>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</div>
<div id="content" class="site-content calculator-section">
   <div class="container">
      <div class="row default_row">
         <div class="full_width_box">
            <!--===============spacing==============-->
            <div class="pd_top_70"></div>

            <!--===============spacing==============-->
            <section class="tabs_all_box tabs_all_box_start type_two">
               <div class="tab_over_all_box">
                  <div class="tabs_header clearfix">
                        @include('frontend.pages.calculator.common.calculator-link')
                  </div>
                  <div class="s_tab_wrapper">
                     <div class="s_tabs_content">
                        <div class="s_tab fade active-tab show" id="sipcalculator">
                           <div class="tab_content one">
                              <div class="section-seperator-40-60">
                                 <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 mb-2 mb-lg-0 mb-xl-0 calc-options-container">
                                       <div class="returns-est-container">
                                          <div class="vector-container">
                                             <object data="{{asset('fronted/mac-image/calculator-icons.svg')}}" width="48" height="48"></object>
                                          </div>
                                          <div class="content-container">
                                             <b>Returns Estimator</b>
                                             <p class="description">Estimation is based on the past performance</p>
                                          </div>
                                       </div>
                                       <div class="simple-sip-container active">
                                          <div class="sip-amount-input-box">
                                             <div class="sip-inner-box">
                                                <p>ENTER AMOUNT</p>
                                                <div class="sip-input-container">
                                                   <span class="rupee-symbol">₹</span>
                                                   <input type="text" class="sip-input ao-input-number" data-input-name="sipAmount" maxlength="15" placeholder="0" value="5,000">
                                                   <span class="clone-sip-input"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="range-sliders-container">
                                             <div class="duration-slider-container">
                                                <div class="heading-wrapper">
                                                   <div class="title">Select Duration</div>
                                                   <div class="fake-input-container">
                                                      <input type="number" class="duration-input ao-input-number" id="duration-txt" data-input-name="duration" placeholder="0" min="1" max="30" value="5">
                                                      <span class="clone-duration-input"></span>
                                                      <span class="symbol">Yrs</span>
                                                   </div>
                                                </div>
                                                <div class="range-slider-wrapper">
                                                   <label for="username" class="visually-hidden">duration slider</label>
                                                   <input type="range" aria-label="duration slider" min="1" max="30" value="5" class="duration-range-slider ao-range-slider" id="duration" data-input-name="duration">
                                                   <div class="ranges">
                                                      <span class="min">1 Yr</span>
                                                      <span class="max">30 Yrs</span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="expected-ror-slider-container">
                                                <div class="heading-wrapper">
                                                   <div class="title">Expected Rate of Return</div>
                                                   <div class="fake-input-container">
                                                      <input type="number" class="expected-ror-input ao-input-number" id="rate-txt" data-input-name="expectedROR" placeholder="0" min="8" max="30" step="0.01" value="12">
                                                      <span class="clone-expected-ror-input"></span>
                                                      <span class="symbol">%</span>
                                                   </div>
                                                </div>
                                                <div class="range-slider-wrapper">
                                                   <label for="username" class="visually-hidden">interest slider</label>
                                                   <input type="range" aria-label="interest slider" min="8" max="30" value="12" step="0.01" class="expected-ror-range-slider ao-range-slider" data-input-name="expectedROR" id="rate">
                                                   <div class="ranges">
                                                      <span class="min">8%</span>
                                                      <span class="max">30%</span>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--  -->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 ">
                                       <div class="calc-graph-container">
                                          <div class="content_bx">
                                             <div class="opening-statement">
                                                <p>The total value of your investment after <span class="selected-years">0 Years</span> will be</p>
                                                <div class="investment-amount">
                                                   <span class="rupee-symbol">₹</span>
                                                   <span class="amount" id="SIP-total-value">0</span>
                                                </div>
                                             </div>
                                             <div class="graph">
                                                <div class="SIP-chart-parent">
                                                   <div class="canvas-div ebitda-chart-child">
                                                      <canvas id="SIPPieChart" height="257" width="257"></canvas>

                                                   </div>
                                                   <div class="SIP-chart-child" id="ebitda-val">
                                                      <div class="">
                                                         <div class="legend-parent">
                                                            <div class="legend-bg"></div>
                                                            <div class="legend-data">
                                                               <p class="legend-txt">Invested Amount</p>
                                                               <p class="legend-value SIP-initial-value">
                                                                  <span> ₹ </span>
                                                                  <span id="SIP-initial-value">0</span>
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="legend-parent">
                                                            <div class="legend-bg legend-bg-violet"></div>
                                                            <div class="legend-data">
                                                               <p class="legend-txt">Est. Returns</p>
                                                               <p class="legend-value SIP-final-val">
                                                                  <span> ₹ </span>
                                                                  <span id="SIP-final-val">0</span>
                                                               </p>
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
                        </div>

                     </div>
                  </div>
               </div>
            </section>

            <!--===============spacing==============-->
            <div class="pd_bottom_80"></div>
            <!--===============spacing==============-->
         </div>
      </div>
   </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type='text/javascript' src="{{ asset('fronted/js/pages/sip-calculator.js') }}"></script>
@endpush