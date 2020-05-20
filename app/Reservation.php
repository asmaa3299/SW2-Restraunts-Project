<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'guests', 'view', 'date', 'starttime','endtime',
    ];
    const UPDATED_AT = null;
    

    public function reservations(){
        return $this->belongsTo("App\User");
      }
      public function table(){
        return $this->belongsTo("App\Table");
      }
}
