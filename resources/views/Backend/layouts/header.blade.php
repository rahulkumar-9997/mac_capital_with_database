<!-- Header -->
<div class="header">
   <div class="main-header">
      <!-- Logo -->
      <div class="header-left active">
         <a href="{{ route('dashboard') }}" class="logo logo-normal">
            <img src="{{asset('backend/assets/mac-img/mac-capital-logo.png')}}" alt="Img">
         </a>
         <a href="{{ route('dashboard') }}" class="logo logo-white">
            <img src="{{asset('backend/assets/mac-img/mac-capital-logo.png')}}" alt="Img">
         </a>
         <a href="{{ route('dashboard') }}" class="logo-small">
            <img src="{{asset('backend/assets/mac-img/fav-icon.png')}}" alt="Img">
         </a>
      </div>
      <!-- /Logo -->
      <a id="mobile_btn" class="mobile_btn" href="#sidebar">
         <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
         </span>
      </a>
      <ul class="nav user-menu">
         <li class="nav-item pos-nav">
            <a href="{{ route('clear-cache') }}" class="btn btn-dark btn-md d-inline-flex align-items-center">
               <i class="ti ti-device-laptop me-1"></i>Clear Cache
            </a>
         </li>
         <li class="nav-item dropdown nav-item-box">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
               <i class="ti ti-bell"></i>
            </a>
            <!-- <div class="dropdown-menu notifications">
               <div class="topnav-dropdown-header">
                  <h5 class="notification-title">Notifications</h5>
                  <a href="javascript:void(0)" class="clear-noti">Mark all as read</a>
               </div>
               <div class="noti-content">
                  <ul class="notification-list">
                     <li class="notification-message">
                        <a href="activities.html">
                           <div class="media d-flex">
                              <span class="avatar flex-shrink-0">
                                 <img alt="Img" src="{{asset('backend/assets/img/profiles/avatar-13.jpg')}}">
                              </span>
                              <div class="flex-grow-1">
                                 <p class="noti-details"><span class="noti-title">James Kirwin</span> confirmed his order. Order No: #78901.Estimated delivery: 2 days</p>
                                 <p class="noti-time">4 mins ago</p>
                              </div>
                           </div>
                        </a>
                     </li>
                     
                  </ul>
               </div>
               <div class="topnav-dropdown-footer d-flex align-items-center gap-3">
                  <a href="#" class="btn btn-secondary btn-md w-100">Cancel</a>
                  <a href="activities.html" class="btn btn-primary btn-md w-100">View all</a>
               </div>
            </div> -->
         </li>
         <li class="nav-item dropdown has-arrow main-drop profile-nav">
            <a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
               <span class="user-info p-0">
                  <span class="user-letter">
                     <img src="{{asset('backend/assets/img/profiles/avator1.jpg')}}" alt="Img" class="img-fluid">
                  </span>
               </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
               <div class="profileset d-flex align-items-center">
                  <span class="user-img me-2">
                     @if(Auth::user()->profile_img)
                        <img src="{{ asset('profile-images/'.Auth::user()->profile_img) }}" alt="">
                     @else
                        <img src="{{asset('backend/assets/img/profiles/avator1.jpg')}}" alt="Img">
                     @endif
                     
                  </span>
                  <div>
                     <h6 class="fw-medium">{{auth()->user()->name ?? ''}}</h6>
                     <p>{{auth()->user()->user_id ?? ''}}</p>
                  </div>
               </div>
               <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="ti ti-user-circle me-2"></i>MyProfile</a>
               
               <hr class="my-2">
               <a class="dropdown-item logout pb-0" href="{{ route('logout')}}"><i class="ti ti-logout me-2"></i>Logout</a>
            </div>
         </li>
      </ul>
      <!-- /Header Menu -->

      <!-- Mobile Menu -->
      <div class="dropdown mobile-user-menu">
         <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
         <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
         </div>
      </div>
      <!-- /Mobile Menu -->
   </div>
</div>
<!-- /Header -->