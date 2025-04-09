<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Insurance Solution</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('other-services/insurance-solution/term-insurance') ? 'active' : '' }}" href="{{ route('other-services.insurance-solution.term-insurance') }}">Term Insurance</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/insurance-solution/life-insurance') ? 'active' : '' }}" href="{{ route('other-services.insurance-solution.life-insurance') }}">Life Insurance</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/insurance-solution/health-insurance') ? 'active' : '' }}" href="{{ route('other-services.insurance-solution.health-insurance') }}">Health Insurance</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/insurance-solution/car-and-bike-insurance') ? 'active' : '' }}" href="{{ route('other-services.insurance-solution.car-bike-insurance') }}">Car and Bike Insurance</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/insurance-solution/business-insurance') ? 'active' : '' }}" href="{{ route('other-services.insurance-solution.business-insurance') }}">Business Insurance</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
