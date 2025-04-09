<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mobile_finance-pa"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Reasons to Invest</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest/why-invest-in-mutual-funds') ? 'active' : '' }}" 
                           href="{{ route('reasons-to-invest.why-invest-in-mutual-funds') }}">
                            Why Should One Invest in Mutual Funds?
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest/early-investing-benefits') ? 'active' : '' }}" 
                           href="{{ route('reasons-to-invest.early-investing-benefits') }}">
                            Five Reasons to Start Investing at an Early Age
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest/starting-age') ? 'active' : '' }}" 
                           href="{{ route('reasons-to-invest.starting-age') }}">
                            At What Age Should one Start Investing?
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest/gold-etf') ? 'active' : '' }}" 
                           href="{{ route('reasons-to-invest.gold-etf') }}">
                            What is a Gold ETF, and How do You Invest in it?
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest/investment-plans') ? 'active' : '' }}" 
                           href="{{ route('reasons-to-invest.investment-plans') }}">
                            Long Term and Short-Term Investment Plans for Your choice
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest/ppf-vs-mutual-funds') ? 'active' : '' }}" 
                           href="{{ route('reasons-to-invest.ppf-vs-mutual-funds') }}">
                            PPF vs Mutual Funds
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
