<?php

namespace App\Http\Controllers;

use App\Models\SkillTest;
use Illuminate\Http\Request;

class SkillTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('skill_test.index');
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
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function show(SkillTest $skillTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillTest $skillTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillTest $skillTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillTest  $skillTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillTest $skillTest)
    {
        //
    }
}
