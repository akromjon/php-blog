@extends('layouts.base')
@section('main')
    <section class="doc_blog_classic_area sec_pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($category->posts as $key => $post)
                        <div class="blog_top_post blog_classic_item">
                            <img width="100%" height="320px" src="{{ $post->getFirstMediaUrl('featured') }}"
                                alt="Post Image: {{ $post->title }}">
                            <div class="b_top_post_content">
                                <div class="post_category">
                                    @empty(!$post->user)
                                        <a href="blog-grid.html#" title="Author: {{ $post->user->name }}">By
                                            {{ $post->user->name }}</a>
                                    @endempty
                                    <a href="blog-grid.html#">{{ $post->fCreated }}</a>
                                    <a href="blog-grid.html#">{{ $post->read_duration }} Min Read</a>
                                    @foreach ($post->categories as $key => $cat)
                                        <a class="c_blue" href="blog-grid.html#"
                                            title="Category: {{ $cat->title }}">{{ $cat->title }}</a>
                                    @endforeach
                                </div>
                                <a href="blog-list.html#">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <p>{!! $post->limitedContent !!}</p>
                                <div class="d-flex justify-content-between p_bottom">
                                    <a href="blog-list.html#" class="learn_btn">Continue Reading<i
                                            class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-4">
                    <div class="blog_sidebar pl-40">
                        <div class="widget categorie_widget">
                            <h4 class="c_head">Post Categories</h4>
                            <ul class="list-unstyled categorie_list">
                                <li><a href="blog-list.html#">Creative <span>(12)</span></a></li>
                                <li><a href="blog-list.html#">Inspiration <span>(8)</span></a></li>
                                <li><a href="blog-list.html#">Lifestyle <span>(3)</span></a></li>
                                <li><a href="blog-list.html#">News <span>(4)</span></a></li>
                                <li><a href="blog-list.html#">Photography <span>(12)</span></a></li>
                                <li><a href="blog-list.html#">Skill <span>(15)</span></a></li>
                                <li><a href="blog-list.html#">Tourist Tours <span>(10)</span></a></li>
                                <li><a href="blog-list.html#">Inspire <span>(5)</span></a></li>
                            </ul>
                        </div>
                        <div class="widget recent_news_widget">
                            <h4 class="c_head">Reacent News</h4>
                            <div class="media recent_post_item">
                                <img src="img/blog-single/news_01.jpg" alt="">
                                <div class="media-body">
                                    <a href="blog-list.html#">
                                        <h5>Is It Worth Buying A Premium Form Builder.</h5>
                                    </a>
                                    <div class="entry_post_date">January 14, 2020</div>
                                </div>
                            </div>
                            <div class="media recent_post_item">
                                <img src="img/blog-single/news_02.jpg" alt="">
                                <div class="media-body">
                                    <a href="blog-list.html#">
                                        <h5>10 Classic Summer Vacations</h5>
                                    </a>
                                    <div class="entry_post_date">April 16, 2020</div>
                                </div>
                            </div>
                            <div class="media recent_post_item">
                                <img src="img/blog-single/news_03.jpg" alt="">
                                <div class="media-body">
                                    <a href="blog-list.html#">
                                        <h5>How To Easily Add weForms Widget Using Elementor</h5>
                                    </a>
                                    <div class="entry_post_date">March 10, 2020</div>
                                </div>
                            </div>
                            <div class="media recent_post_item">
                                <img src="img/blog-single/news_04.jpg" alt="">
                                <div class="media-body">
                                    <a href="blog-list.html#">
                                        <h5>How to Create GDPR Consent Form In WordPress</h5>
                                    </a>
                                    <div class="entry_post_date">January 19, 2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="widget tag_widget">
                            <h4 class="c_head">Tags</h4>
                            <ul class="list-unstyled w_tag_list">
                                <li><a href="blog-list.html#">Design</a></li>
                                <li><a href="blog-list.html#">Apps</a></li>
                                <li><a href="blog-list.html#">Photography</a></li>
                                <li><a href="blog-list.html#">Business</a></li>
                                <li><a href="blog-list.html#">KbDoc</a></li>
                                <li><a href="blog-list.html#">WordPress</a></li>
                                <li><a href="blog-list.html#">Design</a></li>
                                <li><a href="blog-list.html#">DocAll</a></li>
                                <li><a href="blog-list.html#">Magento</a></li>
                                <li><a href="blog-list.html#">Doc Design</a></li>
                                <li><a href="blog-list.html#">ui/ux</a></li>
                                <li><a href="blog-list.html#">Docs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
