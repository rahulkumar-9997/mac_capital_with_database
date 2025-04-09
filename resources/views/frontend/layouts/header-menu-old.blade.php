<!----header----->
<div class="header_area" id="header_contents">
   <div class="top_bar style_one d-none d-lg-block">
      <div class="auto-container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <div class="top_inner">
                  <div class="left_side common_css">
                     <!--<div class="contntent address">
                        <i class="icon-placeholder"></i>
                        <div class="text">
                           <small>Location</small>
                           <span>61W Business Str Hobert, LA </span>
                        </div>
                     </div>-->
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
   </div>
   <header class="header header_default style_one get_sticky_header">
      <div class="auto-container">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 logo_column">
               <div class="header_logo_box">
                  <a href="{{URL::to('/')}}" class="logo navbar-brand">
                  <img src="{{asset('fronted/mac-image/logo/mac-capital-logo.png')}}" alt="Creote Elementor" class="logo_default">
                  <img src="{{asset('fronted/mac-image/logo/mac-capital-logo.png')}}" alt="Creote Elementor" class="logo__sticky">
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
                           <li
                              class="menu-item menu-item-has-children dropdown nav-item">
                              <a href="{{route('financial-services')}}" class="dropdown-toggle nav-link">
                              <span>Financial Services</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('multi-facetedstyle')}}" class="dropdown-item nav-link">
                                    <span>Multi Faceted Style</span>
                                    </a>
                                 </li>
                                 
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('capital-raising')}}" class="dropdown-item nav-link">
                                    <span>Capital Raising</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('privateequity-placement')}}" class="dropdown-item nav-link">
                                    <span>Private Equity Placement</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('internationaldebt-solution')}}" class="dropdown-item nav-link">
                                    <span>International Debt Solutions</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('internationalstructured-solution')}}" class="dropdown-item nav-link">
                                    <span>International Structured Finance Solutions</span>
                                    </a>
                                 </li>
                                 <li class="menu-item  nav-item">
                                    <a href="{{route('international-m-and-s-services')}}" class="dropdown-item nav-link">
                                    <span>International M & S Services</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           
                           <li
                              class="menu-item menu-item-has-children dropdown nav-item">
                              <a href="{{route('corporate-advisory')}}" class="dropdown-toggle nav-link">
                              <span>Corporate Advisory</span>
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
                           </li>
                           <li class="menu-item  nav-item">
                              <a href="{{route('partnerships')}}" class="dropdown-item nav-link">
                              <span>Partnership</span>
                              </a>
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
                           <a href="{{route('contact-us')}}"  class="theme-btn one"> Get In Touch </a>
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
