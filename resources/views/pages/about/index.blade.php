@extends('layouts.base')
@section('meta')
    {!! seo($seoData) !!}
@endsection
@section('main')
    <section class="contact_area sec_pad">
        <div class="container">
            <div class="section_title text-left">
                <h2 class="h_title wow fadeInUp">Contact Us</h2>
            </div>
            <livewire:contact />
        </div>
    </section>
@endsection
