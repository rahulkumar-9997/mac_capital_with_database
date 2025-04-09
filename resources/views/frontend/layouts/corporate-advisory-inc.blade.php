<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mo_pd_top"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Corporate Advisory</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('corporate-advisory/mergers') ? 'active' : ''}}" href="{{route('mergers')}}">Mergers and Aquisitions</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('corporate-advisory/divestitures') ? 'active' : ''}}"  href="{{route('divestitures')}}">Divestitures</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('corporate-advisory/capital-structuring') ? 'active' : ''}}"  href="{{route('capital-structuring')}}">Capital Structuring Advisory</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('corporate-advisory/indications-of-value') ? 'active' : ''}}" href="{{route('indications-of-value')}}">Indications of Value</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('corporate-advisory/project-structured-finance') ? 'active' : ''}}" href="{{route('project-structured-finance')}}">Project & Structured Finance</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('corporate-advisory/transaction-support') ? 'active' : ''}}"  href="{{route('transaction-support')}}">Transaction Support Services </a> 
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>