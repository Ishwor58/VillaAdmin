@extends ('layouts.main')
@section('container')

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <ul class="info">
          <li><i class="fa fa-envelope"></i> info@company.com</li>
          <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4">
        <ul class="social-links">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb"><a href="#">Home</a> / Contact Us</span>
        <h3>Contact Us</h3>
      </div>
    </div>
  </div>
</div>

<div class="contact-page section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h6>| Contact Us</h6>
          <h2>Get In Touch With Our Agents</h2>
        </div>
        <p>When you really need to download free CSS templates, please remember our website TemplateMo. Also, tell your
          friends about our website. Thank you for visiting. There is a variety of Bootstrap HTML CSS templates on our
          website. If you need more information, please contact us.</p>
        <div class="row">
          <div class="col-lg-12">
            <div class="item phone">

              @foreach ($site_config as $set )
              @if ($set->site_key == 'phone')
              <img src="{{asset ('frontend/assets/images/phone-icon.png')}}" alt="" style="max-width: 52px;">
              <h6>{{ $set->site_value}}<br><span>Phone Number</span></h6>
              @endif
              @endforeach
            </div>
          </div>
          <div class="col-lg-12">
            <div class="item email">
              @foreach ( $site_config as $set )
              @if ($set->site_key == 'email')

              <img src="{{asset ('frontend/assets/images/email-icon.png')}}" alt="" style="max-width: 52px;">
              <h6>{{$set->site_value}}<br><span>Business Email</span></h6>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <form id="contact-form" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <fieldset>
                <label for="name">Full Name</label>
                <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..."
                  required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="subject">Subject</label>
                <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-12">
        <div id="map">
          @foreach ( $site_config as $set )
          @if ($set->site_key == 'map')
          <iframe src="{{ $set->site_value }}" width="100%" height="500px" frameborder="0"
            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
            allowfullscreen=""></iframe>
          @endif
          @endforeach
        </div>
      </div>

    </div>
  </div>
</div>
@endsection