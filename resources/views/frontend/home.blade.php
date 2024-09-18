@extends('frontend.master')
@push('content')

<main class="site-content" id="content">
    <!-- HERO SECTION START -->
    <section class="hero-section d-flex align-items-center" id="intro">
       <div class="intro_text">
          <svg viewBox="0 0 1320 300">
             <text x="50%" Y="50%" text-anchor="middle">HI</text>
          </svg>
       </div>
       <div class="container">
          <div class="row align-items-center">
             <div class="col-md-6">
                <div class="hero-content-box">
                   <span class="hero-sub-title">I am Gerold</span>
                   <h1 class="hero-title">Web Developer +<br />UX Designer</h1>

                   <div class="hero-image-box d-md-none text-center">
                      <img src="assets/img/hero/me.png" alt="" />
                   </div>

                   <p class="lead">
                      I break down complex user experinece problems to create integritiy focussed solutions that
                      connect billions of people
                   </p>
                   <div class="button-box d-flex flex-wrap align-items-center">
                      <a href="#" class="btn tj-btn-secondary">Download CV <i class="flaticon-download"></i></a>
                      <ul class="ul-reset social-icons">
                         <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                         </li>
                         <li>
                            <a href="#"><i class="fa-light fa-basketball"></i></a>
                         </li>
                         <li>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                         </li>
                         <li>
                            <a href="#"><i class="fa-brands fa-github"></i></a>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-md-6 d-none d-md-block">
                <div class="hero-image-box text-center">
                   <img src="assets/img/hero/me.png" alt="" />
                </div>
             </div>
          </div>

          <div class="funfact-area">
             <div class="row">
                <div class="col-6 col-lg-3">
                   <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                      <div class="number"><span class="odometer" data-count="14">0</span></div>
                      <div class="text">Years of <br />Experience</div>
                   </div>
                </div>
                <div class="col-6 col-lg-3">
                   <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                      <div class="number"><span class="odometer" data-count="50">0</span>+</div>
                      <div class="text">Project <br />Completed</div>
                   </div>
                </div>
                <div class="col-6 col-lg-3">
                   <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                      <div class="number"><span class="odometer" data-count="1.5">0</span>K</div>
                      <div class="text">Happy <br />Clients</div>
                   </div>
                </div>
                <div class="col-6 col-lg-3">
                   <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                      <div class="number"><span class="odometer" data-count="14">0</span></div>
                      <div class="text">Years of <br />Experience</div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- HERO SECTION END -->

      <!-- SKILLS SECTION START -->
      <section class="skills-section" id="skills-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        We put your ideas and thus your wishes in the form of a unique web project that inspires you and
                        you customers.
                     </p>
                  </div>
               </div>
            </div>
  
            <div class="row">
               <div class="col-md-12">
                  <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                     <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/figma.svg" alt="" />
                           </div>
                           <div class="number">92%</div>
                        </div>
                        <p>Figma</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/sketch.svg" alt="" />
                           </div>
                           <div class="number">80%</div>
                        </div>
                        <p>Sketch</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/xd.svg" alt="" />
                           </div>
                           <div class="number">85%</div>
                        </div>
                        <p>XD</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/wp.svg" alt="" />
                           </div>
                           <div class="number">99%</div>
                        </div>
                        <p>WordPess</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/react.svg" alt="" />
                           </div>
                           <div class="number">89%</div>
                        </div>
                        <p>React</p>
                     </div>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="assets/img/icons/js.svg" alt="" />
                           </div>
                           <div class="number">93%</div>
                        </div>
                        <p>JavaScript</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SKILLS SECTION END -->
        <!-- PORTFOLIO SECTION START -->
    <section class="portfolio-section" id="works-section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                  <p class="wow fadeInUp" data-wow-delay=".4s">
                     We put your ideas and thus your wishes in the form of a unique web project that inspires you and
                     you customers.
                  </p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-12">
               <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                  <div class="button-group filter-button-group">
                     <button data-filter="*" class="active">All</button>
                     <button data-filter=".uxui">UX/UI</button>
                     <button data-filter=".branding">Branding</button>
                     <button data-filter=".mobile-app">Apps</button>
                     <div class="active-bg"></div>
                  </div>
               </div>

               <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                  <div class="portfolio-sizer"></div>
                  <div class="gutter-sizer"></div>
                  <div class="portfolio-item branding">
                     <div class="image-box">
                        <img src="assets/img/portfolio/2.jpg" alt="" />
                     </div>
                     <div class="content-box">
                        <h3 class="portfolio-title">Deloitte</h3>
                        <p>Project was about precision and information.</p>
                        <i class="flaticon-up-right-arrow"></i>
                        <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                     </div>
                  </div>
                  <div class="portfolio-item uxui">
                     <div class="image-box">
                        <img src="assets/img/portfolio/1.jpg" alt="" />
                     </div>
                     <div class="content-box">
                        <h3 class="portfolio-title">New Age</h3>
                        <p>Project was about precision and information.</p>
                        <i class="flaticon-up-right-arrow"></i>
                        <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                     </div>
                  </div>
                  <div class="portfolio-item mobile-app">
                     <div class="image-box">
                        <img src="assets/img/portfolio/3.jpg" alt="" />
                     </div>
                     <div class="content-box">
                        <h3 class="portfolio-title">Sebastian</h3>
                        <p>Project was about precision and information.</p>
                        <i class="flaticon-up-right-arrow"></i>
                        <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                     </div>
                  </div>
                  <div class="portfolio-item branding">
                     <div class="image-box">
                        <img src="assets/img/portfolio/4.jpg" alt="" />
                     </div>
                     <div class="content-box">
                        <h3 class="portfolio-title">Mochnix</h3>
                        <p>Project was about precision and information.</p>
                        <i class="flaticon-up-right-arrow"></i>
                        <button data-mfp-src="#portfolio-wrapper" class="portfolio-link modal-popup"></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- PORTFOLIO SECTION END -->
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


  

    <!-- start: Portfolio Popup -->
    <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
       <div class="popup_modal_img">
          <img src="assets/img/portfolio/modal-img.jpg" alt="" />
       </div>

       <div class="popup_modal_content">
          <div class="portfolio_info">
             <div class="portfolio_info_text">
                <h2 class="title">DStudio</h2>
                <div class="desc">
                   <p>
                      They are was greater open above shelter lets itself under appear sixth open gathering made upon
                      can't own above midst
                      gathering gathered he one us saying can't divide.
                   </p>
                </div>
                <a href="#" class="btn tj-btn-primary">live preview <i class="fal fa-arrow-right"></i></a>
             </div>
             <div class="portfolio_info_items">
                <div class="info_item">
                   <div class="key">Category</div>
                   <div class="value">Web Design</div>
                </div>
                <div class="info_item">
                   <div class="key">Client</div>
                   <div class="value">Artboard Studio</div>
                </div>
                <div class="info_item">
                   <div class="key">Start Date</div>
                   <div class="value">August 20, 2023</div>
                </div>
                <div class="info_item">
                   <div class="key">Designer</div>
                   <div class="value"><a href="#">ThemeJunction</a></div>
                </div>
             </div>
          </div>

          <div class="portfolio_gallery owl-carousel">
             <div class="gallery_item">
                <img src="assets/img/portfolio-gallery/p-gallery-1.jpg" alt="" />
             </div>
             <div class="gallery_item">
                <img src="assets/img/portfolio-gallery/p-gallery-2.jpg" alt="" />
             </div>
             <div class="gallery_item">
                <img src="assets/img/portfolio-gallery/p-gallery-3.jpg" alt="" />
             </div>
             <div class="gallery_item">
                <img src="assets/img/portfolio-gallery/p-gallery-4.jpg" alt="" />
             </div>
          </div>

          <div class="portfolio_description">
             <h2 class="title">Project Description</h2>
             <div class="desc">
                <p>
                   The goal is there are many variations of passages of Lorem Ipsum available, but the majority have
                   suffered alteration in some
                   form, by injected humour, or randomised words which don't look even slightly believable.
                </p>

                <p>
                   There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                   alteration in some form, by
                   injected humour, or randomised words which don't look even slightly believable. If you are going to
                   use a passage of Lorem
                   Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                </p>
             </div>
          </div>

          <div class="portfolio_story_approach">
             <div class="portfolio_story">
                <div class="story_title">
                   <h4 class="title">The story</h4>
                </div>
                <div class="story_content">
                   <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by
                      injected humour, or randomised words which don't look even slightly believable. If you are going
                      to use a passage of Lorem
                      Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                      are many variations of
                      passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                      injected humour, or
                      randomised words which don't look even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to
                      be sure there isn't anything embarrassing hidden in the middle of text.
                   </p>
                </div>
             </div>
             <div class="portfolio_approach">
                <div class="approach_title">
                   <h4 class="title">OUR APPROACH</h4>
                </div>
                <div class="approach_content">
                   <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by
                      injected humour, or randomised words which don't look even slightly believable. If you are going
                      to use a passage of Lorem
                      Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There
                      are many variations of
                      passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                      injected humour, or
                      randomised words which don't look even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to
                      be sure there isn't anything embarrassing hidden in the middle of text.
                   </p>
                </div>
             </div>
          </div>

          <div class="portfolio_navigation">
             <div class="navigation_item prev-project">
                <a href="#" class="project">
                   <i class="fal fa-arrow-left"></i>
                   <div class="nav_project">
                      <div class="label">Previous Project</div>
                      <h3 class="title">Sebastian</h3>
                   </div>
                </a>
             </div>

             <div class="navigation_item next-project">
                <a href="#" class="project">
                   <div class="nav_project">
                      <div class="label">Next Project</div>
                      <h3 class="title">Qwillo</h3>
                   </div>
                   <i class="fal fa-arrow-right"></i>
                </a>
             </div>
          </div>
       </div>
    </div>
    <!-- end: Portfolio Popup -->

    <!-- RESUME SECTION START -->
    <section class="resume-section" id="resume-section">
       <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Resume</h2>
               </div>
            </div>
         </div>
          <div class="row">
             <div class="col-md-6">
                <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                   <h2 class="section-title"><i class="flaticon-recommendation"></i> My Experience</h2>
                </div>

                <div class="resume-widget">
                   <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                      <div class="time">2022 - Present</div>
                      <h3 class="resume-title">Lead Developer</h3>
                      <div class="institute">Blockdots, London</div>
                   </div>
                   <div class="resume-item wow fadeInLeft" data-wow-delay=".5s">
                      <div class="time">2021 - 2022</div>
                      <h3 class="resume-title">Full Stack Web Developer</h3>
                      <div class="institute">Parsons, The New School</div>
                   </div>
                   <div class="resume-item wow fadeInLeft" data-wow-delay=".6s">
                      <div class="time">2020 - 2021</div>
                      <h3 class="resume-title">UI Designer</h3>
                      <div class="institute">House of Life, Leeds</div>
                   </div>
                   <div class="resume-item wow fadeInLeft" data-wow-delay=".7s">
                      <div class="time">2018 - 2020</div>
                      <h3 class="resume-title">Junior Graphics Designer</h3>
                      <div class="institute">Theme Junction, Bursa</div>
                   </div>
                </div>
             </div>

             <div class="col-md-6">
                <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                   <h2 class="section-title"><i class="flaticon-graduation-cap"></i> My Education</h2>
                </div>

                <div class="resume-widget">
                   <div class="resume-item wow fadeInRight" data-wow-delay=".5s">
                      <div class="time">2020 - 2023</div>
                      <h3 class="resume-title">Programming course</h3>
                      <div class="institute">Harverd University</div>
                   </div>
                   <div class="resume-item wow fadeInRight" data-wow-delay=".6s">
                      <div class="time">2016 - 2020</div>
                      <h3 class="resume-title">Graphic design course</h3>
                      <div class="institute">University of Denmark</div>
                   </div>
                   <div class="resume-item wow fadeInRight" data-wow-delay=".7s">
                      <div class="time">2012 - 2015</div>
                      <h3 class="resume-title">Web design course</h3>
                      <div class="institute">University of California</div>
                   </div>
                   <div class="resume-item wow fadeInRight" data-wow-delay=".8s">
                      <div class="time">2010 - 2011</div>
                      <h3 class="resume-title">Design & Technology</h3>
                      <div class="institute">Parsons, The New School</div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- RESUME SECTION END -->

  

    <!-- TESTIMONIAL SECTION START -->
    <section class="testimonial-section" id="testimonials-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-5">
                <div class="section-header">
                   <h2 class="section-title wow fadeInLeft" data-wow-delay=".3s">My Client's Stories</h2>
                   <p class="wow fadeInLeft" data-wow-delay=".4s">Empowering people in new a digital journey with my
                      super services</p>
                </div>
             </div>

             <div class="col-lg-7 col-xl-6 offset-xl-1">
                <div class="testimonials-widget wow fadeInRight" data-wow-delay=".5s">
                   <div class="owl-carousel testimonial-carousel">
                      <div class="testimonial-item">
                         <div class="top-area d-flex flex-wrap justify-content-between">
                            <div class="logo-box">
                               <img src="assets/img/testimonials/logo/1-dark.png" alt="" />
                            </div>
                            <div class="image-box">
                               <img src="assets/img/testimonials/user/1.jpg" alt="" />
                            </div>
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint0_linear_263_588)" />
                               <defs>
                                  <linearGradient id="paint0_linear_263_588" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint1_linear_263_589)" />
                               <defs>
                                  <linearGradient id="paint1_linear_263_589" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">“Taylor is a professional Designer he really helps my business by providing
                            value to my business.</p>
                         <h4 class="name">Brandon Fraser</h4>
                         <span class="designation">Senior Software Dev, Cosmic Sport</span>
                      </div>
                      <div class="testimonial-item">
                         <div class="top-area d-flex flex-wrap justify-content-between">
                            <div class="logo-box">
                               <img src="assets/img/testimonials/logo/2-dark.png" alt="" />
                            </div>
                            <div class="image-box">
                               <img src="assets/img/testimonials/user/2.jpg" alt="" />
                            </div>
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint2_linear_263_511)" />
                               <defs>
                                  <linearGradient id="paint2_linear_263_511" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint3_linear_263_510)" />
                               <defs>
                                  <linearGradient id="paint3_linear_263_510" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">“Taylor is a professional Designer he really helps my business by providing
                            value to my business.</p>
                         <h4 class="name">Tim Bailey</h4>
                         <span class="designation">SEO Specialist, Theme Junction</span>
                      </div>
                      <div class="testimonial-item">
                         <div class="top-area d-flex flex-wrap justify-content-between">
                            <div class="logo-box">
                               <img src="assets/img/testimonials/logo/1-dark.png" alt="" />
                            </div>
                            <div class="image-box">
                               <img src="assets/img/testimonials/user/1.jpg" alt="" />
                            </div>
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint4_linear_263_512)" />
                               <defs>
                                  <linearGradient id="paint4_linear_263_512" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint5_linear_263_513)" />
                               <defs>
                                  <linearGradient id="paint5_linear_263_513" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">“Taylor is a professional Designer he really helps my business by providing
                            value to my business.</p>
                         <h4 class="name">Brandon Fraser</h4>
                         <span class="designation">Senior Software Dev, Cosmic Sport</span>
                      </div>
                      <div class="testimonial-item">
                         <div class="top-area d-flex flex-wrap justify-content-between">
                            <div class="logo-box">
                               <img src="assets/img/testimonials/logo/2-dark.png" alt="" />
                            </div>
                            <div class="image-box">
                               <img src="assets/img/testimonials/user/2.jpg" alt="" />
                            </div>
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint6_linear_263_514)" />
                               <defs>
                                  <linearGradient id="paint6_linear_263_514" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint7_linear_263_515)" />
                               <defs>
                                  <linearGradient id="paint7_linear_263_515" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">“Taylor is a professional Designer he really helps my business by providing
                            value to my business.</p>
                         <h4 class="name">Tim Bailey</h4>
                         <span class="designation">SEO Specialist, Theme Junction</span>
                      </div>
                      <div class="testimonial-item">
                         <div class="top-area d-flex flex-wrap justify-content-between">
                            <div class="logo-box">
                               <img src="assets/img/testimonials/logo/1-dark.png" alt="" />
                            </div>
                            <div class="image-box">
                               <img src="assets/img/testimonials/user/1.jpg" alt="" />
                            </div>
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint8_linear_263_512)" />
                               <defs>
                                  <linearGradient id="paint8_linear_263_512" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint9_linear_263_513)" />
                               <defs>
                                  <linearGradient id="paint9_linear_263_513" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">“Taylor is a professional Designer he really helps my business by providing
                            value to my business.</p>
                         <h4 class="name">Brandon Fraser</h4>
                         <span class="designation">Senior Software Dev, Cosmic Sport</span>
                      </div>
                      <div class="testimonial-item">
                         <div class="top-area d-flex flex-wrap justify-content-between">
                            <div class="logo-box">
                               <img src="assets/img/testimonials/logo/2-dark.png" alt="" />
                            </div>
                            <div class="image-box">
                               <img src="assets/img/testimonials/user/2.jpg" alt="" />
                            </div>
                         </div>
                         <div class="icon-box">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint10_linear_263_514)" />
                               <defs>
                                  <linearGradient id="paint10_linear_263_514" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                  fill="url(#paint11_linear_263_515)" />
                               <defs>
                                  <linearGradient id="paint11_linear_263_515" x1="-0.0363755" y1="-0.0729998"
                                     x2="35.3333" y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                     <stop offset="1" stop-color="var(--tj-theme-primary)" />
                                     <stop offset="1" stop-color="#140C1C" stop-opacity="0" />
                                  </linearGradient>
                               </defs>
                            </svg>
                         </div>
                         <p class="quote">“Taylor is a professional Designer he really helps my business by providing
                            value to my business.</p>
                         <h4 class="name">Tim Bailey</h4>
                         <span class="designation">SEO Specialist, Theme Junction</span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->

    <!-- BLOG SECTION STAR -->
    <section class="blog-section" id="blog-section">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="section-header text-center">
                   <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Recent Blogs</h2>
                   <p class="wow fadeInUp" data-wow-delay=".4s">
                      We put your ideas and thus your wishes in the form of a unique web project that inspires you and
                      you customers.
                   </p>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-4 col-md-6">
                <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                   <div class="blog-thumb">
                      <a href="blog-details-light.html">
                         <img src="assets/img/blog/1.jpg" alt="" />
                      </a>
                      <a href="#" class="category">Tutorial</a>
                   </div>

                   <div class="blog-content">
                      <div class="blog-meta">
                         <ul class="ul-reset">
                            <li><i class="fa-light fa-calendar-days"></i> Oct 01, 2022</li>
                            <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                         </ul>
                      </div>
                      <h3 class="blog-title"><a href="blog-details-light.html">top 10 ui ux designers</a></h3>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="blog-item wow fadeInUp" data-wow-delay=".6s">
                   <div class="blog-thumb">
                      <a href="blog-details-light.html">
                         <img src="assets/img/blog/2.jpg" alt="" />
                      </a>
                      <a href="#" class="category">TIPS</a>
                   </div>
                   <div class="blog-content">
                      <div class="blog-meta">
                         <ul class="ul-reset">
                            <li><i class="fa-light fa-calendar-days"></i> Nov 01, 2022</li>
                            <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                         </ul>
                      </div>
                      <h3 class="blog-title"><a href="blog-details-light.html">App Development Guides</a></h3>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="blog-item wow fadeInUp" data-wow-delay=".7s">
                   <div class="blog-thumb">
                      <a href="blog-details-light.html">
                         <img src="assets/img/blog/3.jpg" alt="" />
                      </a>
                      <a href="#" class="category">FREEBIES</a>
                   </div>
                   <div class="blog-content">
                      <div class="blog-meta">
                         <ul class="ul-reset">
                            <li><i class="fa-light fa-calendar-days"></i> Dec 01, 2022</li>
                            <li><i class="fa-light fa-comments"></i> <a href="#">Comment (0)</a></li>
                         </ul>
                      </div>
                      <h3 class="blog-title"><a href="blog-details-light.html">learn graphic design free</a></h3>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- BLOG SECTION END -->

    <!-- CONTACT SECTION START -->
    <section class="contact-section" id="contact-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-7 order-2 order-md-1">
                <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                   <div class="section-header">
                      <h2 class="section-title">Let’s work together!</h2>
                      <p>I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                   </div>

                   <div class="tj-contact-form">
                      <form id="contact-form">
                         <div class="row gx-3">
                            <div class="col-sm-6">
                               <div class="form_group">
                                  <input type="text" name="conName" id="conName" placeholder="First name"
                                     autocomplete="off" />
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form_group">
                                  <input type="text" name="conLName" id="conLName" placeholder="Last name"
                                     autocomplete="off" />
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form_group">
                                  <input type="email" name="conEmail" id="conEmail" placeholder="Email address"
                                     autocomplete="off" />
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form_group">
                                  <input type="tel" name="conPhone" id="conPhone" placeholder="Phone number"
                                     autocomplete="off" />
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="form_group">
                                  <select name="conService" id="conService" class="tj-nice-select">
                                     <option value="" selected disabled>Choose Service</option>
                                     <option value="braning">Branding Design</option>
                                     <option value="web">Web Design</option>
                                     <option value="uxui">UI/UX Design</option>
                                     <option value="app">App Design</option>
                                  </select>
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="form_group">
                                  <textarea name="conMessage" id="conMessage" placeholder="Message"></textarea>
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="form_btn">
                                  <button type="submit" class="btn tj-btn-primary">Send Message</button>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>

             <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                <div class="contact-info-list">
                   <ul class="ul-reset">
                      <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                         data-wow-delay=".4s">
                         <div class="icon-box">
                            <i class="flaticon-phone-call"></i>
                         </div>
                         <div class="text-box">
                            <p>Phone</p>
                            <a href="tel:0123456789">+01 123 654 8096</a>
                         </div>
                      </li>
                      <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                         data-wow-delay=".5s">
                         <div class="icon-box">
                            <i class="flaticon-mail-inbox-app"></i>
                         </div>
                         <div class="text-box">
                            <p>Email</p>
                            <a href="mailto:mail@mail.com">gerolddesign@mail.com</a>
                         </div>
                      </li>
                      <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                         data-wow-delay=".6s">
                         <div class="icon-box">
                            <i class="flaticon-location"></i>
                         </div>
                         <div class="text-box">
                            <p>Address</p>
                            <a href="#">Warne Park Street Pine, <br />FL 33157, New York</a>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- CONTACT SECTION END -->

    <!-- BEGIN: Contact Form Success Modal Message -->
    <div class="modal contact_modal" id="message_sent" tabindex="-1">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <span class="modal-title"><strong>Message Sent Successfully</strong></span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                      class="fas fa-times"></i></button>
             </div>
             <div class="modal-body">
                <p>Thank you for contacting us. We will get back to you shortly.<br />Have a great day!</p>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
             </div>
          </div>
       </div>
    </div>
    <!-- END: Contact Form Success Modal Message -->

    <!-- BEGIN: Contact Form Fail Modal Message -->
    <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <span class="modal-title"><strong>Error</strong></span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                      class="fas fa-times"></i></button>
             </div>
             <div class="modal-body">
                <p>Oops! Something went wrong, please try again.</p>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
             </div>
          </div>
       </div>
    </div>
    <!-- END: Contact Form Fail Modal Message End -->
 </main>

@endpush