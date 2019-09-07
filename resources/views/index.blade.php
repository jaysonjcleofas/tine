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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 100%;
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }

        .carousel,
        .carousel .carousel-inner,
        .carousel .carousel-inner .active,
        .carousel .carousel-inner .carousel-item,
        .view,
        body,
        html {
            height: 100%
        }

        .navbar {
            background-color: rgba(0, 0, 0, .2)
        }

        .page-footer,
        .top-nav-collapse {
            background-color: #1C2331
        }

        @media only screen and (max-width:768px) {
            .navbar {
                background-color: #1C2331
            }
        }

    </style>
</head>

<body>
    @include('includes.navbar')
    @include('includes.carousel')

    <!--Main layout-->
    <main id="app">
        <div class="container">
            @include('includes.bdaygirl')
        </div>
            @include('includes.timeplace')
        <div class="container">
            @include('includes.response')
            <hr class="mb-5">

            <!--Section: More-->
            <section>

                <h2 class="my-5 h3 text-center">...and even more</h2>

                <!--First row-->
                <div class="row features-small mt-5 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2 pl-3">
                                <h5 class="feature-title font-bold mb-1">Cross-browser compatibility</h5>
                                <p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves
                                    all browsers;
                                    all browsers love MDB.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Frequent updates</h5>
                                <p class="grey-text mt-2">MDB becomes better every month. We love the project and
                                    enhance as much as
                                    possible.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Active community</h5>
                                <p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it
                                    is to be a
                                    part of our family.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>
                                <p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use
                                    all the latest
                                    features which come along with
                                    it.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/First row-->

                <!--Second row-->
                <div class="row features-small mt-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Modularity</h5>
                                <p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready
                                    to use
                                    libraries including all features as
                                    well as modules for CSS (SASS files) and JS.</p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Technical support</h5>
                                <p class="grey-text mt-2">We care about reliability. If you have any questions - do not
                                    hesitate to
                                    contact us.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Flexbox</h5>
                                <p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment
                                    issues.</p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">SASS files</h5>
                                <p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you
                                    compile them.</p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/Second row-->

            </section>
            <!--Section: More-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small wow fadeIn">

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fab fa-google-plus-g mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fab fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fab fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fab fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fab fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> LegaliTINE.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    {{-- </div> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();

    </script>
</body>

</html>
