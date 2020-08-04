<?php

namespace App\Http\Controllers;

use App\Http\Resources\LabTestResource;
use App\Model\LabTest;
use Illuminate\Http\Request;


    class LabTestController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LabTestResource::collection(LabTest::latest()->get());
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
        LabTest::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Lab_test  $lab_test
     * @return \Illuminate\Http\Response
     */
    public function show(LabTest $lab_test)
    {
        return new LabTestResource($lab_test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Lab_test  $lab_test
     * @return \Illuminate\Http\Response
     */
    public function edit(LabTest $lab_test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Lab_test  $lab_test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabTest $lab_test)
    {
        $lab_test->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Lab_test  $lab_test
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabTest $lab_test)
    {
        $lab_test->delete();
    }
}


