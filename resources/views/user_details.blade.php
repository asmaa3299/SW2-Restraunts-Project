@extends('layouts.layout')

@section('content')
@if(auth()->user()->job=='user')
<!-- Header Section -->
<section style="margin-top: 81px;min-height: 258px;">
    <div class="table-responsive" style="margin-top: 16%;">
        <table class="table  table-striped">
            <thead>
            <tr class="flex-wrap d-flex justify-content-between"
                data-toggle="modal">
                <th title="ID"
                    style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important">
                    #
                </th>
                <th title="Name"
                    style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                   Name
                </th>
                <th title="Email"
                    style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 15% !important;">
                    Email
                </th>
                <th title="Email"
                    style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 15% !important;">
                    Phone
                </th>
                <th title="Created At"
                    style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                    Created At
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($users as $index=>$user)
                <tr class="flex-wrap d-flex justify-content-between"
                    data-toggle="modal" style="background-color: rgb(255, 152, 67);color: #FFF;">
                    <td style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                        <p>
                            {{ $index+1 }}
                        </p>
                    </td>
                    <td style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                        <p >
                           {{ $user->FirstName." ".$user->LastName }}
                        </p>
                    </td>
                    <td style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                        <p>
                            {{ $user->email }}
                        </p>
                    </td>
                    <td style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                        <p>
                            {{ $user->phone }}
                        </p>
                    </td>
                    <td style="display:block;text-overflow: ellipsis;overflow: hidden; white-space: nowrap;width: 20% !important;">
                        <p>
                            {{ $user->created_at->toDateTimeString() }}
                        </p>
                    </td>
                </tr>
             @endforeach
            </tbody>

        </table>
    </div>
</section>
@endif
@if(auth()->user()->job=='admin')
<section>
    <div class="col-12 header">
        <div class="row header-content justify-content-center">
            <h2 class="col-8">Welcome Admin {{ auth()->user()->name }}</h2>
            <button class="col-5 btn">view Registration</button>
            <button class="col-5 ml-5 btn">view Reservations</button>
        </div> 
    </div>
</section>
@endif    
@endsection
