<nav class="navbar navbar-expand-lg navbar-dark bg-dark" :class="{'fixed-top': isActive}" v-cloak>
    <div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent" pageValue="{{$page}}" ref="page">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" :class="{active: active==1}" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" :class="{active: active==2}" href="{{url('/tournament')}}">Tournament</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" :class="{active: active==3}" href="{{url('/rules')}}">Rules</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" :class="{active: active==4}" href="{{url('/how-to-join')}}">How to join?</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" :class="{active: active==5}" href="{{url('/contact')}}">Contact</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Gallery</a>
            <a class="dropdown-item" href="#">Videos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Ladder Board</a>
        </div>
        </li>
    </ul>
    </div>
    </div>
</nav>