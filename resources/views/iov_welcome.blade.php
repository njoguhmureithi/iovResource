@extends('layouts.layout')

@section('content')


<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        @foreach ($sermons as $sermon)
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/{{ $loop->iteration }}.jpg);">
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-md-9 col-lg-6">
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInUpBig" data-delay="100ms">{{ $sermon->title }}</h2>
                                <h5 data-animation="fadeInUpBig" data-delay="400ms"> Uploaded on {{ \Carbon\Carbon::parse($sermon->uploaded_at)->format('M d, Y') }} Ministered By: {{ $sermon->speaker->name ?? '' }}</h5>
                                <a href="{{ route('sermonContent', ['sermon' => $sermon]) }}" class="btn razo-btn btn-2" data-animation="fadeInUpBig" data-delay="700ms">Play Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>


<section class="razo-blog-area section-padding-80-0">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8">
                <div class="weekly-news-area mb-50">

                    <div class="section-heading">
                        <h2> Sermon Notes</h2>
                    </div>
                   
                    <div class="featured-post-area bg-img bg-overlay mb-30" style="background-image: url(img/bg-img/11.jpg);">
                        <div class="post-overlay">
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="false"></i> 2.1k</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                            </div>
                            <a href="single-blog.html" class="post-title">{{ $featured_note->sermon->title ?? 'No Title' }}</a>
                        </div>
                    </div>
                    
                    
                
                <div class="row">
                @foreach ($sermonNotes as $note)
                    <div class="col-12 col-md-6">
                        <div class="razo-single-post d-flex mb-30">
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="{{ $note->sermon->cover_image }}" alt></a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">{{ $note->sermon->title ?? 'No Title' }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    </div>
                    <div class="view-more-button text-center">
                        <a href="#" class="btn razo-btn mt-50">View More</a>
                    </div>
                </div>
            </div>

            

            <div class="col-12 col-md-4">
                <div class="trending-news-area mb-50">

                    <div class="section-heading">
                        <h2>Trending</h2>
                    </div>

                    <div class="featured-post-area small-featured-post bg-img bg-overlay mb-30" style="background-image: url(img/bg-img/12.jpg);">
                        <div class="post-overlay">
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                            </div>
                            <a href="single-blog.html" class="post-title">Hawaii braces for Hurricane Lane</a>
                        </div>
                    </div>

                    <div class="razo-single-post d-flex mb-30">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/17.jpg" alt></a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                            </div>
                            <a href="single-blog.html" class="post-title">Hurricane Lane brings 19 inches of rain</a>
                        </div>
                    </div>

                    <div class="razo-single-post d-flex mb-30">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/18.jpg" alt></a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                            </div>
                            <a href="single-blog.html" class="post-title">What these victims want the Pope to know</a>
                        </div>
                    </div>

                    <div class="razo-single-post d-flex mb-30">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/19.jpg" alt></a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                            </div>
                            <a href="single-blog.html" class="post-title">What happens if you don't have a will?</a>
                        </div>
                    </div>

                    <div class="razo-single-post d-flex mb-30">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/20.jpg" alt></a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                            </div>
                            <a href="single-blog.html" class="post-title">Giuliani: No reason for Trump impeachment</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/31.jpg);">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <div class="section-heading white">
                    <h2>Audio Sermons</h2>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="show-all-button mb-50 text-right">
                    <a href="#" class="btn show-all-btn">Show All Trending (Top 10)</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>1.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/25.jpg" alt>
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.html">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Way Back Home - <span>RadioDaily Show</span></h5>
                        </div>
                    </div>
                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">Download</a>
                    </div>
                </div>

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>2.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/26.jpg" alt>
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.html">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Goodbye &amp; Good Riddance - <span>Juice World</span></h5>
                        </div>
                    </div>
                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">Download</a>
                    </div>
                </div>

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="500ms">
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>3.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/27.jpg" alt>
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.html">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>The Greatest Showman - <span>Soundtrack</span></h5>
                        </div>
                    </div>
                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">Download</a>
                    </div>
                </div>

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="700ms">
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>4.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/28.jpg" alt>
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.html">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Mamma Mia! Here We Go Again - <span>Soundtrack</span></h5>
                        </div>
                    </div>
                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">Download</a>
                    </div>
                </div>

                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="900ms">
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>5.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/29.jpg" alt>
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.html">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Pray For The Wicked - <span>Panic! At The Disco</span></h5>
                        </div>
                    </div>
                    <div class="music-price">
                        <a href="#" class="btn razo-btn btn-2">Download</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="razo-trending-video-area section-padding-80-0 mb-50">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Trending Video</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <div class="featured-trending-video mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <iframe src="https://www.youtube.com/embed/pS__ttyHIJw?si=oFQfZyVxRfhegYJI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            {{-- <div class="col-12 col-md-6 col-lg-4">
                <div class="razo-single-post d-flex mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img src="img/bg-img/2.jpg" alt></a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Epileptic boy's cannabis let through border</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="razo-single-post d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img src="img/bg-img/3.jpg" alt></a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Ben Affleck completes addic treatment</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="razo-single-post d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img src="img/bg-img/4.jpg" alt></a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Boaters have close call with humpback whale</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="razo-single-post d-flex mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img src="img/bg-img/5.jpg" alt></a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Suspect in Mollie Tibbetts' killing gave false</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="razo-single-post d-flex mb-30 wow fadeInUp" data-wow-delay="900ms">
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img src="img/bg-img/6.jpg" alt></a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Some of Mollie Tibbetts' family don't want</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="razo-single-post d-flex mb-30 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="post-thumbnail">
                        <a href="single-blog.html"><img src="img/bg-img/7.jpg" alt></a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Trump: Impeach somebody who's done great job?</a>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>

