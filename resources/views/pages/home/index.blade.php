@extends('layouts.base')
@section('meta')
    {!! seo($seoData) !!}
@endsection
@section('main')
    @include('includes.latest-post')
    @include('pages.post.list')
@endsection
