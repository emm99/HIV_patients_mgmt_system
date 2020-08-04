<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClinicInfosResource;
use App\Model\Clinic_info;
use Illuminate\Http\Request;

class ClinicInfoController extends Controller
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
        return ClinicInfosResource::collection(Clinic_info::latest()->get());

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
    public function store(Request $request){
        Clinic_info::create($request->all());
        return response('Created Successful',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Clinic_info  $clinic_info
     * @return \Illuminate\Http\Response
     */
    public function show(Clinic_info $clinic_info)
    {
        return new ClinicInfosResource($clinic_info);
    }

    /**
     * Show the form for editing the specified re   source.
     *
     * @param  \App\Model\Clinic_info  $clinic_info
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinic_info $clinic_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Clinic_info  $clinic_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinic_info $clinic_info)
    {
        $clinic_info->update($request->all());
        return response('Updated Successful',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Clinic_info  $clinic_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clinic_info $clinic_info)
    {
        $clinic_info->delete();
        return response('Deleted Successful',200);
    }
}
