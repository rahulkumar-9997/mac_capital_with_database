@extends('frontend.layouts.master')
@section('title','MAC Capital - Loan Calculator')
@section('description', ' A mutual fund is a way to invest your money. Many people put their money together.')
@section('keywords', 'Finance, Loan Calculator, How It Works, Why Choose Mutual Funds, Types of Mutual Funds, Who Should Invest')
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
                            <h1>Loan Calculator</h1>
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

                                                    <div class="simple-sip-container active">
                                                        <div class="sip-amount-input-box">
                                                            <div class="sip-inner-box">
                                                                <p>Loan Amount</p>
                                                                <div class="sip-input-container">
                                                                    <span class="rupee-symbol">₹</span>
                                                                    <input type="text" class="loan-input ao-input-number" data-input-name="sipAmount" maxlength="15" placeholder="0" value="10,00,000" id="loan-input">
                                                                    <span class="clone-sip-input"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="range-sliders-container">
                                                            <!-- Interest Rate Slider -->
                                                            <div class="expected-ror-slider-container">
                                                                <div class="heading-wrapper">
                                                                    <div class="title">Interest Rate</div>
                                                                    <div class="fake-input-container">
                                                                        <input type="number" class="expected-ror-input ao-input-number" id="int-rate-txt" data-input-name="expectedROR" placeholder="0" min="1" max="30" step="0.1" value="6.5">
                                                                        <span class="clone-expected-ror-input"></span>
                                                                        <span class="symbol">%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="range-slider-wrapper">
                                                                    <label for="rate" class="visually-hidden">Interest Slider</label>
                                                                    <input type="range" aria-label="Interest Slider" min="1" max="30" value="6.5" step="0.1" class="expected-ror-range-slider ao-range-slider" data-input-name="expectedROR" id="int-rate-range">
                                                                    <div class="ranges">
                                                                        <span class="min">1%</span>
                                                                        <span class="max">30%</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Duration Slider -->
                                                            <div class="duration-slider-container">
                                                                <div class="heading-wrapper">
                                                                    <div class="title">Loan Duration</div>
                                                                    <div class="fake-input-container">
                                                                        <input type="number" class="duration-input ao-input-number" id="loan-duration-txt" data-input-name="duration" placeholder="0" min="1" max="30" value="5">
                                                                        <span class="clone-duration-input"></span>
                                                                        <span class="symbol">Yrs</span>
                                                                    </div>
                                                                </div>
                                                                <div class="range-slider-wrapper">
                                                                    <label for="duration" class="visually-hidden">Duration Slider</label>
                                                                    <input type="range" aria-label="Duration Slider" min="1" max="30" value="5" class="duration-range-slider ao-range-slider" id="loan-duration-range" data-input-name="duration">
                                                                    <div class="ranges">
                                                                        <span class="min">1 Yr</span>
                                                                        <span class="max">30 Yrs</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 ">
                                                    <div class="calc-graph-container">
                                                        <div class="content_bx">
                                                            <div class="graph">
                                                                <div class="SIP-chart-parent">
                                                                    <div class="canvas-div ebitda-chart-child">
                                                                        <canvas id="loanChart" height="257" width="257"></canvas>

                                                                    </div>
                                                                    <div class="loan-summary">
                                                                        <div class="loan-display">
                                                                            
                                                                            <div class="emi-info mb-3">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span>Monthly EMI</span>
                                                                                    <span class="emi-amount fw-bold text-dark">₹ 0</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="emi-info mb-3">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span>Principal Amount</span>
                                                                                    <span class="principal-amount fw-bold text-dark">₹ 0</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="emi-info mb-3">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span>Total Interest</span>
                                                                                    <span class="interest-amount fw-bold text-dark">₹ 0</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="emi-info">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span>Total Amount</span>
                                                                                    <span class="total-payable fw-bold text-dark">₹ 0</span>
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
<script type='text/javascript' src="{{ asset('fronted/js/pages/loan-calculator.js') }}"></script>
@endpush