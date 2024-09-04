@extends('frontend.master')

@push('content')
<div class="absolute_header inner-page light-mode">
   <main class="site-content " id="content">
      <!-- START: Breadcrumb Area -->
      <section class="breadcrumb_area" data-bg-image="assets/img/breadcrumb/breadcrumb-bg.jpg"
         data-bg-color="white">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="breadcrumb_content d-flex flex-column align-items-center">
                     <h2 class="title wow fadeInUp" data-wow-delay=".3s">About</h2>
                     <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                        <span><a href="{{route('frontend.home') }}">Home</a></span>
                        <i class="far fa-long-arrow-right"></i>
                        <span class="current-item">About</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END: Breadcrumb Area -->
   
      <!-- start: Works Area -->
      <section class="works-section style-2" id="resume-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Resume</h2>
                  </div>
               </div>
            </div>
            <section class="" id="resume-section">
               <div class="container">
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
         </div>
      </section>
      <!-- end: Works Area -->
   
      <!-- start: Skills Area -->
      <section class="skills-section style-3" id="skills-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                     <p class="text-uppercase wow fadeInUp" data-wow-delay=".4s">
                        Offerd Services
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
      <!-- end: Skills Area -->
   
      <!-- start: Counter Area -->
      <section class="counter-section">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="funfact-area">
                     <div class="row">
                        <div class="col-6 col-lg-3">
                           <div
                              class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                              data-wow-delay=".3s">
                              <div class="number"><span class="odometer" data-count="14">0</span></div>
                              <div class="text">Years of <br />Experience</div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3">
                           <div
                              class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                              data-wow-delay=".4s">
                              <div class="number"><span class="odometer" data-count="50">0</span>+</div>
                              <div class="text">Project <br />Completed</div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3">
                           <div
                              class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                              data-wow-delay=".5s">
                              <div class="number"><span class="odometer" data-count="1.5">0</span>K</div>
                              <div class="text">Happy <br />Clients</div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3">
                           <div
                              class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center wow fadeInUp"
                              data-wow-delay=".6s">
                              <div class="number"><span class="odometer" data-count="14">0</span></div>
                              <div class="text">Years of <br />Experience</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end: Counter Area -->
   
      <!-- start: Text Area -->
      <section class="text-section">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-header">
                     <div class="heading-left">
                        <p class="wow fadeInUp" data-wow-delay=".3s">Want to start a project?</p>
                        <h2 id="anim" class="section-title wow fadeInUp" data-wow-delay=".4s">Let’s have a chat</h2>
                     </div>
                     <div class="chat-mail wow fadeInRight" data-wow-delay=".5s">
                        <a class="link" href="mailto:info@taylor.com">info@taylor.com <i
                        class="fa-light fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end: Text Area -->
   </main>
</div>



@endpush