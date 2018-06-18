<?php

namespace App\Http\Controllers\ReservationDailyService;

use App\ReservationDailyService;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class reservationDailyServiceController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservationDailyServices = ReservationDailyService::all();
        return $this->showAll($reservationDailyServices);
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
     * @param  \App\ReservationDailyService  $reservationDailyService
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationDailyService $reservationDailyService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservationDailyService  $reservationDailyService
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationDailyService $reservationDailyService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservationDailyService  $reservationDailyService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationDailyService $reservationDailyService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservationDailyService  $reservationDailyService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationDailyService $reservationDailyService)
    {
        //
    }
}
