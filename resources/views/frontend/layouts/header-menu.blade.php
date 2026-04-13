<!----header----->
<div class="header_area" id="header_contents">
    <!-- <div class="top_bar style_one d-none d-lg-block">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="top_inner">
                        <div class="left_side common_css">
                            
                            <div class="contntent email">
                                <i class="icon-placeholder"></i>
                                <div class="text">
                                    <small>Location</small>
                                    <span>217, Platinum Techno Park Sector-30A, Vashi Navi Mumbai</span>,

                                </div>
                            </div>
                        </div>
                        <div class="right_side common_css">
                            <div class="contntent phone">
                                <i class="icon-phone-call"></i>
                                <div class="text">
                                    <small>Phone</small>
                                    <a href="tel:+91-2222042839">+91-2222042839</a>,
                                    <a href="tel:+91-2222841007">+91-2222841007</a>
                                </div>
                            </div>
                            <div class="contntent media">
                                <i class="icon-share"></i>
                                <div class="text">
                                    <small>Social Links</small>
                                    <a href="https://www.facebook.com/MACCapitalLtd" target=_blank rel=nofollow>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" target=_blank rel=nofollow>
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#" target=_blank rel=nofollow>
                                        <i class="fa fa-youtube"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <header class="header header_default style_one get_sticky_header">
        <!-- <div class="auto-container"> -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 logo_column">
                    <div class="header_logo_box">
                        <a href="{{URL::to('/')}}" class="logo navbar-brand">
                            <img src="{{asset('fronted/mac-image/logo/mac-capital-logo.png')}}" alt="Mac Capital Logo" class="logo_default">
                            <img src="{{asset('fronted/mac-image/logo/mac-capital-logo.png')}}" alt="Mac Capital Logo" class="logo__sticky">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3 menu_column">
                    <div class="navbar_togglers hamburger_menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="header_content_collapse">
                        <div class="header_menu_box">
                            <div class="navigation_menu">
                                <ul id="myNavbar" class="navbar_nav">
                                    <li class="menu-item  nav-item">
                                        <a href="{{URL::to('/')}}" class="dropdown-item nav-link">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-item  nav-item">
                                        <a href="{{route('about-us')}}" class="dropdown-item nav-link">
                                            <span>About Us</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                        <a href="{{ route('mutual-funds') }}" class="dropdown-toggle nav-link">
                                            <span>Mutual Funds</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('basics') }}" class="dropdown-item nav-link">
                                                    <span>Basics of Mutual Funds</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('types') }}" class="dropdown-item nav-link">
                                                    <span>Types of Mutual Funds</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('tools') }}" class="dropdown-item nav-link">
                                                    <span>Mutual Funds Tools</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('reasons-to-invest') }}" class="dropdown-item nav-link">
                                                    <span>Reasons to Invest</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <!-- <li
                              class="menu-item menu-item-has-children dropdown nav-item">
                              <a href="{{route('corporate-advisory')}}" class="dropdown-toggle nav-link">
                              <span>SME IPOs</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="menu-item nav-item">
                                    <a href="{{route('mergers')}}" class="dropdown-item nav-link">
                                    <span>Mergers and Aquisitions</span>
                                    </a>
                                 </li>
                                 <li class="menu-item nav-item">
                                    <a href="{{route('divestitures')}}" class="dropdown-item nav-link">
                                    <span>Divestitures</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('capital-structuring')}}" class="dropdown-item nav-link">
                                    <span>Capital Structuring Advisory</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('indications-of-value')}}" class="dropdown-item nav-link">
                                    <span>Indications of Value</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('project-structured-finance')}}" class="dropdown-item nav-link">
                                    <span>Project & Structured Finance</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('transaction-support')}}" class="dropdown-item nav-link">
                                    <span>Transaction Support Services </span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </li> -->
                                    <li class="menu-item  nav-item">
                                        <a href="{{route('sme-ipos')}}" class="dropdown-item nav-link">
                                            <span>SME IPOs</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                        <a href="{{ route('other-services') }}" class="dropdown-toggle nav-link">
                                            <span>Other Services</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="menu-item nav-item">
                                                <a href="{{route('calculators.sip-calculator')}}" class="dropdown-item nav-link">
                                                    <span>SIP Calculator</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('other-services.insurance-solution') }}" class="dropdown-item nav-link">
                                                    <span>Insurance Solution</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('other-services.equity-trading') }}" class="dropdown-item nav-link">
                                                    <span>Equity Trading</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('other-services.bonds') }}" class="dropdown-item nav-link">
                                                    <span>Bonds</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('other-services.global-investments') }}" class="dropdown-item nav-link">
                                                    <span>Global Investments</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('other-services.loans') }}" class="dropdown-item nav-link">
                                                    <span>Loans</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('other-services.ekyc') }}" class="dropdown-item nav-link">
                                                    <span>EKYC</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="{{ route('unlisted-shares') }}" class="dropdown-item nav-link">
                                                    <span>Unlisted Shares List</span>
                                                </a>
                                            </li>                                            
                                        </ul>
                                    </li>
                                    <li class="menu-item  nav-item d-md-block d-lg-none">
                                        <a href="{{route('contact-us')}}" class="dropdown-item nav-link">
                                            <span>Contact Us</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_right_content">
                            <ul>
                                <li class="header-button">
                                    <a href="{{route('contact-us')}}" class="theme-btn one"> Get In Touch </a>
                                </li>
                                <li>
                                 <div class="med_rg_side">
                                    <ul class="social_media_head">
                                       <li> 
                                            <a href="https://www.facebook.com/share/1B7YaRkeZX/" target="_blank" rel="nofollow">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                       </li>
                                       <li>
                                            <a href="https://www.linkedin.com/company/mac-capital-services-p-ltd/" target="_blank" rel="nofollow">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                       </li>
                                       <li> 
                                            <a href="https://www.instagram.com/maccapitalltd?igsh=MWNwd3d1djI3aGEzYg==" target="_blank" rel="nofollow">
                                                <i class="fa fa-instagram"></i>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<!----header end----->