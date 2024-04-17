@extends('layouts.main')
@section('container')

<div class="main-banner">
    <div class="owl-carousel owl-banner">

      @foreach ($carousels as $carousel )
        
      
      <div class="item item-1" style="background-image: url('{{ asset('uploads/' . $carousel->img)}}');">
        <div class="header-text" >
          <span class="category"> {{ $carousel -> location }}</span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
     @endforeach
 
    </div>
  </div>

  @endsection