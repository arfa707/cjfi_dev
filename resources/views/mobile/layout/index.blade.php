<!DOCTYPE html>
<html class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>CJFI | {{$title??'Home'}}</title>
    <meta content="Zak Mobile App" name="description" />
    <meta content="themepassion" name="author" />
    <!-- App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/mobile/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/mobile/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/mobile/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/mobile/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/mobile/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/mobile/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/mobile/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/mobile/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/mobile/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/mobile/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/mobile/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/mobile/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/mobile/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/mobile/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mobile/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="/mobile/css/preloader.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href="/mobile/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="/mobile/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet"
        media="screen,projection" />
    <link href="/mobile/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
        media="screen,projection" />

    <!-- CORE CSS FRAMEWORK - END -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="/mobile/css/style-teal.css" type="text/css" rel="stylesheet" media="screen,projection"
        id="main-style" />
    <!-- CORE CSS TEMPLATE - END -->
    @stack('css')
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="html" data-header="light" 
        data-footer="light" 
        data-header_align="app" 
        data-menu_type="center" 
        data-menu="light" 
        data-menu_icons="on" 
        data-footer_type="left" 
        data-site_mode="dark" 
        data-footer_menu="show" 
        data-footer_menu_style="dark">
    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>

    <!-- START navigation -->
    <nav class="fixedtop topbar navigation" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/" class=" brand-logo "> <img src="/mobile/images/icons/favicon-16x16.png" alt=""> CJFI</a>
            <a href="#" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i
                    class="mdi mdi-chevron-left" data-page=""></i></a>
            <a href="#" data-target="slide-nav"
                class="waves-effect waves-circle navicon sidenav-trigger show-on-large"><i class="mdi mdi-menu"></i></a>
        </div>
    </nav>
    @include('mobile.layout.sidebar-left')
    @include('mobile.layout.slider')
    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m12 l3">
                    <div class="icon-block">
                        <h2 class="center primary-text"><i class="mdi mdi-trophy-outline"></i></h2>
                        <h6 class="center">Super Fast</h6>
                        <p class="center">Zak is designed to be super fast and light in weight. It speeds your
                            development and helps smooth user interation.</p>
                    </div>
                </div>

                <div class="col s12 m12 l3">
                    <div class="icon-block">
                        <h2 class="center primary-text"><i class="mdi mdi-shape-outline"></i></h2>
                        <h6 class="center">Tons of Features</h6>
                        <p class="center">By utilizing elements and principles of Material Design, Zak is designed with
                            unique set of features and functionalities.</p>
                    </div>
                </div>

                <div class="col s12 m12 l3">
                    <div class="icon-block">
                        <h2 class="center primary-text"><i class="mdi mdi-code-tags-check"></i></h2>
                        <h6 class="center">Quality Code</h6>
                        <p class="center">Zak follows black box level coding standard. All the code is well formatted
                            and commented.</p>
                    </div>
                </div>


                <div class="col s12 m12 l3">
                    <div class="icon-block">
                        <h2 class="center primary-text"><i class="mdi mdi-toolbox-outline"></i></h2>
                        <h6 class="center">Multi Purpose</h6>
                        <p class="center">Zak can be customized and used for any niche. The vast possibilities of this
                            template makes it multi purpose.</p>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
    <div class="row primary-bg">
        <div class="spacer"></div>
        <div class="spacer"></div>
        <h5 class="center bot-0 sec-tit white-text pad-15">Get Zak Today</h5>
        <p class="center-align white-text pad-30">ZAK is premium and multi purpose Mobile UI APP with tons of features
            and functionalities. Try it now.</p>
        <div class="center"><a class="btn-large waves-effect white black-text" target="_blank"
                href="https://themeforest.net/user/themepassion/portfolio">Buy Now</a></div>
        <div class="spacer"></div>
        <div class="spacer"></div>
    </div>
    <div class="container">
        <div class="section">

            <div class="row ">
                <div class="col s12 pad-0">
                    <h5 class="bot-20 sec-tit center ">Premium Features</h5>
                    <div class="row settings-row">

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-book-open-page-variant"></i>
                                    <h6>150+ Pages</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-midi-port"></i>
                                    <h6>Color Themes</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-invert-colors"></i>
                                    <h6>Light & Dark Mode</h6>
                                </a>
                            </div>
                        </div>


                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-flask-outline"></i>
                                    <h6>Utility Components</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-folder-multiple-outline"></i>
                                    <h6>Documentation</h6>
                                </a>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-laptop"></i>
                                    <h6>Material UI</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-open-in-app"></i>
                                    <h6>Inbuilt Apps</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-grid-large"></i>
                                    <h6>Portfolios</h6>
                                </a>
                            </div>
                        </div>


                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                    <h6>Blogs</h6>
                                </a>
                            </div>
                        </div>


                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-menu"></i>
                                    <h6>Menu Styles</h6>
                                </a>
                            </div>
                        </div>


                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-chart-line"></i>
                                    <h6>Graphical Charts</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-cards-variant"></i>
                                    <h6>Fixed Bottom Menu</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-border-top-variant"></i>
                                    <h6>Headers</h6>
                                </a>
                            </div>
                        </div>

                        <div class="col s6">
                            <div class="setting-box z-depth-1 center">
                                <a href="#!">
                                    <i class="mdi mdi-border-bottom-variant"></i>
                                    <h6>Footers</h6>
                                </a>
                            </div>
                        </div>



                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="row primary-bg">
        <div class="spacer"></div>
        <div class="spacer"></div>
        <h5 class="center bot-0 sec-tit white-text pad-15">Built with <i class="mdi mdi-heart"
                style="font-size:20px;"></i></h5>
        <p class="center-align white-text pad-30">ZAK is built by elite author with utmost care and perfection. We pour
            love in our work.</p>
        <div class="center"><a class="btn-large waves-effect white black-text" target="_blank"
                href="https://themeforest.net/user/themepassion/portfolio">Buy Now</a></div>
        <div class="spacer"></div>
        <div class="spacer"></div>
    </div>
    <div class="container">
        <div class="section">


            <div class="spacer"></div>
            <h5 class="center bot-20 sec-tit">Our Customer's Say</h5>


            <div class="slider slider3 ">
                <ul class="slides transparent testimonials">
                    <li>
                        <p class="center"><i class="mdi mdi-format-quote-open"></i> We are so pleased with the purchase
                            of this product. Zak has tons of components and features to deal with. You can really create
                            anything you like.<i class="mdi mdi-format-quote-close"></i> </p>
                        <div class=" center-align">
                            <div class="row userinfo">
                                <img src="/mobile/images/user-30.jpg" alt="" class="circle responsive-img">
                                <div class="left-align">
                                    <span class=""><strong>Kai Badger</strong>
                                        <br><span class='small'>CEO, Ink Ltd.</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <p class="center"><i class="mdi mdi-format-quote-open"></i> We highly recommend using Zak for
                            your next project. It is super quality and premium template that you can ask for. Just go
                            for it.<i class="mdi mdi-format-quote-close"></i> </p>
                        <div class=" center-align">
                            <div class="row userinfo">
                                <img src="/mobile/images/user-17.jpg" alt="" class="circle responsive-img">
                                <div class="left-align">
                                    <span class=""><strong>Lucie Hovey</strong>
                                        <br><span class='small'>Manager, Zed Ind.</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <p class="center"><i class="mdi mdi-format-quote-open"></i> A perfect template to get you going
                            for your next project. A full loaded feature packed template. It is multi purpose and super
                            fast. Thank you for such a wonderful template.<i class="mdi mdi-format-quote-close"></i>
                        </p>
                        <div class=" center-align">
                            <div class="row userinfo">
                                <img src="/mobile/images/user-8.jpg" alt="" class="circle responsive-img">
                                <div class="left-align">
                                    <span class=""><strong>Denny Veiga</strong>
                                        <br><span class='small'>Sr. Designer</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>




    <footer class="page-footer">
        <div class="container footer-content">
            <div class="row">
                <div class="">
                    <h5 class="logo">ZAK</h5>
                    <p class="text">ZAK is a super fast, premium and multi purpose Mobile APP UI template, with tons of
                        features and functionalities.</p>
                </div>
                <div class="link-wrap">
                    <ul class="link-ul">
                        <li><a class="" href="#!"><i class="mdi mdi-phone"></i> +1 234 567 890</a></li>
                        <li><a class="" href="#!"><i class="mdi mdi-email"></i> email@example.com</a></li>
                        <li><a class="" href="#!"><i class="mdi mdi-map-marker"></i> FF 1, Sector-8, Tech Street, NY,
                                USA</a></li>
                    </ul>
                    <ul class="social-wrap">
                        <li class="social">
                            <a class="" href="#!"><i class="mdi mdi-facebook"></i></a>
                            <a class="" href="#!"><i class="mdi mdi-twitter"></i></a>
                            <a class="" href="#!"><i class="mdi mdi-dribbble"></i></a>
                            <a class="" href="#!"><i class="mdi mdi-google-plus"></i></a>
                            <a class="" href="#!"><i class="mdi mdi-linkedin"></i></a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                &copy; Copyright <a class=""
                    href="https://themeforest.net/user/themepassion/portfolio">Themepassion</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <div class="backtotop">
        <a class="btn-floating btn primary-bg">
            <i class="mdi mdi-chevron-up"></i>
        </a>
    </div>

