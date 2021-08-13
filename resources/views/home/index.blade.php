@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif


    <!-- FEATURED SHOES [S]-->
    <h2 class="pt-4">BESTSELLER</h2>
    <div class="row d-flex justify-content-center">
      
    </div>
    <!-- FEATURED SHOES [E]-->

    <!-- ADVANTAGE [S]-->
    <h2 class="pt-4">OUR PROMISE'S</h2>
    <div class="row m-0 pt-4">
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="" alt="">
          <h4>FREE SHIPPING</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="" alt="">
          <h4>PREMIUM AND ORIGINAL</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="" alt="">
          <h4>24/7 CUSTOMER SUPPORT</h4>
      </div>
    </div>
    <!-- ADVANTAGE [E]-->

</div>

@endsection