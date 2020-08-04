<?php

namespace App\Http\Controllers;

use App\Http\Resources\HealthFacilityResource;
use App\Model\Health_facility;
use Illuminate\Http\Request;

class HealthFacilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HealthFacilityResource::collection(Health_facility::latest()->get());
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
         Health_facility::create($request->all());
         return response('Created',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Health_facility  $health_facility
     * @return \Illuminate\Http\Response
     */
    public function show(Health_facility $health_facility)
    {
        return new HealthFacilityResource($health_facility);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Health_facility  $health_facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Health_facility $health_facility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Health_facility  $health_facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Health_facility $health_facility)
    {
        $health_facility->update($request->all());
        return response('Update Successfull',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Health_facility  $health_facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Health_facility $health_facility)
    {
        $health_facility->delete();
        return response('Deleted successful',200);
    }
}
