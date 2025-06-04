@extends('frontend.layouts.master')

@section('title', $page->meta_title ?? $page->title)
@section('description', $page->meta_description)
@section('keywords', '') {{-- Optional, you can add more meta data --}}

@section('main-content')
<div class="page_header_default style_one">
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            <h1>{{ $page->title }}</h1>
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
            {{-- Determine layout columns --}}
            @php
            $hasSidebar = $sidebarPages->isNotEmpty();
            $contentClass = $hasSidebar ? 'col-lg-8' : 'col-lg-12 full-content';
            @endphp
            <div id="primary" class="content-area service {{ $contentClass }}">
                <main id="main" class="site-main" role="main">
                    <div class="pd_top_85 mo_pd_top"></div>
                    <article class="clearfix service type-service status-publish has-post-thumbnail hentry">
                        <div class="title_all_box style_one dark_color">
                            <div class="title_sections left">
                                <!-- <h1 class="title">What Are Mutual Funds?</h1> -->
                                <div class="pd_bottom_10"></div>
                                @if($page->main_image)
                                    <div class="blog_feature_image">
                                        <img src="{{ asset('upload/page/' . $page->main_image) }}" class="wp-post-image" alt="{{ $page->title }}">
                                    </div>
                                @endif   
                                <div class="pd_bottom_20"></div>
                                <div class="why-funds dynamic_page_content">
                                     {!! $page->content !!}
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="pd_bottom_65"></div>
                </main>
                <div class="pd_top_85"></div>
            </div>

            {{-- Show sidebar only if it has items --}}
            @if($hasSidebar)
            <aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
                <div class="service_siderbar side_bar">
                    <div class="pd_top_85 mobile_finance-pa"></div>
                    <div class="widgets_grid_box">
                        <div class="widget creote_widget_service_list">
                            <h4 class="widget-title">{{ $sidebarTitle }}</h4>
                            @include('frontend.pages.dynamic-pages.sidebar.sidebar', ['sidebarPages' => $sidebarPages])
                        </div>
                    </div>
                    <div class="pd_bottom_65"></div>
                </div>
            </aside>
            @endif
        </div>
    </div>
</div>
@endsection