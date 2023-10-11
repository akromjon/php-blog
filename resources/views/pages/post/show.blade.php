@extends('layouts.base')
@section('main')
    <section class="breadcrumb_area_two">
        <div class="container">
            <div class="breadcrumb_content">
                <h2>{{ $post->title }}</h2>
                <div class="post_category">
                    @empty(!$post->user)
                        <a href="{{ route('post.show', $post->slug) }}" title="Author: {{ $post->user->name }}">By
                            {{ $post->user->name }}</a>
                    @endempty
                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->fCreated }}</a>
                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->read_duration }} Min
                        Read</a>
                    @foreach ($post->categories as $key => $cat)
                        <a class="c_blue" href="{{ route('category.show', $cat->slug) }}"
                            title="Category: {{ $cat->title }}">{{ $cat->title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog_single_info">
                        <div class="blog_single_item">
                            <a href="{{ route('post.show', $post->slug) }}" class="blog_single_img">
                                <img width="100%" height="450px" src="{{ $post->getFirstMediaUrl('featured') }}"
                                    alt=""></a>


                            {!! $post->content !!}


                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
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
