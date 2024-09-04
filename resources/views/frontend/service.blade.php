@extends('frontend.master')

@push('content')
<div class="absolute_header inner-page light-mode">
<main class="site-content" id="content">
    <!-- START: Breadcrumb Area -->
    <section class="breadcrumb_area" data-bg-image="assets/img/breadcrumb/breadcrumb-bg.jpg"
       data-bg-color="white">
       <div class="container">
          <div class="row">
             <div class="col">
                <div class="breadcrumb_content d-flex flex-column align-items-center">
                   <h2 class="title wow fadeInUp" data-wow-delay=".3s">Services</h2>
                   <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                      <span><a href="{{route('frontend.home') }}">Home</a></span>
                      <i class="far fa-long-arrow-right"></i>
                      <span class="current-item">Services</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- END: Breadcrumb Area -->
    <!-- SERVICES SECTION START -->
    <section class="services-section" id="services-section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Quality Services</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">
                     We put your ideas and thus your wishes in the form of a unique web project that inspires you and
                     you customers.
                  </p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-12">
               <div class="services-widget position-relative">
                  <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                     data-wow-delay=".5s">
                     <div class="left-box d-flex flex-wrap align-items-center">
                        <span class="number">01</span>
                        <h3 class="service-title">Branding Design</h3>
                     </div>
                     <div class="right-box">
                        <p>
                           I break down complex user experinece problems to create integritiy focussed solutions that
                           connect billions of people
                        </p>
                     </div>
                     <i class="flaticon-up-right-arrow"></i>
                  
                  </div>
                  <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".6s">
                     <div class="left-box d-flex flex-wrap align-items-center">
                        <span class="number">02</span>
                        <h3 class="service-title">Web Design</h3>
                     </div>
                     <div class="right-box">
                        <p>
                           I break down complex user experinece problems to create integritiy focussed solutions that
                           connect billions of people
                        </p>
                     </div>
                     <i class="flaticon-up-right-arrow"></i>
                    
                  </div>
                  <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".7s">
                     <div class="left-box d-flex flex-wrap align-items-center">
                        <span class="number">03</span>
                        <h3 class="service-title">UI/UX Design</h3>
                     </div>
                     <div class="right-box">
                        <p>
                           I break down complex user experinece problems to create integritiy focussed solutions that
                           connect billions of people
                        </p>
                     </div>
                     <i class="flaticon-up-right-arrow"></i>
                    
                  </div>
                  <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay=".8s">
                     <div class="left-box d-flex flex-wrap align-items-center">
                        <span class="number">04</span>
                        <h3 class="service-title">Graphics Design</h3>
                     </div>
                     <div class="right-box">
                        <p>
                           I break down complex user experinece problems to create integritiy focussed solutions that
                           connect billions of people
                        </p>
                     </div>
                     <i class="flaticon-up-right-arrow"></i>
                  
                  </div>
                  <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- SERVICES SECTION END -->
 </main>
</div>

@endpush