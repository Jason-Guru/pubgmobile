@extends('front.base')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/images/pubg2-w1063-o.jpg?auto=yes&bg=777&fg=555&text=First slide')}}" alt="First slide" style="max-height: 700px; ">
            <div class="carousel-caption d-none d-md-block">
                <h5>Join Tournament Now</h5>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/pubg-mobile-w1200-o.jpg?auto=yes&bg=666&fg=444&text=Second slide')}}" alt="Second slide" style="max-height: 700px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Join Tournament Now</h5>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/pubg-mobile-game-1-w1920-o.jpg?auto=yes&bg=555&fg=333&text=Third slide')}}" alt="Third slide" style="max-height: 700px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Join Tournament Now</h5>
            </div>
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
@endsection