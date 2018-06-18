<?php

namespace App\Http\Controllers\VehicleUnavailable;

use App\VehicleUnavailable;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class vehicleUnavailableController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleUnavailables = VehicleUnavailable::all();
        return $this->showAll($vehicleUnavailables);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VehicleUnavailable  $vehicleUnavailable
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleUnavailable $vehicleUnavailable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VehicleUnavailable  $vehicleUnavailable
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleUnavailable $vehicleUnavailable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VehicleUnavailable  $vehicleUnavailable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleUnavailable $vehicleUnavailable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VehicleUnavailable  $vehicleUnavailable
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleUnavailable $vehicleUnavailable)
    {
        //
    }
}
