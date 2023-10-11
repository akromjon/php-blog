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
        @yield('main')
        @if (DoNotShow(['privacy','contact']))
            @include('includes.subscribe')
        @endif
        @include('includes.footer')
    </div>
    <a id="back-to-top" title="Back to Top"></a>
    @include('includes.scripts')
</body>

</html>
