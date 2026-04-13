@extends('frontend.layouts.master')
@section('title','MAC Capital :: Unlisted Shares List')
@section('description', 'MAC Capital is dedicated in providing optimum solutions to its clients’ financing needs that comes with years ')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac Unlisted Shares List')
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
                        <h1> Unlisted Shares List</h1>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="content" class="site-content">   
   <section class="unlisted-shares-sectio">
        <div class="pd_top_60"></div>
        <div class="container">            
            <div class="row">
                @include('frontend.pages.unlisted-shares.partials.table', ['lists' => $lists])
            </div>
        </div> 
        <div class="pd_top_60"></div>       
   </section>  
</div>
@endsection
@push('scripts')

@endpush