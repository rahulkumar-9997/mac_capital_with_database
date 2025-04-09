<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mobile_finance-pa"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Basics of Mutual Funds</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/what-is') ? 'active' : '' }}" href="{{ route('basics.what-is') }}">
                            What is a Mutual Fund
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/ways-of-investing') ? 'active' : '' }}" href="{{ route('basics.ways-of-investing') }}">
                            Ways of Investing in Mutual Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/investing-better-than-saving') ? 'active' : '' }}" href="{{ route('basics.investing-better-than-saving') }}">
                            Investing Better than Saving
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/retirement-funds') ? 'active' : '' }}" href="{{ route('basics.retirement-funds') }}">
                            Retirement Mutual Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/equity-funds') ? 'active' : '' }}" href="{{ route('basics.equity-funds') }}">
                            Equity Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/debt-funds') ? 'active' : '' }}" href="{{ route('basics.debt-funds') }}">
                            Debt Funds
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics/index-funds') ? 'active' : '' }}" href="{{ route('basics.index-funds') }}">
                            Index Funds
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>