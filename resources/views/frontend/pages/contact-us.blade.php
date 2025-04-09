@extends('frontend.layouts.master')
@section('title','MAC Capital :: Contact Us')
@section('description', 'We enjoy strategic alliance and close association with many direct investors, hedge funds, private equity funds')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')

@section('main-content')
<div class="page_header_default style_one ">
   
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                    <h1>Contact Us</h1>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</div>
<div id="content" class="site-content">
<section class="contact-section">
   <!--===============spacing==============-->
   <div class="pd_top_90"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-4 col-lg-4 mb-5 mb-lg-4 mb-xl-0">
            <div class="contact_form_box_all type_one">
               <div class="contact_form_box_inner">
                  <div class="contact_form_shortcode">
                     <form id="contact-form" method="post" action="{{route('contact-us.store')}}" role="form">
                        @csrf
                        <div class="controls">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <!-- <label> Your Name<br /></label> -->
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name *">
                                    @if($errors->has('name'))
                                       <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <!-- <label> Your Email<br /></label> -->
                                    <input type="text" name="email"  value="{{ old('email') }}"  placeholder="Email *">
                                    @if($errors->has('email'))
                                       <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <!-- <label>Phone Number<br /></label> -->
                                    <input type="text" name="phone" value="{{ old('phone') }}"   placeholder="Phone number *" maxlength="10">
                                    @if($errors->has('phone'))
                                       <div class="text-danger">{{ $errors->first('phone') }}</div>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <!-- <label> Your Subject<br /></label> -->
                                    <input type="text" name="subject" value="{{ old('subject') }}"  placeholder=" Subject  (Optional)">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <!-- <label> Your Message<br /></label> -->
                                    <textarea name="message" placeholder="Additional Information... (Optional) " rows="3" ></textarea>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group mg_top apbtn">
                                    <button class="theme_btn" type="submit">Appointment</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-8 col-lg-8 pd_left_0">
            <div class="row">
               <!-- <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">
                     <div class="before_title">Contact Info to</div> -->
                     <!-- <h2>Reach Our Expert Team</h2> -->
                  <!-- <p>Send a message through given form, If your enquiry is time sensitive please use below
                        contact details.
                     </p>
                  </div>
               </div> -->
               <!-- <div class="contact_box_content style_one contact-us-box">
                  <div class="contact_box_inner icon_yes">
                     <div class="icon_bx">
                        <img src="{{ asset('fronted/mac-image/contact-us/address.png') }}" class="img-fluid" alt="slider image">
                     </div>
                     <div class="contnet">
                        <h3> Registered & Corporate Office </h3>
                        <h4 class="director_contact">
                           Anupam Agarwal - Managing Director
                        </h4>
                        <p>
                           
                        <strong>MAC Capital Services Pvt Ltd</strong><br>
                        202 Rajendra Chambers,<br>
                        19 Nanabhai Lane, Fort,<br>
                        Mumbai 400001. <br>
                        Maharashtra.
                        </p>
                        <div class="con_content">
                           <h3> Phone </h3>
                           <a href="tel:+91-9821434142">+91 - 9821434142</a>
                     </div>
                     
                     <div class="location_map">
                           <a class="location_link theme-btn three" href="https://www.google.com/maps/preview#!data=!1m4!1m3!1d3956!2d72.832789!3d18.932877!4m25!2m11!1m10!1s0x0%3A0xe4141ed542b455ae!3m8!1m3!1d26081603!2d-95.677068!3d37.0625!3m2!1i1024!2i768!4f13.1!5m12!1m11!1sMAC+Capital+Services+P+Ltd!4m8!1m3!1d26081603!2d-95.677068!3d37.0625!3m2!1i1024!2i768!4f13.1!17b1" target="_blank">View Location Map</a>
                     </div>
                     </div>
                  </div>
               </div> -->
               <div class="col-xl-6 col-lg-6">
                  <div class="contact_box_content style_one contact-us-box">
                     <div class="contact_box_inner icon_yes">
                        <div class="contnet">
                           <div class="address-img">
                              <img src="{{asset('fronted/mac-image/contact-us/registered-office.png')}}" class="w-100">
                           </div>
                           <div class="location_map">
                                 <a class="location_link theme-btn three" href="https://www.google.com/maps/preview#!data=!1m4!1m3!1d3956!2d72.832789!3d18.932877!4m25!2m11!1m10!1s0x0%3A0xe4141ed542b455ae!3m8!1m3!1d26081603!2d-95.677068!3d37.0625!3m2!1i1024!2i768!4f13.1!5m12!1m11!1sMAC+Capital+Services+P+Ltd!4m8!1m3!1d26081603!2d-95.677068!3d37.0625!3m2!1i1024!2i768!4f13.1!17b1" target="_blank">View Location Map</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_15"></div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="contact_box_content style_one contact-us-box">
                     <div class="contact_box_inner icon_yes stick_bg">
                        
                        <div class="contnet">
                           <div class="address-img">
                              <img src="{{asset('fronted/mac-image/contact-us/branch-office.png')}}" class="w-100">
                           </div>
                           <div class="location_map">
                                 <a class="location_link theme-btn three" href="https://maps.google.com/maps?q=MAC+Capital+Services+(P)+Ltd,+MAC+Capital+Services+(P)+Ltd,+217,+Platinum+Techno+Park,+Sector-30A,+Vashi,+Navi+Mumbai-+400703&hl=en&ll=19.065297,72.995471&spn=0.001894,0.00327&sll=19.065604,72.996013&sspn=0.003787,0.006539&hq=MAC+Capital+Services+(P)+Ltd,+MAC+Capital+Services+(P)+Ltd,+217,+Platinum+Techno+Park,&hnear=Sector+30A,+Vashi,+Navi+Mumbai,+Thane,+Maharashtra,+India&t=m&z=19&iwloc=B" target="_blank">View Location Map</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="contact_box_content style_one contact-us-box">
                     <div class="contact_box_inner icon_yes stick_bg">
                        <div class="icon_bx">
                           <img src="{{ asset('fronted/mac-image/contact-us/address.png') }}" class="img-fluid" alt="slider image">
                        </div>
                        <div class="contnet">
                           <h3> Branch Office </h3>
                           <h4 class="director_contact">
                              Achintya Agarwal  - Director
                           </h4>
                           <p>
                           <strong>MAC Capital Services Pvt Ltd</strong><br>
                           Platinum Techno Park<br>
                           Sector-30A,<br>
                           Vashi Navi Mumbai- 400703<br>
                           Maharashtra.
                           </p>
                           <div class="con_content">
                              <h3> Phone </h3>
                              <a href="tel:+91-8928064238">+91 -  8928064238</a>
                        </div><br>
                        <p><strong>By prior appointments only!</strong></p><br>
                        <div class="location_map">
                              <a class="location_link theme-btn three" href="https://maps.google.com/maps?q=MAC+Capital+Services+(P)+Ltd,+MAC+Capital+Services+(P)+Ltd,+217,+Platinum+Techno+Park,+Sector-30A,+Vashi,+Navi+Mumbai-+400703&hl=en&ll=19.065297,72.995471&spn=0.001894,0.00327&sll=19.065604,72.996013&sspn=0.003787,0.006539&hq=MAC+Capital+Services+(P)+Ltd,+MAC+Capital+Services+(P)+Ltd,+217,+Platinum+Techno+Park,&hnear=Sector+30A,+Vashi,+Navi+Mumbai,+Thane,+Maharashtra,+India&t=m&z=19&iwloc=B" target="_blank">View Location Map</a>
                        </div>
                        </div>
                     </div>
                  </div> -->
                  <div class="pd_bottom_15"></div>
               </div>
            </div>
            <!--===============spacing==============-->
            <!--<div class="social_media_v_one style_two">
               <ul>
                  <li>
                     <a href="#"> <span class="fa fa-facebook"></span>
                     <small>facebook</small>
                     </a>
                  </li>
                  <li>
                     <a href="#"> <span class="fa fa-twitter"></span>
                     <small>twitter</small>
                     </a>
                  </li>
                  <li>
                     <a href="#"> <span class="fa fa-skype"></span>
                     <small>skype</small>
                     </a>
                  </li>
                  <li>
                     <a href="#"> <span class="fa fa-instagram"></span>
                     <small>instagram</small>
                     </a>
                  </li>
               </ul>
            </div>-->
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_top_70"></div>
   <!--===============spacing==============-->
