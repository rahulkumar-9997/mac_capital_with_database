<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mobile_finance-pa"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Types of Mutual Funds</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/sectoral-mutual-funds') ? 'active' : '' }}" href="{{ route('types.sectoral-mutual-funds') }}">
                            Sectoral Mutual Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/tax-saving-mutual-fund') ? 'active' : '' }}" href="{{ route('types.tax-saving-mutual-fund') }}">
                            Tax Saving Mutual Fund
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/small-cap-mutual-funds') ? 'active' : '' }}" href="{{ route('types.small-cap-mutual-funds') }}">
                            Small Cap Mutual Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/liquid-funds') ? 'active' : '' }}" href="{{ route('types.liquid-funds') }}">
                            Liquid Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/debt-funds') ? 'active' : '' }}" href="{{ route('types.debt-funds') }}">
                            What are the various types of debt funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/arbitrage-funds') ? 'active' : '' }}" href="{{ route('types.arbitrage-funds') }}">
                            What are Arbitrage Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types/hybrid-funds') ? 'active' : '' }}" href="{{ route('types.hybrid-funds') }}">
                            What is a Hybrid Fund
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pd_bottom_65"></div>
    </div>
</aside>