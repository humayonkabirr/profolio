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
                   <h2 class="title wow fadeInUp" data-wow-delay=".3s">Blog</h2>
                   <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                      <span><a href="{{route('frontend.home') }}">Home</a></span>
                      <i class="far fa-long-arrow-right"></i>
                      <span class="current-item">Blog</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- END: Breadcrumb Area -->

    <!-- START: Blog Section -->
    <section class="full-width tj-posts__area">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-8">
                <div class="tj-post__container">
                   <article class="tj-post wow fadeInUp" data-wow-delay=".3s">
                      <div class="tj-post__thumb">
                         <a href="blog-details.html">
                            <img src="assets/img/blog/blog-4.jpg" alt="" />
                         </a>

                         <a href="#" class="category">Tutorial</a>
                      </div>
                      <div class="tj-post__content">
                         <div class="tj-post__meta entry-meta">
                            <span><i class="fa-light fa-user"></i> <a href="#">By Admin</a></span>
                            <span><i class="fa-light fa-calendar-days"></i> 11 Jul, 2023</span>
                            <span><i class="fa-light fa-comments"></i><a href="#">Comments (3)</a></span>
                         </div>
                         <h3 class="tj-post__title entry-title">
                            <a href="blog-details.html">The Role of Technology in Modern Logistics Management</a>
                         </h3>
                         <div class="tj-post__excerpt">
                            <p>
                               Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                               dolorem ipsum quia quaed
                               inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                               lacus quis enim var sed
                               efficitur turpis gilla sed sit...
                            </p>
                         </div>
                         <div class="tj-post__btn">
                            <a href="blog-details.html" class="tj-btn-primary">Read more</a>
                         </div>
                      </div>
                   </article>

                   <blockquote class="wp-block-quote wow fadeInUp" data-wow-delay=".3s">
                      <p>
                         “Welcome to our blog, where we celebrate our achievement as an AWS SaaS Competency Partner
                         and share insights on how we
                         accomplished this significant milestone. As businesses unlock growth opportunities in the
                         digital age, harnessing the
                         power of cloud computing has become essential. Amazon Web Services (AWS) offers the AWS SaaS
                         Competency.”
                      </p>
                      <p><cite>Silvester Scott</cite></p>
                   </blockquote>

                   <article class="tj-post wow fadeInUp" data-wow-delay=".3s">
                      <div class="tj-post__thumb">
                         <img src="assets/img/blog/blog-3.jpg" alt="" />

                         <div class="tj-post__video">
                            <a href="https://player.vimeo.com/video/364758150" class="popup_video"><i
                                  class="fa-thin fa-circle-play"></i></a>
                         </div>

                         <a href="#" class="category">TIPS</a>
                      </div>
                      <div class="tj-post__content">
                         <div class="tj-post__meta entry-meta">
                            <span><i class="fa-light fa-user"></i> <a href="#">By Admin</a></span>
                            <span><i class="fa-light fa-calendar-days"></i> 11 Jul, 2023</span>
                            <span><i class="fa-light fa-comments"></i><a href="#">Comments (3)</a></span>
                         </div>
                         <h3 class="tj-post__title entry-title">
                            <a href="blog-details.html">The Role of Technology in Modern Logistics Management</a>
                         </h3>
                         <div class="tj-post__excerpt">
                            <p>
                               Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                               dolorem ipsum quia quaed
                               inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                               lacus quis enim var sed
                               efficitur turpis gilla sed sit...
                            </p>
                         </div>
                         <div class="tj-post__btn">
                            <a href="blog-details.html" class="tj-btn-primary">Read more</a>
                         </div>
                      </div>
                   </article>

                   <article class="tj-post wow fadeInUp" data-wow-delay=".3s">
                      <div class="tj-post__thumb">
                         <div class="tj-post__gallery owl-carousel">
                            <div class="tj-post-gallery__img">
                               <img src="assets/img/blog/blog-2.jpg" alt="" />
                            </div>
                            <div class="tj-post-gallery__img">
                               <img src="assets/img/blog/blog-3.jpg" alt="" />
                            </div>
                            <div class="tj-post-gallery__img">
                               <img src="assets/img/blog/blog-1.jpg" alt="" />
                            </div>
                         </div>

                         <a href="#" class="category">FREEBIES</a>
                      </div>
                      <div class="tj-post__content">
                         <div class="tj-post__meta entry-meta">
                            <span><i class="fa-light fa-user"></i> <a href="#">By Admin</a></span>
                            <span><i class="fa-light fa-calendar-days"></i> 11 Jul, 2023</span>
                            <span><i class="fa-light fa-comments"></i><a href="#">Comments (3)</a></span>
                         </div>
                         <h3 class="tj-post__title entry-title">
                            <a href="blog-details.html">The Role of Technology in Modern Logistics Management</a>
                         </h3>
                         <div class="tj-post__excerpt">
                            <p>
                               Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                               dolorem ipsum quia quaed
                               inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                               lacus quis enim var sed
                               efficitur turpis gilla sed sit...
                            </p>
                         </div>
                         <div class="tj-post__btn">
                            <a href="blog-details.html" class="tj-btn-primary">Read more</a>
                         </div>
                      </div>
                   </article>

                   <article class="tj-post wow fadeInUp" data-wow-delay=".3s">
                      <div class="tj-post__thumb">
                         <a href="blog-details.html">
                            <img src="assets/img/blog/blog-1.jpg" alt="" />
                         </a>

                         <a href="#" class="category">Tutorial</a>
                      </div>
                      <div class="tj-post__content">
                         <div class="tj-post__meta entry-meta">
                            <span><i class="fa-light fa-user"></i> <a href="#">By Admin</a></span>
                            <span><i class="fa-light fa-calendar-days"></i> 11 Jul, 2023</span>
                            <span><i class="fa-light fa-comments"></i><a href="#">Comments (3)</a></span>
                         </div>
                         <h3 class="tj-post__title entry-title">
                            <a href="blog-details.html">The Role of Technology in Modern Logistics Management</a>
                         </h3>
                         <div class="tj-post__excerpt">
                            <p>
                               Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                               dolorem ipsum quia quaed
                               inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                               lacus quis enim var sed
                               efficitur turpis gilla sed sit...
                            </p>
                         </div>
                         <div class="tj-post__btn">
                            <a href="blog-details.html" class="tj-btn-primary">Read more</a>
                         </div>
                      </div>
                   </article>

                   <div class="tj__pagination wow fadeInUp" data-wow-delay=".3s">
                      <ul>
                         <li>
                            <a class="page-numbers" href="#"><i class="fal fa-arrow-left"></i></a>
                         </li>
                         <li><a class="page-numbers" href="#">1</a></li>
                         <li><span class="page-numbers current">2</span></li>
                         <li><a class="page-numbers" href="#">3</a></li>
                         <li>
                            <a class="page-numbers" href="#"><i class="fal fa-arrow-right"></i></a>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4">
                <div class="tj_main_sidebar">
                   <div class="sidebar_widget widget_search wow fadeInUp" data-wow-delay=".3s">
                      <div class="tj-widget__search form_group">
                         <form class="search-form" action="#" method="get">
                            <input type="search" id="search" name="search" placeholder="Search..." />
                            <button class="search-btn" type="submit"><i
                                  class="fa-light fa-magnifying-glass"></i></button>
                         </form>
                      </div>
                   </div>
                   <div class="sidebar_widget widget_categories wow fadeInUp" data-wow-delay=".3s">
                      <div class="widget_title">
                         <h3 class="title">Categories</h3>
                      </div>
                      <ul>
                         <li><a href="#">Business</a> (4)</li>
                         <li><a href="#">Analysis</a> (0)</li>
                         <li><a href="#">Technology</a> (1)</li>
                         <li><a href="#">Technology</a> (10)</li>
                      </ul>
                   </div>
                   <div class="sidebar_widget tj_recent_posts wow fadeInUp" data-wow-delay=".3s">
                      <div class="widget_title">
                         <h3 class="title">Recent post</h3>
                      </div>
                      <ul>
                         <li>
                            <div class="recent-post_thumb">
                               <a href="blog-details.html">
                                  <img src="assets/img/blog/post-thumb-1.jpg" alt="" />
                               </a>
                            </div>

                            <div class="recent-post_content">
                               <div class="tj-post__meta entry-meta">
                                  <span><i class="fa-light fa-calendar-days"></i>Jan 2024</span>
                                  <span><i class="fa-light fa-comments"></i><a href="#"> (3)</a></span>
                               </div>
                               <h4 class="recent-post_title">
                                  <a href="blog-details.html">Definition and Principles of JIT Logistics</a>
                               </h4>
                            </div>
                         </li>
                         <li>
                            <div class="recent-post_thumb">
                               <a href="blog-details.html">
                                  <img src="assets/img/blog/post-thumb-2.jpg" alt="" />
                               </a>
                            </div>

                            <div class="recent-post_content">
                               <div class="tj-post__meta entry-meta">
                                  <span><i class="fa-light fa-calendar-days"></i>Jan 2024</span>
                                  <span><i class="fa-light fa-comments"></i><a href="#"> (3)</a></span>
                               </div>
                               <h4 class="recent-post_title">
                                  <a href="blog-details.html">Real-world Examples of Successful JIT Logistics</a>
                               </h4>
                            </div>
                         </li>
                         <li>
                            <div class="recent-post_thumb">
                               <a href="blog-details.html">
                                  <img src="assets/img/blog/post-thumb-3.jpg" alt="" />
                               </a>
                            </div>

                            <div class="recent-post_content">
                               <div class="tj-post__meta entry-meta">
                                  <span><i class="fa-light fa-calendar-days"></i>Jan 2024</span>
                                  <span><i class="fa-light fa-comments"></i><a href="#"> (3)</a></span>
                               </div>
                               <h4 class="recent-post_title">
                                  <a href="blog-details.html">Real-world Examples of Successful JIT Logistics</a>
                               </h4>
                            </div>
                         </li>
                      </ul>
                   </div>

                   <div class="sidebar_widget widget_tag_cloud wow fadeInUp" data-wow-delay=".3s">
                      <div class="widget_title">
                         <h3 class="title">Popular tag</h3>
                      </div>

                      <div class="tagcloud">
                         <a href="#">Business</a>
                         <a href="#">Analysis</a>
                         <a href="#">Technology</a>
                         <a href="#">Finance</a>
                         <a href="#">Design</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- END: Blog Section -->
 </main>
</div>
@endpush