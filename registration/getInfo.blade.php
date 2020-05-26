@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 style="  margin-top:100px; color: rgb(255, 115, 0); text-align: center;"> Registration List</h1>
        <div class="panel-group">
            <div class="panel panel-default">
                <div id="collapse1" class="panel-collapse" style="margin-top:30px;overflow-y:scroll; height:400px;">
                
                
                    <table class="table table-hover">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col">UserID</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col" style="text-align: center;">Email</th>
                                <th scope="col"  style="text-align: center;">Phone</th>
                                <th scope="col">Job</th>
                            </tr>
                        </thead>
                        <tbody  >
                            @foreach ($users as $user)
                                <tr>
                                    <td  style="text-align: center;">{{ $user->id }}</td>
                                    <td>{{ $user->FirstName }}</td>
                                    <td>{{ $user->LastName  }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->job }}</td>
                                        
                                    <td>
                                        <a href="#" ><button  style="background-color:  rgb(255, 115, 0); border: none;" type="button" class="btn btn-primary"> Update </button></a>
                                            &nbsp;
                                        <a href="#" ><button  style="background-color:  rgb(255, 115, 0); border: none;"  type = "button" class = "btn btn-primary"> Delete </button></a>
                                    </td>
                                        
                                </tr>
                            @endforeach
                        </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
@endsection