@include('mobile.layout.footer-menu')
    <!-- PWA Service Worker Code -->

    <script type="text/javascript">
        // This is the "Offline copy of pages" service worker

        // Add this below content to your HTML page, or add the js file to your page at the very top to register service worker

        // Check compatibility for the browser we're running this in
        if ("serviceWorker" in navigator) {
            if (navigator.serviceWorker.controller) {
                console.log("[PWA Builder] active service worker found, no need to register");
            } else {
                // Register the service worker
                navigator.serviceWorker
                    .register("pwabuilder-sw.js", {
                        scope: "./"
                    })
                    .then(function(reg) {
                        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
                    });
            }
        }
    </script>


    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="/mobile/js/jquery-2.2.4.min.js"></script>
    <script src="/mobile/js/materialize.js"></script>
    <script src="/mobile/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- CORE JS FRAMEWORK - END -->


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script type="text/javascript">
        $(document).ready(function() {

            $(".carousel-fullscreen.carousel-slider").carousel({
                fullWidth: true,
                indicators: true
            });
            setTimeout(autoplay, 3500);

            function autoplay() {
                $(".carousel").carousel("next");
                setTimeout(autoplay, 3500);
            }
            $(".slider3").slider({
                indicators: false,
                height: 200,
            });

        });
    </script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="/mobile/js/init.js"></script>
    <script src="/mobile/js/settings.js"></script>

    <script src="/mobile/js/scripts.js"></script>

    <!-- END CORE TEMPLATE JS - END -->


    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            $('.preloader-background').delay(10).fadeOut('slow');
        });
    </script>
</body>

</html>
