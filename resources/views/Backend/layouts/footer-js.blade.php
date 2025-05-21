<script src="{{asset('backend/assets/js/jquery-3.7.1.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/js/feather.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/js/jquery.slimscroll.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/plugins/apexchart/apexcharts.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/plugins/apexchart/chart-data.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/plugins/chartjs/chart.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/plugins/chartjs/chart-data.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/js/moment.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/plugins/select2/js/select2.min.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<!-- Custom JS -->
<script src="{{asset('backend/assets/js/theme-colorpicker.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/js/script.js')}}" type="6420e90c5e02f67c34f41542-text/javascript"></script>
<script src="{{asset('backend/assets/js/rocket-loader.min.js')}}" data-cf-settings="6420e90c5e02f67c34f41542-|49" defer></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"></script>
@stack('scripts')

@if(session()->has('success'))
<script>
    Toastify({
        text: "{{ session()->get('success') }}",
        duration: 4000,
        gravity: "top",
        position: "right",
        className: "bg-success",
        close: true,
        onClick: function() {}
    }).showToast();
</script>
@endif
@if(session()->has('error'))
<script>
    Toastify({
        text: "{{ session()->get('error') }}",
        duration: 4000,
        gravity: "top",
        position: "right",
        className: "bg-danger",
        close: true,
        onClick: function() {}
    }).showToast();
</script>
@endif


@if($errors->any())
<script>
    @foreach($errors->all() as $error)
    Toastify({
        text: "{{ $error }}",
        duration: 4000,
        gravity: "top",
        position: "right",
        className: "bg-danger",
        close: true,
        onClick: function() {}
    }).showToast();
    @endforeach
</script>
@endif