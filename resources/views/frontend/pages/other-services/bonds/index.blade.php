@extends('frontend.layouts.master')
@section('title','MAC Capital - Bonds')
@section('description', 'Bonds are a type of investment where you lend money to a company, government, or organization for a specific time.')
@section('keywords', 'What Are Bonds, How Do Bonds Work, Types of Bonds,Why Invest in Bonds, Things to Consider Before Buying Bonds')

@section('main-content')
@php
$image = asset('fronted/mac-image/other-services/bond.jpg');
$title="Bonds";
@endphp
<div class="page_header_default style_one ">

    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            <h1>{{$title}}</h1>
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
<div id="content" class="site-content left-sidebar bonds-section">
    <div class="auto-container">
        <div class="row default_row">
            <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <main id="main" class="site-main bond-page" role="main">
                    <div class="pd_top_85 mo_pd_top"></div>
                    <div class="blog_feature_image">
                        <img src="{{asset('fronted/mac-image/other-services/bonds/bond-main-img.jpg')}}" class="wp-post-image" alt="img">
                    </div>
                    <div class="pd_bottom_20"></div>
                    <div class="title_all_box style_six  dark_color">
                        <div class="title_sections">
                            <div class="title">
                                Invest in Direct Bonds online with Mac Capital to build a strong and secure portfolio!
                            </div>
                            
                        </div>
                    </div>
                    <div class="pd_bottom_20"></div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ps-0 pe-2 col-6 mb-2">
                            <div class="icon_box_all  style_eight">
                                <div class="icon_content">
                                    <div class="icon">
                                        <span class="fa fa-rupee"></span>
                                    </div>
                                    <div class="text_box">
                                        <h2>
                                            <a href="#">
                                                Fixed Income
                                            </a>
                                        </h2>
                                        <p>
                                            Guaranteed returns if held till maturity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ps-0 pe-1 col-6 mb-2">
                            <div class="icon_box_all  style_eight">
                                <div class="icon_content">
                                    <div class="icon">
                                        <span class=" icon-united"></span>
                                    </div>
                                    <div class="text_box">
                                        <h2>
                                            <a href="#">
                                                Portfolio
                                            </a>
                                        </h2>
                                        <p>
                                            Diversify with Bonds for better growth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ps-0 pe-2 col-6 mb-2">
                            <div class="icon_box_all  style_eight">
                                <div class="icon_content">
                                    <div class="icon">
                                        <span class=" icon-solution"></span>
                                    </div>
                                    <div class="text_box">
                                        <h2>
                                            <a href="#">
                                                No TDS on
                                            </a>
                                        </h2>
                                        <p>
                                            Listed Bonds
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ps-0 pe-1 col-6 mb-2">
                            <div class="icon_box_all  style_eight">
                                <div class="icon_content">
                                    <div class="icon">
                                        <span class="icon-human-resources-1"></span>
                                    </div>
                                    <div class="text_box">
                                        <h2>
                                            <a href="#">
                                                Manage Credit Risk
                                            </a>
                                        </h2>
                                        <p>
                                            Safely with Bonds
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pd_bottom_40"></div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                            <div class="icon_box_new_box type_two ">
                                <span class="borders"></span>
                                <div class="icon_box">
                                    <img src="{{asset('fronted/mac-image/other-services/bonds/what-is-bonds.png')}}" class="img-fluid svg_image"
                                        alt="What is bonds">
                                    <span class="icon_bg_rotate"></span>
                                </div>
                                <div class="content">
                                    <h2>
                                        <a href="#">What is a Bond?</a>
                                    </h2>
                                    <p>
                                        A bond is like a loan you give to a company or government. They borrow money from you for a set time and pay you interest for letting them borrow it. When the bond ends, they return the full amount you invested.
                                    </p>
                                    <!-- <a href="#" class="read_more type_two">
                                            Read More <span class="icon-arrow-right"></span>
                                        </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
                            <div class="icon_box_new_box type_two ">
                                <span class="borders"></span>
                                <div class="icon_box">
                                    <img src="{{asset('fronted/mac-image/other-services/bonds/How-to-Invest-in- Bonds.png')}}" class="img-fluid svg_image"
                                        alt="How to Invest in Bonds">
                                    <span class="icon_bg_rotate"></span>
                                </div>
                                <div class="content">
                                    <h2>
                                        <a href="#">How to Invest in Bonds?</a>
                                    </h2>
                                    <p>
                                        In two ways: through the primary market or the secondary market. In the primary market, you buy bonds directly from companies or governments when they first offer them. In the secondary market, you can buy bonds that other investors are already trading.
                                    </p>
                                    <!-- <a href="#" class="read_more type_two">
                                            Read More <span class="icon-arrow-right"></span>
                                        </a> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="pd_bottom_40"></div>
                    <div class="looking_to_invest">
                        <div class="row align-items-start">
                            <div class="col-lg-10 col-md-12">
                                <div class="title_all_box style_six dark_color">
                                    <div class="title_sections">

                                        <div class="title">
                                            <h5>Looking to Invest in Bonds with Mac Capital?</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pd_bottom_20"></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricing_plan_box type_one">
                                    <div class="pricing_plan_box_inner">
                                        <div class="upper_content">
                                            <p>
                                                Choose a bond based on your investment goals.
                                            </p>
                                        </div>

                                    </div>
                                    <div class="experience">
                                        <div class="experience_inner">
                                            <h2>Step 1: Bond Selection</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricing_plan_box type_one">
                                    <div class="pricing_plan_box_inner">
                                        <div class="upper_content">
                                            <p>
                                                Provide your KYC, bank, and demat details.
                                            </p>
                                            <p>
                                                <strong>
                                                    Call With Our Relationship Manager
                                                </strong>
                                            </p>
                                            <p>
                                                Our Bond Manager will contact you and guide you through the process.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="experience">
                                        <div class="experience_inner">
                                            <h2>Step 2: Personal Details</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricing_plan_box type_one">
                                    <div class="pricing_plan_box_inner">
                                        <div class="upper_content">
                                            <p>
                                                You will receive a detailed proposal.
                                            </p>
                                            <p>
                                                <strong>
                                                    Accept the Proposal & Pay
                                                </strong>
                                            </p>
                                            <p>
                                                Beneficiary Name: Indian Clearing Corporation
                                            </p>
                                            <p>
                                                RTGS Settlement Account: 8715962
                                            </p>
                                            <p>
                                                IFSC Code: ICLL0000001
                                            </p>
                                            <p>
                                                Banker: RBI Fort
                                            </p>
                                        </div>
                                    </div>
                                    <div class="experience">
                                        <div class="experience_inner">
                                            <h2>Step 3: Get a Quote</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricing_plan_box type_one">
                                    <div class="pricing_plan_box_inner">
                                        <div class="upper_content">
                                            <p>
                                                Once payment is confirmed, the bond will be transferred to your Demat Account.
                                            </p>
                                            <p>
                                                <strong>
                                                    Relax !
                                                </strong>
                                            </p>
                                            <p>
                                                Call us anytime when you're ready to buy or sell a new bond.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="experience">
                                        <div class="experience_inner">
                                            <h2>Step 4: Get the Bond</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="basic_bond_terminology">
                        <div class="row align-items-start">
                            <div class="col-lg-10 col-md-12">
                                <div class="title_all_box style_six dark_color">
                                    <div class="title_sections">

                                        <div class="title">
                                            <h5>Basic Bond Terminology with Mac Capital</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="testimonial_all owl_new_one bond-testimonials">
                                    <div class="owl-carousel owl_nav_block owl_dots_none owl_type_two theme_carousel owl-theme"
                                        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "2" }}}'>

                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Coupon Rate</h6>
                                                        </div>
                                                        <p>
                                                            The coupon rate is the interest rate paid by the issuer to the investor on a regular basis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Face Value</h6>
                                                        </div>
                                                        <p>
                                                            Face value is the value of the bond set by the issuer at the time of issue. It can range from as low as Rs.100 to as high as Rs.10 lakhs per bond.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Maturity Date</h6>
                                                        </div>
                                                        <p>
                                                            This is the date when the bond matures, meaning the borrower must repay the principal amount to the bondholder.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Yield to Maturity (YTM)</h6>
                                                        </div>
                                                        <p>
                                                            YTM is the return an investor will earn if they buy the bond at its current price and hold it until maturity.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Call / Put Option</h6>
                                                        </div>
                                                        <p>
                                                            A call option gives the issuer the right to redeem the bond before its maturity date. A put option gives the investor the right to sell the bond back to the issuer before its maturity date.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Perpetual Bond</h6>
                                                        </div>
                                                        <p>
                                                            A perpetual bond has no fixed maturity date. It often comes with a call option that allows the issuer to redeem the bond before a set date. If the call option is not exercised, the bond can be redeemed after certain intervals.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Yield to Call / Put (YTC / YTP)</h6>
                                                        </div>
                                                        <p>
                                                            YTC or YTP is the return an investor will earn if they buy a callable or puttable bond at the current market price and hold it until the call or put date.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-parent">
                                            <div class="testimonial_box type_two">
                                                <div class="upper_content">
                                                    <div class="description">
                                                        <div class="authour_name">
                                                            <h6>Accrued Interest</h6>
                                                        </div>
                                                        <p>
                                                            When a bond is traded between coupon dates, the buyer must pay the seller the interest due for the period since the last coupon date.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pd_bottom_40"></div>
                    </div>
                </main>
            </div>
            @include('frontend.pages.other-services.bonds.common.bonds-submenu')
        </div>
    </div>
</div>
@endsection