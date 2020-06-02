@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 style="  margin-top:100px; color: rgb(255, 115, 0); text-align: center;"> My Details</h1>
            <div class="row justify-content-center">
                <div class="card col-6" style="text-align: center" >
                    <div class="card-body">
                        <h5>First Name: {{ $user->FirstName }} </h5>
                        <h5 class="card-text">Last Name: {{ $user->LastName  }} </h5>
                        <h5 class="card-text">Email: {{ $user->email }} </h5>
                        <h5 class="card-text"> Phone Number: {{ $user->phone }} </h5>
                        <a href='#' ><button  class="btn" style="background-color:  rgb(255, 115, 0); border: none;"  type = "button"> Edit Details </button></a>

                    </div>
                </div>  
            </div>                        
    </div>

@endsection
