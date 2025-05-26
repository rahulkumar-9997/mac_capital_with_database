<!doctype html>
<html lang="en-US">
	<head>
		@include('frontend.layouts.headcss')
		@stack('styles')
	</head>
    <body class="theme-creote">
		<div id="page" class="page_wapper hfeed site">
			<div id="wrapper_full" class="content_all_warpper">
				@include('frontend.layouts.header-menu')
				@yield('main-content')
			</div>
			@include('frontend.layouts.footer')
		</div>
		@include('frontend.layouts.progress-indicator')
		@include('frontend.layouts.modal')
		@include('frontend.layouts.footerjs')
		@stack('scripts')
	</body>
</html>