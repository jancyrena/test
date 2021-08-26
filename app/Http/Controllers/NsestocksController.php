<?php

namespace App\Http\Controllers;

use App\Models\nsestocks;
use Illuminate\Http\Request;

class NsestocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies =  Nsestocks::all();
       
        return view('searchrate',compact('companies'));
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
     * @param  \App\Models\nsestocks  $nsestocks
     * @return \Illuminate\Http\Response
     */
    public function show(nsestocks $nsestocks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nsestocks  $nsestocks
     * @return \Illuminate\Http\Response
     */
    public function edit(nsestocks $nsestocks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nsestocks  $nsestocks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nsestocks $nsestocks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nsestocks  $nsestocks
     * @return \Illuminate\Http\Response
     */
    public function destroy(nsestocks $nsestocks)
    {
        //
    }
}
