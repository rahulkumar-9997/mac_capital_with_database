<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Equity Trading</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('other-services/equity-trading/equity-trading-vs-investing') ? 'active' : '' }}" href="{{ route('other-services.equity-trading.vs-investing') }}">Equity Trading vs Investing</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/equity-trading/open-a-demat-account') ? 'active' : '' }}" href="{{ route('other-services.equity-trading.open-demat-account') }}">Open a Demat Account</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/equity-trading/technical-and-fundamental-analysis') ? 'active' : '' }}" href="{{ route('other-services.equity-trading.technical-fundamental-analysis') }}">Technical & Fundamental Analysis</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/equity-trading/sectors-to-watch-in-2025') ? 'active' : '' }}" href="{{ route('other-services.equity-trading.sectors-to-watch') }}">Sectors to Watch in 2025</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('other-services/equity-trading/manage-risk-in-equity-trading') ? 'active' : '' }}" href="{{ route('other-services.equity-trading.manage-risk') }}">Manage Risk in Equity Trading</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>
