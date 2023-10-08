<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body data-scroll-animation="true">
    @include('includes.preloader')

    <div class="body_wrapper">
        @include('includes.nav')
        @include('includes.search')
        {{-- <section class="page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="blog-grid.html#">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog-grid.html#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                          </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="blog-grid.html#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section> --}}
        @include('includes.latest-post')
        @include('pages.post.list')
        @include('includes.subscribe')
        <section class="doc_blog_grid_area_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_grid_post wow fadeInUp">
                            <img src="img/blog-grid/blog_grid_post7.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="blog-grid.html#">18 Min Read</a>
                                    <a class="c_blue" href="blog-grid.html#">WordPress</a>
                                </div>
                                <a href="blog-grid.html#">
                                    <h4 class="b_title">Create A WordPress Multi Step Form With weForms</h4>
                                </a>
                                <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_1.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Jason Response</h4>
                                        <div class="date">Sep 14, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                            <img src="img/blog-grid/blog_grid_post8.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="blog-grid.html#">18 Min Read</a>
                                    <a class="orange" href="blog-grid.html#">KbDoc</a>
                                </div>
                                <a href="blog-grid.html#">
                                    <h4 class="b_title">How to Create GDPR Consent Form In WordPress</h4>
                                </a>
                                <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_2.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Druid Wensleydale</h4>
                                        <div class="date">Sep 14, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.4s">
                            <img src="img/blog-grid/blog_grid_post9.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="blog-grid.html#">10 Min Read</a>
                                    <a class="cat-laravel" href="blog-grid.html#">Laravel</a>
                                </div>
                                <a href="blog-grid.html#">
                                    <h4 class="b_title">Create Conditional Logic Forms & Publish</h4>
                                </a>
                                <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_3.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Douglas Lyphe</h4>
                                        <div class="date">Nov 10, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <a href="blog-grid.html#" class="doc_border_btn all_doc_btn">Load More<i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer_area f_bg_color">
            <img class="p_absolute leaf" src="img/v.svg" alt="">
            <img class="p_absolute f_man wow fadeInRight" data-wow-delay="0.6s" src="img/home_two/f_man.png" alt="">
            <img class="p_absolute f_cloud" src="img/home_two/cloud.png" alt="">
            <img class="p_absolute f_email" src="img/home_two/email-icon.png" alt="">
            <img class="p_absolute f_email_two" src="img/home_two/email-icon_two.png" alt="">
            <img class="p_absolute f_man_two wow fadeInLeft" data-wow-delay="0.3s" src="img/home_two/man.png" alt="">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget subscribe_widget wow fadeInUp">
                                <a href="index.html" class="f_logo"><img src="img/logo.png" alt=""></a>
                                <h4 class="c_head">Subscribe to our newsletter</h4>
                                <form action="blog-grid.html#" class="footer_subscribe_form">
                                    <input type="email" placeholder="Email" class="form-control">
                                    <button type="submit" class="s_btn">Send</button>
                                </form>
                                <ul class="list-unstyled f_social_icon">
                                    <li><a href="blog-grid.html#"><i class="social_facebook"></i></a></li>
                                    <li><a href="blog-grid.html#"><i class="social_twitter"></i></a></li>
                                    <li><a href="blog-grid.html#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="blog-grid.html#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_30 wow fadeInUp" data-wow-delay="0.2s">
                                <h3 class="f_title">Company</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="blog-grid.html#">About Us</a></li>
                                    <li><a href="blog-grid.html#">Testimonials</a></li>
                                    <li><a href="blog-grid.html#">Affiliates</a></li>
                                    <li><a href="blog-grid.html#">Partners</a></li>
                                    <li><a href="blog-grid.html#">Careers</a></li>
                                    <li><a href="blog-grid.html#">KbDoc for Good</a></li>
                                    <li><a href="blog-grid.html#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title">Support</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="index-cool.html">Help Desk</a></li>
                                    <li><a href="blog-grid.html#">Knowledge Base</a></li>
                                    <li><a href="blog-grid.html#">Live Chat</a></li>
                                    <li><a href="blog-grid.html#">Integrations</a></li>
                                    <li><a href="blog-grid.html#">Reports</a></li>
                                    <li><a href="blog-grid.html#">iOS & Android</a></li>
                                    <li><a href="blog-grid.html#">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_70 wow fadeInUp" data-wow-delay="0.6s">
                                <h3 class="f_title">Doc Pages</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="doclist.html">Doc Topic</a></li>
                                    <li><a href="blog-grid.html#">Free Training</a></li>
                                    <li><a href="doc-archive.html">Doc Archive</a></li>
                                    <li><a href="changelog.html">Changelog</a></li>
                                    <li><a href="Onepage.html">Onepage Docs</a></li>
                                    <li><a href="blog-grid.html#">Conversion Tracking</a></li>
                                    <li><a href="cheatsheet.html">Cheatseet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border_bottom"></div>
                </div>
            </div>
            <div class="footer_bottom text-center">
                <div class="container">
                    <p>© 2020 All Rights Reserved by <a href="index.html">Rony</a></p>
                </div>
            </div>
        </footer>
    </div>


    <a id="back-to-top" title="Back to Top"></a>

    @include('includes.scripts')
</body>

</html>
