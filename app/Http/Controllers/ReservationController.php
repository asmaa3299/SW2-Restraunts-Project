<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Table;
use DB;
class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function makeReservation(){
        return view('Reservation.makeReservation');
    }
    public function store(Request $request){ //to store the reservation!!
        $this->validate(request(),[
            'guests' => 'required',
            'view' => 'required',
            'date' => 'required',
            'starttime' => 'required' ,
            'endtime' => 'required' ,
        ]);
        $user = auth()->user();
        //first to check if the choosen table is available or not and if yes so store it!
        if(DB::select("select id from tables where table_view = '$request->view' && status = 'available';")){
            $table_data = DB::select("select id from tables where table_view = '$request->view' && status = 'available';");
            $table = Table::find($table_data[0]->id);
            $table_Data = DB::select("select id from tables where table_view = '$request->view';");
            $table_id = $table_Data[0]->id;
            $table = Table::find($table_id);
            $table->status = 'busy';
            $table->save();
            $reservation = new Reservation;
            $reservation->user_id = $user->id;
            $reservation->FirstName = $user->FirstName;
            $reservation->LastName = $user->LastName;
            $reservation->email = $user->email;
            $reservation->phone = $user->phone;
            $reservation->table_id = $table_id;
            $reservation->guests = $request->guests;
            $reservation->view = $request->view;
            $reservation->date = $request->date;
            $reservation->starttime = $request->starttime;
            $reservation->endtime = $request->endtime;
            $reservation->save();
         return redirect('/Reservation/makeReservation')->with('status','Your Table is Reserved');
        }
        //if not then check when actualluy is it busy and compare by date and start time and end time
        else if(DB::select("select id from tables where table_view = '$request->view' && status = 'busy';")) {
            $table_data = DB::select("select id from tables where table_view = '$request->view' && status = 'busy';");
            $table = Table::find($table_data[0]->id);
            foreach($table->reservation as $reservation){
                if($reservation->date == $request->date)
                {
                    if(DB::select("select * from reservations where table_id='$table->id' && starttime <= '$request->starttime' && endtime >= '$request->endtime'") || DB::select("select * from reservations where table_id='$table->id' && starttime <= '$request->endtime' && endtime >= '$request->starttime'" ) )      
                        return redirect('/Reservation/makeReservation')->with('status','The selected table will be busy at the selected time So Try to select another one or select another time!');
                }
                else { //if it's busy but on another day or on another time!
                        $table_id = $table_data[0]->id;
                        $table = Table::find($table_id);
                        $table->status = 'busy';
                        $table->save();
                        $reservation = new Reservation;
                        $reservation->user_id = $user->id;
                        $reservation->FirstName = $user->FirstName;
                        $reservation->LastName = $user->LastName;
                        $reservation->email = $user->email;
                        $reservation->phone = $user->phone;
                        $reservation->table_id = $table_id;
                        $reservation->guests = $request->guests;
                        $reservation->view = $request->view;
                        $reservation->date = $request->date;
                        $reservation->starttime = $request->starttime;
                        $reservation->endtime = $request->endtime;
                        $reservation->save();
                    return redirect('/Reservation/makeReservation')->with('status','Your Table is Reserved');
                    
                            
                    }
                
            
            
        }
    }
            
    }
    
}

