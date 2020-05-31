@extends('layouts.layout')

@section('content')
{{-- ensure that the user is the authorized user also to ensure that he is not the admin --}}
@if(auth()->user()->job=='user') 
<!-- Header Section -->
<section>
    <div class="col-12 header-user">
        <div class="row header-content-user justify-content-center">
            <h2 class="col-10">Welcome {{ auth()->user()->FirstName }} {{ auth()->user()->LastName }}</h2>
            <button class="col-4 btn"><a href="{{url('/Reservation/makeReservation')}}">Reserve Now</a></button>
            <button class="col-4 btn ml-5"><a href="#">View Details</a></button>
        </div> 
    </div>
    <div class="row justify-content-around gallery">
        <div class="container">
            <div class="col-12">
                <h2 class="offset-6" style="text-align: center;
                color: rgb(255, 115, 0); margin: 10px 0 10px 0"> Our Beautiful Tables!<h2>
            
                <center><div class="col-6 line" style="margin-bottom: 30px"></div></center>
            </div>
            <div class="row justify-content-around">
                <div class="col-3 card">
                    <img src="/img/blur-bokeh-candle-christmas-decoration-196648.jpg" alt="" class="img-thumbnail card-img-top">
                    <div class="card-body">
                        <h3 class="card-text">Our Christmas Decoration!.</h3>
                    </div>
                </div>
                <div class="col-3 card">
                    <img src="/img/white-canopy-tent-near-coastline-872831.jpg" alt="" class="img-thumbnail card-img-top">
                    <div class="card-body">
                        <h3 class="card-text">Special Nile View Table.</h3>
                    </div>
                </div>
                <div class="col-3 card">
                    <img src="/img/people-sitting-beside-table-1679825.jpg" alt="" class="img-thumbnail card-img-top">
                    <div class="card-body">
                        <h3 class="card-text">All Your Friends Are Welcomed Here!.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- ensure that the admin is the authorized not the client user --}}
@if(auth()->user()->job=='admin')
<section>
    <div class="col-12 header">
        <div class="row header-content justify-content-center">
            <h2 class="col-8">Welcome Admin {{ auth()->user()->FirstName  }} {{ auth()->user()->LastName }}</h2>
            <button class="col-5 btn"> <a href="{{url('/registration/getInfo')}}"> view Registration </a> </button>
            <button class="col-5 ml-5 btn"><a href="{{url('/Reservation/viewReservation')}}">View Reservations</a></button>
        </div> 
    </div>
</section>
@endif    
@endsection
