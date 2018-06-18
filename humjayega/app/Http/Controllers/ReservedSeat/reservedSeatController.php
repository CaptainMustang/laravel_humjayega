<?php

namespace App\Http\Controllers\ReservedSeat;

use App\ReservedSeat;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class reservedSeatController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservedSeats = ReservedSeat::all();
        return $this->showAll($reservedSeats);
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
     * @param  \App\ReservedSeat  $reservedSeat
     * @return \Illuminate\Http\Response
     */
    public function show(ReservedSeat $reservedSeat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservedSeat  $reservedSeat
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservedSeat $reservedSeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservedSeat  $reservedSeat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservedSeat $reservedSeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservedSeat  $reservedSeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservedSeat $reservedSeat)
    {
        //
    }
}
