<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Other Services</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('other-services/insurance-solution') ? 'active' : '' }}" href="{{ route('other-services.insurance-solution') }}">Insurance Solution</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/equity-trading') ? 'active' : '' }}" href="{{ route('other-services.equity-trading') }}">Equity Trading</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/bonds') ? 'active' : '' }}" href="{{ route('other-services.bonds') }}">Bonds</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/global-investments') ? 'active' : '' }}" href="{{ route('other-services.global-investments') }}">Global Investments</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/loans') ? 'active' : '' }}" href="{{ route('other-services.loans') }}">Loans</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
