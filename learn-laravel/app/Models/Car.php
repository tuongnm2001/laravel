<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $table = 'cars' ;

    public $primaryKey = 'id';

    public $timestamps = true ;

}
