<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    const UPDATED_AT = null;
    protected $fillable = [
    'id', 'table_view', 'status'
];
    public function reservation(){
        return $this->hasMany("App\Reservation");
      }
}
