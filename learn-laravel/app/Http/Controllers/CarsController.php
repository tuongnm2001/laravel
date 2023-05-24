<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Select * from Cars 
        $cars = Car::all();
        $cars = json_decode($cars);
        return view('cars.index',[
            'cars'=> $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateValidationRequest $request)
    {
        // $car = new Car ;
        // $car->name = $request->input('name');
        // $car->founder = $request->input('founder');
        // $car->description = $request->input('description');
        // $car->save();

        $request->validated([
            'name'=>'required',
            'founder'=>'required|integer|min:0|max:2023',
            'description'=>'required',
            'image'=>'required|mimes:jpg , png , jpeg|max:5048'
        ]);

        // $newImageName = time(). '-' .$request->name . '.'. $request->image->extension();
         $newImageName = time().'-'.$request->name . '.'.$request->image->extension();


        $request->image->move(public_path('images'), $newImageName);

        dd($newImageName);

        $request->validate([
            'name'=>new Uppercase,
            'founder'=>'required|integer|min:0|max:2023',
            'description'=>'required'
        ]);

        //If it's valid , it will proceed
        //If it's not valid , thow a ValideationException


        $car = Car::create([
            'name'=>$request->input('name'),
            'founder'=>$request->input('founder'),
            'description'=> $request->input('description'),
            'image_path'=> $newImageName
        ]);
        
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        // $products = Product::find($id);

        // print_r($products);

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id)->first();

        return view('cars.edit')->with('car', $car);
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {
        $car = Car::where('id', $id)
        ->update([
            'name'=>$request->input('name'),
            'founder'=>$request->input('founder'),
            'description'=>$request->input('description')
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}