<section class="razo-app-download-area section-padding-80-0 bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/21.jpg);">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-md-6">
                <div class="app-thumbnail mb-80">
                    <img src="img/bg-img/iov-app.png" alt>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="app-download-text mb-80">
                    <span>Download app and Enjoy unadulterated word of &amp; GOD</span>
                    <h2>IoV App</h2>
                    <p>IoV app is a resource that lets you stream and download sermon videos and music. You may also download and play the latest HD sermon series and publications. This app will be available for Android and Ios.</p>
                    <div class="app-download-btn">
                        <a href="#"><img src="img/core-img/google-play.png" alt></a>
                        <a href="#"><img src="img/core-img/app-store.png" alt></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="razo-weekly-schedule-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="weekly-schedule-table table-responsive">

                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Weekly Schedule</h2>
                        </div>
                    </div>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <p>Monday</p>
                                </th>
                                <th scope="col">
                                    <p>Tuesday</p>
                                </th>
                                <th scope="col">
                                    <p>Wednesday</p>
                                </th>
                                <th scope="col">
                                    <p>Thursday</p>
                                </th>
                                <th scope="col">
                                    <p>Friday</p>
                                </th>
                                <th scope="col">
                                    <p>Saturday</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <td scope="row">
                                    <p>Morning Prayers - Virtual</p>
                                    <span>05:00 am - 05:45 pm</span>
                                </td>
                                <td>
                                    <p>Morning Prayers - Virtual</p>
                                    <span>05:00 am - 05:45 pm</span>
                                </td>
                                <td>
                                    <p>Morning Prayers - Virtual</p>
                                    <span>05:00 am - 05:45 pm</span>
                                </td>
                                <td>
                                    <p>Morning Prayers - Virtual</p>
                                    <span>05:00 am - 05:45 pm</span>
                                </td>
                                <td>
                                    <p>Morning Prayers - Virtual</p>
                                    <span>05:00 am - 05:45 pm</span>
                                </td>
                                <td>
                                    <p>IoV Phsical Meeting - To be Confirmed</p>
                                    <span>09:00 am - 03:00 pm</span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">
                                </th>
                                <td></td>
                                <td>
                                    <p>School of Grace</p>
                                    <span>05:00 pm - 06:30 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <p>Night Vigil - Monthly</p>
                                    <span>09:00 pm - 05:00 am</span>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                           
                            {{-- <tr>
                                <th scope="row">
                                    <p>Andrew Peach Birthday Surprise!</p>
                                    <span>13:00 pm - 16:00 pm</span>
                                </th>
                                <td></td>
                                <td>
                                    <h5>BBC Music Introducing in</h5>
                                    <span>17:00 pm - 20:00 pm</span>
                                </td>
                                <td>
                                    <h5>Andrew Peach Birthday Surprise!</h5>
                                    <span>13:00 pm - 16:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <h5>Danyl Johnson and Natasha Watts</h5>
                                    <span>13:00 pm - 16:00 pm</span>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="razo-latest-news-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/32.jpg);">
    <div class="container">
        <div class="row align-items-end">

            <div class="col-sm-6">
                <div class="section-heading white">
                    <h2>Upcoming Events</h2>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="show-all-button mb-50 text-right">
                    <a href="#" class="btn show-all-btn">Show All Events</a>
                </div>
            </div>
        </div>
    </div>

    <div class="razo-latest-news-slide owl-carousel">

        <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(img/bg-img/22.jpg);">
            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits Los Angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>

            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(img/bg-img/23.jpg);">
            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits Los Angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>

            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="razo-single-latest-news-area bg-overlay bg-img" style="background-image: url(img/bg-img/24.jpg);">
            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits Los Angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>

            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

    </div>
</section>



@endsection