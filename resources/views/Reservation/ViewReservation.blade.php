@extends('layouts.layout')
<div class="container">
    <h2 style="margin-top:100px; text-align: center; text-decoration: underline;">
        The Reservations</h2>
    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse" style="margin-top:30px;overflow-y:scroll; height:400px;">
          <table class="table table-dark">
      <thead>
        <tr>
            <th scope="col">UserID</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col" style="text-align: center;">Email</th>
            <th scope="col"  style="text-align: center;">Phone</th>
            <th scope="col">TableID</th>
            <th scope="col">GuestsNumber</th>
            <th scope="col">TheView</th>
            <th scope="col">Date</th>
            <th scope="col">StartTime</th>
            <th scope="col">EndTime</th>
            <td>Action</td>
        </tr>
      </thead>
      <tbody  >
        @foreach ($reserv as $re)
                <tr>
                <td  style="text-align: center;">{{ $re->user_id }}</td>
                <td>{{ $re->FirstName }}</td>
                <td>{{ $re->LastName }}</td>
                <td>{{ $re->email }}</td>
                <td>{{ $re->phone }}</td>
                <td style="text-align: center;">{{ $re->table_id }}</td>
                <td  style="text-align: center;">{{ $re->guests }}</td>
                <td>{{ $re->view }}</td>
                <td>{{ $re->date }}</td>
                <td>{{ $re->starttime }}</td>
                <td>{{ $re->endtime }}</td>
                <td>
                    <form action="{{url('/Reservation/delete/'.$re->id)}}" method="post" style="display: inline-block;">
                        {{csrf_field()}}
                        {{method_field('delete')}}

                        <button type="submit" class="btn btn-danger delete btn-sm">Delete</button>

                    </form>

                </td>
                </tr>
                @endforeach
      </tbody>
    </table>
        </div>
      </div>
    </div>
  </div>

    
