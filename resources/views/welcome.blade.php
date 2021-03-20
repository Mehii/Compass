@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row main">
                <div class="col-xl-12">
                    <h2>Welcome in my page</h2>
                    <h4>We're dedicated to creating the perfect holiday experience for you</h4>
                    <p>
                        Shortletsmalta ltd dedicated to creating a perfect holiday experience for anyone visiting Malta.
                        From economical to luxury holiday apartments Malta in the most exclusive locations, we cater for everyone, making sure that each and every customer is satisfied with their stay.
                        Choose from a variety of apartments for rent in Malta, from the chic and trendy Sliema to the buzzing St Julian’s – from the majestic history of Valletta to the stunning natural beauty of Mellieha.
                        The apartments are decked with all the necessities for a truly comfortable stay. Shortletsmalta is a perfect place to find a flat for rent in Malta.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/storage/{{ $car->car_image }}" style="width:100%;" alt="Prof kep">
                            </div>
                            <div class="item">
                                <img src="{{ $user->profile->profileImage() }}" alt="Chicago" style="width:100%;">
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
