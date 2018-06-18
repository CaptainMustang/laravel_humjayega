<?php

namespace App\Http\Controllers\Vehicle;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class vehicleController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return $this->showAll($vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'type' => 'required',
            'vehicle_no' => 'required',
            'no_of_seats' => 'required',
            'driver_name' => 'required',
            'driver_phno' => 'required',
            'vehicle_img' => 'required',
            'seat_unit_price' => 'required',
        ];

        $this->validate($request, $rules);

        $newVehicle = Vehicle::create($request->all());

        return $this->showOne($newVehicle, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return $this->showOne($vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->fill($request->only([
            'type',
            'vehicle_no',
            'no_of_seats',
            'driver_name',
            'driver_phno',
            'vehicle_img',
            'seat_unit_price',
        ]));

        if($vehicle->isClean()){
            return $this->errorResponse('You have not modified any values.', 422);
        }

        $vehicle->save();

        return $this->showOne($vehicle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return $this->showOne($vehicle);
    }
}
