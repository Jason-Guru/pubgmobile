@extends('front/base')
@section('content')
<section id="jumbotron" class="mt-0 mt-md-4">
    <div class="jumbotron jumbotron-fluid" style="background:">
        <div class="container">
            <h1 :class="{'display-4':displayed}">Tournament</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
</section>
<section id="table">
    <div class="container">
        <table class="table table-bordered table-dark table-hover" id="tournament-list">
            <caption> <h4>Tournament List</h4></caption>
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date &amp; Time</th>
                <th scope="col">Registration Fee</th>
                <th scope="col">Prize</th>
                <th scope="col">Entry Code</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Pubg mobile-Miramar-Duo-50 teams</td>
                <td>10th july | 3 pm</td>
                <td>₹50</td>
                <td>₹1000</td>
                <td>00001</td>
                <td><button type="button" class="btn btn-sm btn-outline-light">Enter</button></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection