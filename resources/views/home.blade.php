@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to Media Meter , ') }}{{Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>

<div id="carouselSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://sneakernews.com/wp-content/uploads/2022/01/Air-Jordan-1-Zoom-CMFT-CT0979-610-4.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://images.solecollector.com/complex/images/c_crop,h_1086,w_1931,x_34,y_542/c_fill,dpr_2.0,f_auto,fl_lossy,q_auto,w_680/ohsi574jmhugnizw6sso/air-jordan-1-i-denim-womens-release-date-dm9036-104-pair" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://sneakernews.com/wp-content/uploads/2022/05/stage-haze-jordan-1-555088-108-5.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#ccarouselSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
