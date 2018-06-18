<?php

namespace App\Http\Controllers\Journey;

use App\Journey;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class journeyController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journeys = Journey::all();
        return $this->showAll($journeys);
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
            'journey_source' => 'required',
            'journey_destination' => 'required',
            'reporting_time' => 'required',
            'departure_time' => 'required',
        ];

        $this->validate($request, $rules);

        $newJourney = Journey::create($request->all());

        return $this->showOne($newJourney, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function show(Journey $journey)
    {
        return $this->showOne($journey);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function edit(Journey $journey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journey $journey)
    {
        $journey->fill($request->only([
            'journey_source',
            'journey_destination',
            'reporting_time',
            'departure_time',
        ]));

        if($journey->isClean()){
            return $this->errorResponse('You have not modified any values.', 422);
        }

        $journey->save();

        return $this->showOne($journey);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journey $journey)
    {
        $journey->delete();

        return $this->showOne($journey);
    }
}
