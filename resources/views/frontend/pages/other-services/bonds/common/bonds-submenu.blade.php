<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Bonds</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('other-services/bonds/beginners-guide-to-bonds') ? 'active' : '' }}" href="{{ route('other-services.bonds.beginners-guide') }}">Beginner's Guide to Bonds</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/bonds/government-bonds') ? 'active' : '' }}" href="{{ route('other-services.bonds.government-bonds') }}">Government Bonds</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/bonds/corporate-bonds') ? 'active' : '' }}" href="{{ route('other-services.bonds.corporate-bonds') }}">Corporate Bonds</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/bonds/difference-between-bonds-and-stocks') ? 'active' : '' }}" href="{{ route('other-services.bonds.difference-bonds-stocks') }}">Difference Between Bonds and Stocks</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/bonds/yield-maturity-interest-rates-in-bonds') ? 'active' : '' }}" href="{{ route('other-services.bonds.yield-maturity-interest-rates') }}">Yield, Maturity, and Interest Rates in Bonds</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
