<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> IoV - @yield('title')</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <span>Wait, please...</span>
        </div>
    </div>

    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <form action="https://preview.colorlib.com/theme/razo/index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Type keywords and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                        <div class="search-btn"><i class="icon_search"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="razo-social-share-area">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>

    <header class="header-area">
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="razoNav">
                        <a class="nav-brand" href="index-2.html"><img src="img/core-img/lo2.png" alt>Instruments of Valour</a>
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href= "{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('sermons') }}">Sermons</a></li>
                                    <li><a href="{{ route('events') }}">Events</a></li>
                                    <li><a href="events.html">NDC</a></li>
                                    <li><a href="{{ route('publications') }}">Publications</a></li>
                                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                                </ul>
                                <div class="social-share-icon">
                                    <i class="social_share"></i>
                                </div>
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="footer-area">
        <div class="main-footer-area section-padding-80-0">
            <div class="container">
                <div class="row justify-content-between">
     <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <a href="#" class="footer-logo"><img src="img/core-img/logo2.png" alt></a>

                        </div>
                    </div>               
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <h4 class="widget-title">Reach Us On</h4>
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="icon_phone"></i>
                                </div>
                                <div class="text">
                                    <p>+11 123 4567890</p>
                                </div>
                            </div>
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="icon_mail_alt"></i>
                                </div>
                                <div class="text">
                                    <p><a href="#" class="__cf_email__"</a>info@instrumentsofvalour.org</p>
                                </div>
                            </div>
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="icon_pin"></i>
                                </div>
                                <div class="text">
                                    <p>Nairobi, Kenya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <h4 class="widget-title">Location</h4>
                            <div class="map-area">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.964777957766!2d36.762031410946435!3d-1.1851719355198091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f232f411519c5%3A0x78b4da3fecf97a3d!2sFOUNTAIN%20GATE%20CHURCH%20BANANA!5e0!3m2!1sen!2ske!4v1725199391342!5m2!1sen!2ske" 
                                width="300" 
                                height="200" 
                                style="border:2pt;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
o
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-text">
                            <p>
                                Copyright &copy;<script data-cfasync="false" src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://newdawnchapel.org/" target="_blank">NDC Tech Team</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/razo.bundle.js"></script>
    <script src="js/default-assets/active.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8b47763afef74f6f","version":"2024.7.0","serverTiming":{"name":{"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

</html>
