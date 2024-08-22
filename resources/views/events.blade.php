@extends('layouts')

@section('content')

<section class="event-welcome-area bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/54.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="event-welcome-text text-center">
                    <span>Event start on 19 March, 2018</span>
                    <h2>Drop The Colors</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="coming-soon-clock mt-30 mb-30">
                        <div id="clock"></div>
                    </div>
                    <div class="event-btn-group">
                        <a href="#" class="btn razo-btn mt-2 mt-sm-0 btn-2 mx-2">View Events</a>
                        <a href="#" class="btn razo-btn mt-2 mt-sm-0 mx-2"><i class="fa fa-cart"></i> Buy Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="event-search-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="event-search-content">
                    <form action="#" class="search-form">
                        <div class="row align-items-end">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="event-date">Events from</label>
                                    <input type="date" class="form-control" id="event-date">
                                    <small class="form-input-icon"><i class="icon_calendar"></i></small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="11 Rose St, Brooklyn, NY">
                                    <small class="form-input-icon"><i class="icon_pin_alt"></i></small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="search">Search</label>
                                    <input type="search" class="form-control" id="search" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group text-right">
                                    <button type="submit" class="btn razo-btn w-100">Search Event</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="razo-events-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <div class="event-thumbnail">
                        <img src="img/bg-img/64.jpg" alt>
                    </div>
                    <div class="event-content d-flex align-items-center">
                        <div class="event-text">
                            <h5>Does our economic model need a re-think?</h5>
                            <div class="event-meta">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> March 11, 2018</a>
                                <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                <a href="#" class="event-address"><i class="icon_pin_alt"></i> 11 Rose St, Brooklyn, NY</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="event-purchase-button">
                            <a href="#" class="btn razo-btn"><i class="icon_cart"></i> Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                    <div class="event-thumbnail">
                        <img src="img/bg-img/65.jpg" alt>
                    </div>
                    <div class="event-content d-flex align-items-center">
                        <div class="event-text">
                            <h5>The curious case of the stolen diggers of Manukau</h5>
                            <div class="event-meta">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> March 11, 2018</a>
                                <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                <a href="#" class="event-address"><i class="icon_pin_alt"></i> 11 Rose St, Brooklyn, NY</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="event-purchase-button">
                            <a href="#" class="btn razo-btn"><i class="icon_cart"></i> Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <div class="event-thumbnail">
                        <img src="img/bg-img/66.jpg" alt>
                    </div>
                    <div class="event-content d-flex align-items-center">
                        <div class="event-text">
                            <h5>Suicide prevention strategies need more resources</h5>
                            <div class="event-meta">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> March 11, 2018</a>
                                <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                <a href="#" class="event-address"><i class="icon_pin_alt"></i> 11 Rose St, Brooklyn, NY</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="event-purchase-button">
                            <a href="#" class="btn razo-btn"><i class="icon_cart"></i> Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms">
                    <div class="event-thumbnail">
                        <img src="img/bg-img/67.jpg" alt>
                    </div>
                    <div class="event-content d-flex align-items-center">
                        <div class="event-text">
                            <h5>Christchurch musician Roy on his latest album Suffuse</h5>
                            <div class="event-meta">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> March 11, 2018</a>
                                <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                <a href="#" class="event-address"><i class="icon_pin_alt"></i> 11 Rose St, Brooklyn, NY</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="event-purchase-button">
                            <a href="#" class="btn razo-btn"><i class="icon_cart"></i> Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                    <div class="event-thumbnail">
                        <img src="img/bg-img/68.jpg" alt>
                    </div>
                    <div class="event-content d-flex align-items-center">
                        <div class="event-text">
                            <h5>Pacific new album A Lost Light came to him in a dream</h5>
                            <div class="event-meta">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> March 11, 2018</a>
                                <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                <a href="#" class="event-address"><i class="icon_pin_alt"></i> 11 Rose St, Brooklyn, NY</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="event-purchase-button">
                            <a href="#" class="btn razo-btn"><i class="icon_cart"></i> Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn razo-btn mt-30">Load More</a>
            </div>
        </div>
    </div>
</section>

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

<!-- Mirrored from preview.colorlib.com/theme/razo/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2024 06:05:15 GMT -->
</html>

@endsection
