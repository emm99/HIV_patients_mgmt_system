<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepedencyResource;
use App\Model\Dependency;
use Illuminate\Http\Request;

class DependencyController extends Controller
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
       return DepedencyResource::collection(Dependency::latest()->get());
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
        Dependency::create($request->all());
        return response('Created',201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Model\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function show(dependency $dependency)
    {
        return new DepedencyResource($dependency);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\dependency  $dependency
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dependency $dependency)
    {
        $dependency->update($request->all());
        return response('Updated Successful',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function destroy(dependency $dependency)
    {
        $dependency->delete();
        return response('Deleted Successful',200);
    }
}
