@extends('layouts.layout')



@section('content')



<section class="razo-latest-podcast-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Latest on PodCast:</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
          @foreach ($publications as $publication )
          <div class="col-12 col-md-6 col-xl-3">
              <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="100ms">
                  <div class="podcast-thumb">
                      <img src="img/bg-img/.rand(1,77).jpg" alt>  
                      <div class="like-comment">
                          <a href="#" class="like">2 <i class="icon_heart"></i></a>
                          <a href="#" class="like">2 <i class="icon_chat"></i></a>
                      </div>
                  </div>
                  <div class="podcast-content">
                      <div class="podcast-meta">
                          <a href="#"><i class="icon_calendar"></i> July 23, 2014</a>
                          <a href="#"><i class="icon_clock_alt"></i> 36 min</a>
                      </div>
                      <h5>{{ $publication->title }}</h5>
                      <div class="border-line"></div>
                      <div class="play-download-btn d-flex align-items-center justify-content-between">
                          <a href="#" class="btn razo-btn btn-sm">read now</a>
                          <a href="audio/dummy-audio.html" class="music-download-btn" download>
                              <i class="icon_download"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
          <!-- Repeat similar blocks for more podcasts here -->
      </div>
            
         

        <div class="view-more-button text-center">
            <a href="#" class="btn razo-btn mt-50">View More</a>
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8b477627ab764f6f","version":"2024.7.0","serverTiming":{"name":{"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/razo/podcast.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2024 06:04:57 GMT -->
</html>

@endsection