<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmacyResource;
use App\Model\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
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
      return  PharmacyResource::collection(Pharmacy::latest()->get());
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
        Pharmacy::create($request->all());
        return response('created Successful',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacy $pharmacy)
    {
        return new PharmacyResource($pharmacy);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmacy $pharmacy)
    {
        $pharmacy->update($request->all());
        return response('Updated Successful',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacy $pharmacy)
    {
      $pharmacy->delete();
      return response('Deleted Successful',200);
    }
}
