<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('includes.navbar')
    @include('includes.carousel')

    <main id="app">
        <div class="container">
            @include('includes.bdaygirl')
        </div>
        @include('includes.timeplace')
        <div class="container">
            @include('includes.response')
            <hr>
            @include('includes.gallery')
        </div>
        @include('includes.scrollspy')
    </main>
    @include('includes.myfooter')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
        
        $('body').scrollspy({target: '.dotted-scrollspy'});

        $(".smooth-scroll").on("click", "a", function (e) {
            e.preventDefault();
            var t = $(this).attr("href"),
                n = $(this).attr("data-offset") ?
                $(this).attr("data-offset") :
                0;
            $("body,html").animate({
                scrollTop: $(t).offset().top - n
            }, 700)
        });
    </script>
    @if (session('okdone'))
    <script>
        $(function() {
            swal({
                // title: '{{ session('type') == 'success' ? 'Success!' : 'Oops!' }}',
                title: 'Thank you!',
                text: "{{ session('message') == 'yes' ? 'See you on October 12!' : '' }}",
                type: 'success',
                confirmButtonText: 'Ok'
            })
        });
    </script>
    @endif
</body>

</html>
