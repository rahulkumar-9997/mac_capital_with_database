<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mobile_finance-pa"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Mutual Funds Tools</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools/lumpsum-calculator') ? 'active' : '' }}" href="{{ route('tools.lumpsum-calculator') }}">Lumpsum Calculator</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools/sip-calculator') ? 'active' : '' }}" href="{{ route('tools.sip-calculator') }}">SIP Calculator</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools/stp') ? 'active' : '' }}" href="{{ route('tools.stp') }}">STP</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools/swp') ? 'active' : '' }}" href="{{ route('tools.swp') }}">SWP</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools/goal-planning') ? 'active' : '' }}" href="{{ route('tools.goal-planning') }}">Goal Planning</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools/power-of-compounding') ? 'active' : '' }}" href="{{ route('tools.power-of-compounding') }}"> Power of Compounding</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>