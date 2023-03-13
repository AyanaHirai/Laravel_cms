<?php

namespace App\Http\Controllers;

use App\Models\requesters;
use Illuminate\Http\Request;

class RequestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('requesters.index');
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
     * @param  \App\Models\requesters  $requesters
     * @return \Illuminate\Http\Response
     */
    public function show(requesters $requesters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\requesters  $requesters
     * @return \Illuminate\Http\Response
     */
    public function edit(requesters $requesters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\requesters  $requesters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, requesters $requesters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requesters  $requesters
     * @return \Illuminate\Http\Response
     */
    public function destroy(requesters $requesters)
    {
        //
    }
}
