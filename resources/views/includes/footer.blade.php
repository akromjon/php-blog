<footer class="footer_area f_bg_color">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="f_widget link_widget wow fadeInUp" data-wow-delay="0.4s">
                        <h3 class="f_title">Follow Our Socials</h3>
                        <ul class="list-unstyled f_social_icon">
                            <li><a href="blog-grid.html#"><i class="social_facebook"></i></a></li>
                            <li><a href="blog-grid.html#"><i class="social_twitter"></i></a></li>
                            <li><a href="blog-grid.html#"><i class="social_vimeo"></i></a></li>
                            <li><a href="blog-grid.html#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="f_widget link_widget wow fadeInUp" data-wow-delay="0.4s">
                        <h3 class="f_title">Pages</h3>
                        <ul class="list-unstyled link_list">
                            <li><a href="index-cool.html">Home</a></li>
                            <li><a href="blog-grid.html#">About & Contact me</a></li>
                            <li><a href="blog-grid.html#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                   @include('includes.footer-categories')
                </div>

                <div class="col-lg-3 col-sm-6">
                    @include('includes.footer-posts')
                </div>
            </div>
            <div class="border_bottom"></div>
        </div>
    </div>
    <div class="footer_bottom text-center">
        <div class="container">
            <p>© {{now()->format("Y")}} | phphint.com | info@phphint.com</p>
        </div>
    </div>
</footer>
