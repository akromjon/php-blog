<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/pre-loader.js')}}"> </script>
<script src="{{asset('assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/parallaxie.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.wavify.js')}}"></script>
<script src="{{asset('assets/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/prism/prism.js')}}"></script>
@livewireScripts
@yield('livewireCustomScripts')
<script>
    $(document).ready(function () {
    //Hover Menu in Header
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    //Open Search
    $('.banner_search_form').click(function (event) {
        $(".instant-results").fadeIn('slow').css('height', 'auto');
        event.stopPropagation();
    });

    $('body').click(function () {
        $(".instant-results").fadeOut('500');
    });
});
</script>

