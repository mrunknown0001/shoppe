@extends('layouts.app')

@section('content')

    <h4 class="text-center">Welcome to Trendy Shop</h4>
    <p class="text-center">
        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
        <a href="{{ route('register') }}" class="btn btn-success btn-sm">Register</a>
    </p>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active text-center">
                  <img class="" src="{{ asset('uploads/images/default/f1.jpg') }}" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                      </div>
                </div>
                <div class="carousel-item text-center">
                  <img class="" src="{{ asset('uploads/images/default/f2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item text-center">
                  <img class="" src="{{ asset('uploads/images/default/f3.jpg') }}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
    <hr>
@endsection