<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Global Investments</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('other-services/global-investments/how-to-invest-in-global-market') ? 'active' : '' }}" href="{{ route('other-services.global-investments.how-to-invest') }}">How to Invest in Global Market</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/global-investments/top-global-stock-markets') ? 'active' : '' }}" href="{{ route('other-services.global-investments.top-global-markets') }}">Top Global Stock Markets</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/global-investments/risk-in-global-investments') ? 'active' : '' }}" href="{{ route('other-services.global-investments.risk') }}">Risk in Global Investments</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/global-investments/investing-in-us-markets') ? 'active' : '' }}" href="{{ route('other-services.global-investments.investing-in-us') }}">Investing in US Markets</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/global-investments/tax-implications-of-global-investments') ? 'active' : '' }}" href="{{ route('other-services.global-investments.tax-implications') }}">Tax Implications of Global Investments</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
