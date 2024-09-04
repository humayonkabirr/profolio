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
                   <h2 class="title wow fadeInUp" data-wow-delay=".3s">Blog Details</h2>
                   <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                      <span><a href="{{route('frontend.home') }}">Home</a></span>
                      <i class="far fa-long-arrow-right"></i>
                      <span class="current-item">Blog Details</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- END: Breadcrumb Area -->

    <!-- START: Blog Section -->
    <section class="full-width tj-post-details__area">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-8">
                <div class="tj-post-details__container">
                   <article class="tj-single__post">
                      <div class="tj-post__thumb">
                         <img src="assets/img/blog/blog-4.jpg" alt="" />

                         <a href="#" class="category">Tutorial</a>
                      </div>

                      <div class="tj-post__content">
                         <div class="tj-post__meta entry-meta">
                            <span><i class="fa-light fa-user"></i> <a href="#">By Admin</a></span>
                            <span><i class="fa-light fa-calendar-days"></i> 11 Jul, 2023</span>
                            <span><i class="fa-light fa-comments"></i><a href="#">Comments (3)</a></span>
                         </div>
                         <h3 class="tj-post__title entry-title">The Role of Technology in Modern Logistics Management
                         </h3>

                         <div class="tj-post__content">
                            <p>
                               Welcome to our blog, where we celebrate our achievement as an AWS SaaS Competency
                               Partner and share insights on
                               how we accomplished this significant milestone.
                            </p>

                            <p>
                               As businesses unlock growth opportunities in the digital age, harnessing the power of
                               cloud computing has become
                               essential. Amazon Web Services (AWS) offers the AWS SaaS Competency Partner program,
                               recognizing companies with
                               exceptional expertise in delivering Software-as-a-Service solutions on the AWS
                               platform.
                            </p>

                            <p>
                               In this blog, we will delve into the strategies, best practices, and key factors that
                               accelerated our business
                               growth and earned us the prestigious AWS SaaS Competency Partner status.
                            </p>

                            <blockquote class="wp-block-quote">
                               <p>
                                  “Welcome to our blog, where we celebrate our achievement as an AWS SaaS Competency
                                  Partner and share insights
                                  on how we accomplished this significant milestone. As businesses unlock growth
                                  opportunities in the digital
                                  age, harnessing the power of cloud computing has become essential. Amazon Web
                                  Services (AWS) offers the AWS
                                  SaaS Competency.”
                               </p>
                               <p><cite>Silvester Scott</cite></p>
                            </blockquote>

                            <h4>The Role of Technology in Modern Logistics Management</h4>
                            <p>
                               Welcome to our blog, where we celebrate our achievement as an AWS SaaS Competency
                               Partner and share insights on
                               how we accomplished this significant milestone.
                            </p>

                            <p>
                               As businesses unlock growth opportunities in the digital age, harnessing the power of
                               cloud computing has become
                               essential. Amazon Web Services (AWS) offers the AWS SaaS Competency Partner program,
                               recognizing companies with
                               exceptional expertise in delivering Software-as-a-Service solutions on the AWS
                               platform.
                            </p>

                            <p>
                               In this blog, we will delve into the strategies, best practices, and key factors that
                               accelerated our business
                               growth and earned us the prestigious AWS SaaS Competency Partner status.
                            </p>
                            <p>
                               Explore the transformative impact of technology on logistics management. Discuss how
                               technologies like IoT, AI,
                               and blockchain are reshaping the industry and improving efficiency.
                            </p>

                            <h6>Key Points</h6>
                            <ul>
                               <li>IoT and Real-Time Tracking</li>
                               <li>Artificial Intelligence in Route Optimization and Predictive Analytics</li>
                               <li>Blockchain for Enhanced Transparency and Security</li>
                               <li>Warehouse Automation and Robotics</li>
                            </ul>

                            <h4>Conclusion</h4>
                            <p>
                               Emphasize the long-term benefits of integrating sustainable practices into logistics
                               operations, both for the
                               planet and a company's reputation.
                            </p>

                            <p>
                               These outlines can be expanded into comprehensive blog posts, each providing valuable
                               insights and information on
                               the respective topics.
                            </p>
                         </div>
                      </div>
                   </article>

                   <!-- post tags & social share -->
                   <div class="single-post_tag_share">
                      <!-- post tags -->
                      <div class="tj_tag">
                         <h4 class="tag__title">Tags:</h4>
                         <div class="tagcloud">
                            <a href="#" rel="tag">Business</a>
                            <a href="#" rel="tag">Analysis</a>
                            <a href="#" rel="tag">Technology</a>
                            <a href="#" rel="tag">Design</a>
                            <a href="#" rel="tag">Strategy</a>
                            <a href="#" rel="tag">Tips</a>
                         </div>
                      </div>
                      <div class="share_link">
                         <a href="#" target="_blank" class="facebook" title="Share this on Facebook"><i
                               class="fa-brands fa-facebook-f"></i></a>
                         <a href="#" class="twitter" title="Share this on Twitter" target="_blank"><i
                               class="fa-brands fa-x-twitter"></i></a>
                         <a href="#" class="linkedin" title="Share this on Linkedin" target="_blank"><i
                               class="fa-brands fa-linkedin-in"></i></a>
                         <a href="#" class="pinterest" title="Pin this Post" target="_blank"><i
                               class="fa-brands fa-pinterest-p"></i></a>
                      </div>
                   </div>

                   <!-- post navigation -->
                   <div class="single-post__navigation">
                      <!-- previous post -->
                      <div class="tj-navigation_post previous">
                         <div class="tj-navigation-post_inner prev_post">
                            <div class="navigation-post_img">
                               <a href="#"> <img src="assets/img/blog/1.jpg" alt="" /> </a>
                            </div>
                            <div class="tj-content">
                               <div class="post_pagination_nav"><i
                                     class="fa-regular fa-angle-double-left"></i>previous</div>
                               <div class="post_pagination_title">
                                  <h5 class="title">
                                     <a href="#">Building a Real Estate Website Tips and Ideas</a>
                                  </h5>
                               </div>
                            </div>
                         </div>
                      </div>

                      <!-- next post -->

                      <div class="tj-navigation_post next">
                         <div class="tj-navigation-post_inner next_post">
                            <div class="tj-content">
                               <div class="post_pagination_nav">Next<i class="fa-regular fa-angle-double-right"></i>
                               </div>
                               <div class="post_pagination_title">
                                  <h5 class="title">
                                     <a href="#">Architecture Is Not Based On Concrete And Steel</a>
                                  </h5>
                               </div>
                            </div>
                            <div class="navigation-post_img">
                               <a href="#"> <img src="assets/img/blog/2.jpg" alt="" /> </a>
                            </div>
                         </div>
                      </div>
                   </div>

                   <!-- comments area -->
                   <div class="tj-comments__container">
                      <div class="tj-comments__wrap">
                         <div class="tj-comment__title">
                            <h3>3 Comments</h3>
                         </div>

                         <div class="tj-latest__comments">
                            <ul>
                               <li class="tj__comment">
                                  <div class="tj-comment__wrap">
                                     <div class="comment__avatar">
                                        <img alt="" src="assets/img/blog/user-1.jpg" />
                                     </div>
                                     <div class="comment__text">
                                        <div class="avatar__name">
                                           <h5><a href="#">Jane Doe</a></h5>
                                           <span>January 3, 2024</span>
                                        </div>
                                        <p>
                                           England dotted with a lush, green landscape, rustic villages and throbbing
                                           with humanity. South Asian
                                           country that has plenty to offer to visitors with its diverse wildlife.
                                        </p>
                                        <div class="comment__reply">
                                           <a class="comment-reply-link" href="#">Reply</a>
                                        </div>
                                     </div>
                                  </div>

                                  <ul class="children">
                                     <li class="tj__comment">
                                        <div class="tj-comment__wrap">
                                           <div class="comment__avatar">
                                              <img alt="" src="assets/img/blog/user-2.jpg" />
                                           </div>
                                           <div class="comment__text">
                                              <div class="avatar__name">
                                                 <h5><a href="#"> Fred Bloggs</a></h5>
                                                 <span>February 3, 2024</span>
                                              </div>
                                              <p>
                                                 It is a long established fact that a reader will be distracted by the
                                                 readable content of a page
                                                 when looking at its layout. The point of using Lorem Ipsum is that it
                                                 has a more-or-less normal
                                                 distribution of letters, as opposed to using 'Content here making it
                                                 look like readable English.
                                              </p>
                                              <div class="comment__reply">
                                                 <a class="comment-reply-link" href="#">Reply</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>

                                     <li class="tj__comment">
                                        <div class="tj-comment__wrap">
                                           <div class="comment__avatar">
                                              <img alt="" src="assets/img/blog/user-3.jpg" />
                                           </div>
                                           <div class="comment__text">
                                              <div class="avatar__name">
                                                 <h5><a href="#">Jane Bloggs</a></h5>
                                                 <span>January 13, 2024</span>
                                              </div>
                                              <p>
                                                 But I must explain to you how all this mistaken idea of denouncing
                                                 pleasure and praising pain
                                                 was born and I will give you a complete account
                                              </p>
                                              <div class="comment__reply">
                                                 <a class="comment-reply-link" href="#">Reply</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                  </ul>
                               </li>
                               <li class="tj__comment">
                                  <div class="tj-comment__wrap">
                                     <div class="comment__avatar">
                                        <img alt="" src="assets/img/blog/user-4.jpg" />
                                     </div>
                                     <div class="comment__text">
                                        <div class="avatar__name">
                                           <h5><a href="#">Themedemos</a></h5>
                                           <span>January 20, 2024</span>
                                        </div>
                                        <p>
                                           There are many variations of passages of Lorem Ipsum available, but the
                                           majority have suffered
                                           alteration in some form, by injected humour, or randomised words which
                                           don't look even slightly
                                           believable. If you are going to use a passage you need to be sure there
                                           isn't anything embarrassing
                                           hidden in the middle of text. All the
                                        </p>
                                        <div class="comment__reply">
                                           <a class="comment-reply-link" href="#">Reply</a>
                                        </div>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>

                      <div class="comment-respond">
                         <h3 class="comment-reply-title">
                            <span class="tj-comment__title">Leave a Reply</span>
                         </h3>

                         <form action="https://themejunction.net/html/gerold/demo/index-light.html" class="tj-post-comment__form">
                            <p class="comment-notes">
                               <span id="email-notes">Your email address will not be published.</span>
                               <span class="required-field-message">Required fields are marked <span
                                     class="required">*</span></span>
                            </p>

                            <div class="row">
                               <div class="col-md-6">
                                  <div class="form_group">
                                     <input placeholder="Enter Name" id="author" name="author" type="text"
                                        aria-required="true" />
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form_group">
                                     <input placeholder="Enter Email" id="email" name="email" type="email"
                                        aria-required="true" />
                                  </div>
                               </div>
                               <div class="col-md-12">
                                  <div class="form_group">
                                     <input placeholder="Enter Website" id="url" name="url" type="url" />
                                  </div>
                               </div>
                            </div>

                            <div class="row">
                               <div class="col-md-12">
                                  <div class="form_group">
                                     <textarea class="msg-box" placeholder="Enter Your Comments" id="comment"
                                        name="comment" cols="45" rows="8"></textarea>
                                  </div>
                               </div>
                               <div class="clearfix"></div>
                            </div>

                            <p class="comment-form-cookies-consent">
                               <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                  type="checkbox" value="yes" />
                               <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                  browser for the next time I comment.</label>
                            </p>
                            <button class="tj-btn-primary submit" type="submit">Post Comment</button>
                         </form>
                      </div>
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