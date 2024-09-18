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
                   <h2 class="title wow fadeInUp" data-wow-delay=".3s">Portfolio</h2>
                   <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                      <span><a href="{{route('frontend.home') }}">Home</a></span>
                      <i class="far fa-long-arrow-right"></i>
                      <span class="current-item">Portfolio</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- END: Breadcrumb Area -->

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
 </main>
</div>

@endpush