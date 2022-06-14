<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Pictures::all();
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
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function show(Pictures $pictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pictures $pictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pictures $pictures)
    {
        //
    }
}
