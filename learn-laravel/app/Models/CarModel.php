<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public $table = 'car_models' ;

    public $primaryKey = 'id';

    //A car model belongs to a car 
    public function car(){
        return $this->belongTo(Car::class);
    }

}
