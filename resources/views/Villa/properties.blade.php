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
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penthouse</a>
        </li>
      </ul>
      <div class="row properties-box">

        @foreach ($properties as $property )
          
        
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="{{ route('property-details', $property->id)}}"><img src="{{ asset ('uploads/' . $property->img) }}" alt=""></a>
            <span class="category">{{ $property->type}}</span>
            <h6>Rs{{ $property->price}}</h6>
            <h4><a href="{{ route('property-details', $property->id)}}">{{ $property->address}}</a></h4>
            <ul>
              <li> Bedrooms:  <span>{{ $property->bedrooms}}</span></li>
              <li> Bathrooms: <span>{{ $property->bathrooms}}</span></li>
              <li> Area: <span>{{ $property->area}}</span></li>
              <li> Floor: <span>{{ $property->floor}}</span></li>
              <li> Parking:  <span> {{ $property->parking}}</span></li>
            </ul>
            <div class="main-button">
              <a href="{{ route('property-details', $property->id)}}">Schedule a visit</a>
            </div>
          </div>
        </div>
         @endforeach

        
       
      </div>
      
      {{ $properties->links()}}
      
    </div>
    
  </div>

 @endsection