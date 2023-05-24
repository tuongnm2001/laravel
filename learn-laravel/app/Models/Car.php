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

    protected $fillable=['name', 'founder', 'description','image_path'];

    // protected $hidden = ['updated_at'];

    // protected $viible = ['name','founder', 'description','updated_at'];

    public function carModels(){
        return $this->hasMany(CarModel::class);
    }

    //Define a has many through relationship
    public function engines(){
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //foreign key on CarModel table
            'model_id' , // foreign key on Engine table
        );
    }

    //Define a has one thourgh relationship
    public function productionDate(){
        return $this->hasOneThrough(
            CarProductionDate::class ,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
