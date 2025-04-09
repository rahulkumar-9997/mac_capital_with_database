<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mobile_finance-pa"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Mutual Funds</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('mutual-funds/basics') ? 'active' : ''}}" href="{{route('basics')}}">Basics of Mutual Funds</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/types') ? 'active' : ''}}"  href="{{route('types')}}">Types of Mutual Funds</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/tools') ? 'active' : ''}}" href="{{route('tools')}}">
                        Mutual Funds Tools
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mutual-funds/reasons-to-invest') ? 'active' : ''}}" href="{{route('reasons-to-invest')}}">
                        Reasons to Invest
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>