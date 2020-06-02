@extends('layouts.layout')
<head>   
    <script type="text/javascript"> </script> 
  
</head> 
<body>
@section('content')
    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div id="collapse1" class="panel-collapse" style="margin-top:30px; height:400px;">
            
                    <div class="card" style="width: 50rem; color: rgb(255, 255, 255);  margin-top:150px; ">
                        <div class="card-body">
                            <h2 class="card-title"> Hunter Reservation Ticket</h2>
                            <h5 class="card-text" style="color: rgb(255, 255, 255);">Table Number: {{ $reserve->table_id }}</h5>
                            <h5 class="card-text" style="color: rgb(255, 255, 255);">Number of Guests: {{ $reserve->guests }}</h5>
                            <h5 class="card-text" style="color: rgb(255, 255, 255);">Table View: {{ $reserve->view }}</h5>
                            <h5 class="card-text" style="color: rgb(255, 255, 255);">Date: {{ $reserve->date }}</h5>
                            <h5 class="card-text" style="color: rgb(255, 255, 255);">Reservation start time: {{ $reserve->starttime }}</h5>
                            <h5 class="card-text" style="color: rgb(255, 255, 255);">Ticket Print: {{ $reserve->endtime }}</h5>
                            
                            <form> 
                                <input style=" font-size: 20px; color: rgb(255, 255, 255); background-color: rgb(255, 115, 0); border: none;  margin-top:20px; width: 55px;  text-align: center; border-radius: 10px;" type="button " value="Print" 
                                    onclick="window.print()" /> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>