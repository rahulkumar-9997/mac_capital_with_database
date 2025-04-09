@extends('frontend.layouts.master')
@section('title','MAC Capital :: EKYC')
@section('description', 'We enjoy strategic alliance and close association with many direct investors, hedge funds, private equity funds')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')

@section('main-content')
@php
$image = asset('fronted/mac-image/sme-ipo/hem_sme_ipo.png');
$title="Explore SME IPO with Mac Capital";
@endphp
<!-- <div class="page_header_default style_one ">

   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     <h1>SME IPOs</h1>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</div> -->
<div id="content" class="site-content ekyc-content">
    <section class="single_banner style_one bg_op_1 sme-ipo" style="background: linear-gradient(to bottom, #63bee2 -18%, #f9f9f9 63%);">
        <div class="auto-container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <!--===============spacing==============-->
                    <div class="pd_top_20"></div>
                    <!--===============spacing==============-->
                    <div class="slider_content light_color">
                        <h6>Pan-Based EKYC for Mutual Funds</h6>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_5"></div>
                        <!--===============spacing==============-->
                        <h1>Start investing in 3 easy steps.<br>
                            Complete your KYC from the comfort of your home.</h1>
                        <p class="description">
                            Check your KYC status:
                            <a href="https://camskra.com/" target="_blank">Click Here</a>
                        </p>
                        <p class="description">
                            CVL KRA:
                            <a href="https://validate.cvlindia.com/CVLKRAVerification_V1/" target="_blank">Click Here</a>
                        </p>
                        <p class="description">
                            NDML KRA:
                            <a href="https://kra.ndml.in/kra/ckyc/#/initiate" target="_blank">Click Here</a>
                        </p>
                        <p class="description">
                            CAMS KRA:
                            <a href="https://www.camskra.com/pandetailsupdate.aspx" target="_blank">Click Here</a>
                        </p>
                        <p class="description">
                            KARVY KRA:
                            <a href="https://www.karvykra.com/KYC_Validation/Default.aspx" target="_blank">Click Here</a>
                        </p>

                        <!-- <div class="theme_btn_all color_one enquiry-now">
                     <a href="javascript:void(0);" data-ajax-popup="true" data-img="{{$image}}" rel="nofollow" data-pagetitle="{{$title}}" data-currenturl="{{ url()->current() }}" data-url="{{route('each-contact')}}" class="theme-btn one page-enquiry-btn">Enquiry Now</a>
                  </div> -->

                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_10"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="col-lg-6 hidden-md image_column">
                    <div class="slider_image margin_extra_image1">
                        <img src="{{ asset('fronted/mac-image/ekyc/ekyc-top.png') }}" class="img-fluid" alt="slider image">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="process-section">
        <!--===============spacing==============-->
        <div class="pd_top_30"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-12 col-md-4 pd_zero">
                    <div class="icon_box_all style_nine  border_r_0">
                        <div class="icon_content">
                            <div class="text_box">
                                <div class="ef_banner_strip_inner_each--icon">
                                    01
                                </div>
                                <h2><a href="#">Fill out the Online Application</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 col-md-4 pd_zero">
                    <div class="icon_box_all style_nine bg_light_2 border_r_0">
                        <div class="icon_content">

                            <div class="text_box">
                                <div class="ef_banner_strip_inner_each--icon">
                                    02
                                </div>
                                <h2><a href="#">Upload Scanned Copies of Documents</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 col-md-4 pd_zero">
                    <div class="icon_box_all style_nine  border_r_1">
                        <div class="icon_content">

                            <div class="text_box">
                                <div class="ef_banner_strip_inner_each--icon">
                                    03
                                </div>
                                <h2><a href="#"> Confirm your identity via Digilocker</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_30"></div>
        <!--===============spacing==============-->
    </section>
    <section class="service-section bg_light_1 document-section">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title_all_box style_five dark_color">
                        <div class="title_sections five">
                            <h2>
                                Please have the following documents ready before starting the KYC process.
                                The accepted documents for KYC are listed below:
                            </h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-3">
                    <div class="icon_box_all style_one">
                        <div class="icon_content icon_centers">
                            <div class="icon">
                                <img src="{{ asset('fronted/mac-image/ekyc/id-proof.svg') }}" alt="ID Proof">
                            </div>
                            <div class="txt_content">
                                <h3>
                                    <a href="#" target="_blank" rel="nofollow">ID Proof</a>
                                </h3>
                                <p>PAN Card (Front Side)</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="col-xl-6 col-lg-6 mb-3">
                    <div class="icon_box_all style_one">
                        <div class="icon_content icon_centers ">
                            <div class="icon">
                                <img src="{{ asset('fronted/mac-image/ekyc/Signature.svg') }}" alt="Signature Scan">
                            </div>
                            <div class="txt_content">
                                <h3><a href="#" target="_blank" rel="nofollow">Signature Scan</a></h3>
                                <p>A clear image of your signature on a blank sheet of paper</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="col-xl-6 col-lg-6 mb-3">
                    <div class="icon_box_all style_one">
                        <div class="icon_content icon_centers ">
                            <div class="icon">
                                <img src="{{ asset('fronted/mac-image/ekyc/Address.svg') }}" alt="Address Proof">
                            </div>
                            <div class="txt_content">
                                <h3><a href="#" target="_blank" rel="nofollow">Address Proof</a></h3>
                                <ul>
                                    <li>
                                        Aadhar Card (Front & Back Side)
                                    </li>
                                    <li>
                                        Driving License (Front & Back Side)
                                    </li>
                                    <li>
                                        Voter ID (Front & Back Side)
                                    </li>
                                    <li>
                                        Passport
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
            </div>

        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_70"></div>
        <!--===============spacing==============-->
    </section>

</div>


@endsection