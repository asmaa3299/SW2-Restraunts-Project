@extends('layouts.layout')

@section('content')

 <div class="row" style="margin-top: 150px;">
     <div class="col-md-9 offset-md-2">
         <h3>Edit Your Account</h3>
         <hr>
        <form action="{{'/User/user_details'}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">        
                    <label for="title">FirstName</label>
                    <input type="text" name="FirstName" id="FirstName" class="form-control" value="{{$user->FirstName}}">
                </div>
                <div class="form-group">
                    <label for="title">LastName</label>
                    <input type="text" name="LastName" id="LastName" class="form-control" value="{{$user->LastName}}">
                </div>
                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                </div> 
                <div class="form-group">
                    <label for="title">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}">
                </div>
    
            
    
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

         
     </div>
 </div>
@endsection
