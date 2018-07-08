@extends('front/base');
@section('content')
<section id="jumbotron" class="mt-0 mt-md-4">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 :class="{'display-4':displayed}">Contact Us</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
</section>
@endsection