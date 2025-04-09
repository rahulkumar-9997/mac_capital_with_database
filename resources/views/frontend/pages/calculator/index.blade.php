@extends('frontend.layouts.master')
@section('title','MAC Capital - Basics of Mutual Funds')
@section('description', ' A mutual fund is a way to invest your money. Many people put their money together.')
@section('keywords', 'Finance, Basics of Mutual Funds, How It Works, Why Choose Mutual Funds, Types of Mutual Funds, Who Should Invest')
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
                            <h1>Calculators</h1>
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
<div id="content" class="site-content ">
    <section class="service-section bg_light_1">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container calculator-div">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                            <div class="before_title">Leading</div>
                            <h2>Effective Solutions</h2>
                            <p>We work with your company to identify position requirements, implement
                                recruitment programs, and <br> initiate employee assessments that maximize
                                recruitment efforts</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="service_section grid_all three_column  news_wrapper_grid dark_color">
                        <div class="grid_show_case grid_layout1 clearfix row justify-content-center">
                            <div class="col-lg-4">
                                <div class="grid_box _card">
                                    <div class="service_post style_four">
                                        <a href="{{route('calculators.sip-calculator')}}">
                                            <div class="content_in_box">
                                                <div class="icon_box">
                                                    <span class="icon fa fa-calculator icons"></span>
                                                </div>
                                                <span class="icon fa fa-calculator bg_im"></span>
                                                <div class="content_box ">
                                                    <h2 class="title_service calculator-h2">
                                                        <span>SIP Calculator</span> 
                                                    </h2>
                                                    <p class="short_desc">
                                                        A SIP calculator shows how small monthly investments can grow over time. It helps you plan for goals like education, retirement, or buying a home by estimating the future value of your investments. It’s simple and helps you make better financial choices.  
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grid_box _card">
                                    <div class="service_post style_four">
                                        <a href="{{route('calculators.lumpsum-calculator')}}">
                                            <div class="content_in_box">
                                                <div class="icon_box">
                                                    <span class="icon fa fa-calculator icons"></span>
                                                </div>
                                                <span class="icon fa fa-calculator bg_im"></span>
                                                <div class="content_box ">
                                                    <h2 class="title_service calculator-h2">
                                                        <span>Lumpsum Calculator</span> 
                                                    </h2>
                                                    <p class="short_desc">
                                                    A lumpsum calculator helps you estimate the growth of a one-time investment. It’s perfect for planning long-term goals like wealth creation or future savings. By entering the amount, time, and expected returns, you can see how your money will grow over time.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grid_box _card">
                                    <div class="service_post style_four">
                                        <a href="{{route('calculators.swp-calculator')}}">
                                            <div class="content_in_box">
                                                <div class="icon_box">
                                                    <span class="icon fa fa-calculator icons"></span>
                                                </div>
                                                <span class="icon fa fa-calculator bg_im"></span>
                                                <div class="content_box ">
                                                    <h2 class="title_service calculator-h2">
                                                        <span>SWP Calculator</span> 
                                                    </h2>
                                                    <p class="short_desc">
                                                    An SWP calculator helps you plan regular withdrawals from your investment while keeping funds invested. It’s ideal for steady income needs, especially during retirement, and helps you manage your finances efficiently. 
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grid_box _card">
                                    <div class="service_post style_four">
                                        <a href="{{route('calculators.loan-emi-calculator')}}">
                                            <div class="content_in_box">
                                                <div class="icon_box">
                                                    <span class="icon fa fa-calculator icons"></span>
                                                </div>
                                                <span class="icon fa fa-calculator bg_im"></span>
                                                <div class="content_box ">
                                                    <h2 class="title_service calculator-h2">
                                                        <span>Loan Calculator</span> 
                                                    </h2>
                                                    <p class="short_desc">
                                                    A Loan Calculator helps you estimate your monthly EMI, total interest, and overall repayment. It’s useful for planning loans like home, car, or personal loans and helps you manage your finances with clarity and confidence. 
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_60"></div>
        <!--===============spacing==============-->
    </section>
</div>
@endsection