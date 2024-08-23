@extends('layouts.layout')

@section('content')


Here is the HTML code properly indented:

```html
<section class="show-welcome-area bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/54.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="show-welcome-text text-center">
                    <p>The now show on radio 4</p>
                    <h2>Andrew Peach Birthday Surprise!</h2>
                    <span>Tuesday (09:00am - 11:30am)</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="show-routine-area section-padding-80-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" id="showRoutineTab" role="tablist">
                    @foreach ($categories as $category )
                    <li class="nav-item">
                        <a class="nav-link @if($loop->iteration == 1) active @endif" id="tab-{{ $category->id }}" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab{{ $category->id }}" aria-selected="true">
                           {{ $category->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="showRoutineTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/55.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>01:00am - 02:30am</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/56.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>03:00am - 05:30am</span>
                                            <h5>As BBC Radio 5 live</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/57.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>06:00am - 07:30am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/58.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>09:00am - 11:30am</span>
                                            <h5>Berkshire Sport: Extra Time</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/59.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>12:00pm - 13:30pm</span>
                                            <h5>Tony Blackburn on BBC Radio</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/60.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>15:00am - 17:00pm</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/61.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>18:00pm - 19:30pm</span>
                                            <h5>Stereo Underground</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/62.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>20:00pm - 22:00pm</span>
                                            <h5>Danyl Johnson and Natasha Watts</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/63.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>23:00pm - 01:00am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/55.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>01:00am - 02:30am</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/56.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>03:00am - 05:30am</span>
                                            <h5>As BBC Radio 5 live</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/57.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>06:00am - 07:30am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6

 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/58.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>09:00am - 11:30am</span>
                                            <h5>Berkshire Sport: Extra Time</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/59.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>12:00pm - 13:30pm</span>
                                            <h5>Tony Blackburn on BBC Radio</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/60.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>15:00am - 17:00pm</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/61.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>18:00pm - 19:30pm</span>
                                            <h5>Stereo Underground</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/62.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>20:00pm - 22:00pm</span>
                                            <h5>Danyl Johnson and Natasha Watts</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/63.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>23:00pm - 01:00am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/55.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>01:00am - 02:30am</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/56.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>03:00am - 05:30am</span>
                                            <h5>As BBC Radio 5 live</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/57.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>06:00am - 07:30am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/58.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>09:00am - 11:30am</span>
                                            <h5>Berkshire Sport: Extra Time</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/59.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>12:00pm - 13:30pm</span>
                                            <h5>Tony Blackburn on BBC Radio</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/60.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>15:00am - 17:00pm</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/61.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>18:00pm - 19:30pm</span>
                                            <h5>Stereo Underground</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/62.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>20:00pm - 22:00pm</span>
                                            <h5>Danyl Johnson and Natasha Watts</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/63.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>23:00pm - 01:00am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/55.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>01:00am - 02:30am</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/56.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>03:00am - 05:30am</span>
                                            <h5>As BBC Radio 5 live</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/57.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>06:00am - 07:30am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/58.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>09:00am - 11:30am</span>
                                            <h5

>Berkshire Sport: Extra Time</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/59.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>12:00pm - 13:30pm</span>
                                            <h5>Tony Blackburn on BBC Radio</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/60.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>15:00am - 17:00pm</span>
                                            <h5>BBC Music Introducing in</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/61.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>18:00pm - 19:30pm</span>
                                            <h5>Stereo Underground</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/62.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>20:00pm - 22:00pm</span>
                                            <h5>Danyl Johnson and Natasha Watts</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-show-item mb-30">
                                    <img src="img/bg-img/63.jpg" alt>
                                    <div class="overlay-content">
                                        <div class="text-center">
                                            <span>23:00pm - 01:00am</span>
                                            <h5>Andrew Peach Birthday Surprise!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
```
<!-- Mirrored from preview.colorlib.com/theme/razo/show.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2024 06:05:08 GMT -->
</html>

@endsection