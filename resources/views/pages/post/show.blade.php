@extends('layouts.base')
@section('meta')
{!! seo()->for($post) !!}
@endsection
@section('main')
    <section class="breadcrumb_area_two">
        <div class="container">
            <div class="breadcrumb_content">
                <h1 title="Post Heading: {{$post->title}}">{{ $post->title }}</h1>
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

                            <p>{!!$post->description!!}</p>
                            {!! $post->contentWithCode !!}
                        </div>
                        <div class="blog_post_author media">
                            <div class="widget tag_widget">
                                <h4 class="c_head">Tags</h4>
                                <ul class="list-unstyled w_tag_list">
                                    @foreach ($post->tags as $key => $tag)
                                        <li><a class="{{isActive('tag.show',$tag->slug)}}" href="{{route('tag.show',$tag->slug)}}">{{$tag->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
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
