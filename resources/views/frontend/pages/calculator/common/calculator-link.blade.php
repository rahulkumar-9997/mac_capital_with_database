<ul class="showcase_tabs_btns nav-pills nav clearfix">
    <li class="nav-item">
        <a
            class="s_tab_btn1 nav-link {{ request()->is('calculators/sip-calculator') ? 'active' : '' }}"
            href="{{ route('calculators.sip-calculator') }}">
            SIP Calculator
        </a>
    </li>
    <li class="nav-item">
        <a
            class="s_tab_btn1 nav-link {{ request()->is('calculators/lumpsum-calculator') ? 'active' : '' }}"
            href="{{ route('calculators.lumpsum-calculator') }}">
            Lumpsum Calculator
        </a>
    </li>
    <li class="nav-item">
        <a
            class="s_tab_btn1 nav-link {{ request()->is('calculators/swp-calculator') ? 'active' : '' }}"
            href="{{ route('calculators.swp-calculator') }}">
            SWP Calculator
        </a>
    </li>
    <li class="nav-item">
        <a
            class="s_tab_btn1 nav-link {{ request()->is('calculators/loan-emi-calculator') ? 'active' : '' }}"
            href="{{ route('calculators.loan-emi-calculator') }}">
            Loan/EMI Calculator
        </a>
    </li>
</ul>