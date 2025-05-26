<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.layouts.head')
    </head>
    <body>
        <!-- <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div> -->
        <div class="main-wrapper">
            @include('backend.layouts.header')
            @include('backend.layouts.sidebar')
            <div class="page-wrapper">
			    <div class="content-section">
                    @yield('main-content')
                </div>
                @include('backend.layouts.footer')
            </div>
        </div>
        @include('backend.layouts.footer-js')        
    </body>
</html>