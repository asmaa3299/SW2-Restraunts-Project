@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 style="  margin-top:100px; color: rgb(255, 115, 0); text-align: center;"> Reservation Tickets </h1>
        <div class="panel-group">
            <div class="panel panel-default">
                <div id="collapse1" class="panel-collapse" style="margin-top:30px;overflow-y:scroll; height:400px;">
                
                    <table class="table table-hover">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col">Table ID</th>
                                <th scope="col">Number of Guests</th>
                                <th scope="col">Table View</th>
                                <th scope="col">Date</th>
                                <th scope="col">Reservation start time</th>
                                <th scope="col">Reservation end time</th>
                            </tr>
                        </thead>
                        <tbody  >
                            @foreach ($reserve as $rev)
                                <tr>
                                    <td>{{ $rev->table_id }}</td>
                                    <td>{{ $rev->guests }}</td>
                                    <td>{{ $rev->date  }}</td>
                                    <td>{{ $rev->starttime }}</td>
                                    <td>{{ $rev->endtime }}</td>
                                        
                                    <td>
                                        
                                        <a href="#" ><button  style="background-color:  rgb(255, 115, 0); border: none;"  type = "button" class = "btn btn-primary"> Print Ticket</button></a>
                                    </td>
                                        
                                </tr>
                            @endforeach
                        </tbody>
                     </table> </ul>
            
                </div>
            </div>
        </div>
    </div>
@endsection
