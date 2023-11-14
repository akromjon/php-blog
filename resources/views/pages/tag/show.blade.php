@extends('layouts.base')
@section('meta')
    {!! seo()->for($tag) !!}
@endsection
@section('main')
    <section class="doc_blog_classic_area sec_pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($posts as $key => $post)
                        <div class="blog_top_post blog_classic_item">
                            <img width="100%" height="400px" src="{{ $post->getFirstMediaUrl('featured') }}"
                                alt="Post Image: {{ $post->title }}">
                            <div class="b_top_post_content">
                                <div class="post_category">
                                    @empty(!$post->user)
                                        <a href="{{ route('post.show', $post->slug) }}"
                                            title="Author: {{ $post->user->name }}">By
                                            {{ $post->user->name }}</a>
                                    @endempty
                                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->fCreated }}</a>
                                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->read_duration }} Min Read</a>
                                    @foreach ($post->categories as $key => $cat)
                                        <a class="c_blue" href="{{ route('category.show', $cat->slug) }}"
                                            title="Category: {{ $cat->title }}">{{ $cat->title }}</a>
                                    @endforeach
                                </div>
                                <a href="{{ route('post.show', $post->slug) }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <p>{!! $post->description !!}</p>
                                <div class="d-flex justify-content-between p_bottom">
                                    <a href="{{ route('post.show', $post->slug) }}" class="learn_btn">Continue Reading<i
                                            class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-4">
                    <div class="blog_sidebar pl-40">
                        @include('includes.sidebar-category')
                        @include('includes.sidebar-post')
                        @include('includes.siderbar-tag')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