</section>
<section class="contact-map-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <section class="map-section">
               <!--Map Outer-->
               <div class="map-outer">
                  <div class="google-map">
                    <div class="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7547.932995279014!2d72.832789!3d18.932877!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1dc97c8f18f%3A0xe4141ed542b455ae!2sMAC%20Capital%20Ltd%20%2FEastern%20Financiers%20Ltd!5e0!3m2!1sen!2sin!4v1727160413376!5m2!1sen!2sin" height="545" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_top_90"></div>
   <!--===============spacing==============-->
</section>
</div>
   
@endsection
@push('scripts')
<script>
   $(document).ready(function () {
      $("#contact-form").on("submit", function (e) {
         $(".text-danger").remove();
         let isValid = true;
         const name = $("input[name='name']").val().trim();
         if (!name) {
            $("input[name='name']")
               .after("<div class='text-danger'>Name is required.</div>");
            isValid = false;
         }
         const email = $("input[name='email']").val().trim();
         const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         if (!email) {
            $("input[name='email']")
               .after("<div class='text-danger'>Email is required.</div>");
            isValid = false;
         } else if (!emailRegex.test(email)) {
            $("input[name='email']")
               .after("<div class='text-danger'>Enter a valid email.</div>");
            isValid = false;
         }
         const phone = $("input[name='phone']").val().trim();
         const phoneRegex = /^\d{10}$/;
         if (!phone) {
            $("input[name='phone']")
               .after("<div class='text-danger'>Phone number is required.</div>");
            isValid = false;
         } else if (!phoneRegex.test(phone)) {
            $("input[name='phone']")
               .after(
                  "<div class='text-danger'>Phone number must be 10 digits.</div>"
               );
            isValid = false;
         }
         if (!isValid) {
            e.preventDefault();
         }
      });
   });
</script>
@endpush