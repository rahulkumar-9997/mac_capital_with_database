<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Loans</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('other-services/loans/home-loan') ? 'active' : '' }}" href="{{ route('other-services.loans.home-loan') }}">Home Loan</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/loans/business-loan') ? 'active' : '' }}" href="{{ route('other-services.loans.business-loan') }}">Business Loan</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/loans/personal-loan') ? 'active' : '' }}" href="{{ route('other-services.loans.personal-loan') }}">Personal Loan</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/loans/term-loan') ? 'active' : '' }}" href="{{ route('other-services.loans.term-loan') }}">Term Loan</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/loans/car-loan') ? 'active' : '' }}" href="{{ route('other-services.loans.car-loan') }}">Car Loan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
