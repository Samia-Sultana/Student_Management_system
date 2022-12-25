<?php

namespace App\Http\Controllers;

use App\Models\Classinfo;
use App\Models\Scedule;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SceduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scedules = Scedule::all();
        $classes = Classinfo::all();
        $teachers = Teacher::all();
        return view('scedule', compact('classes','teachers','scedules'));
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
        $input = $request->all();
        $scedule = new Scedule();
        $scedule['class'] = $input['class'];
        $scedule['section'] = $input['section'];
        $scedule['day'] = $input['day'];
        $scedule['subject'] = $input['subject'];
        $scedule['teacher_id'] = $input['teacher'];
        $scedule['start_time'] = $input['start'];
        $scedule['end_time'] = $input['end'];
        $scedule->save();
        $scedules = Scedule::all();
        $classes = Classinfo::all();
        $teachers = Teacher::all();
        return view('scedule', compact('classes','teachers','scedules'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scedule  $scedule
     * @return \Illuminate\Http\Response
     */
    public function show(Scedule $scedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scedule  $scedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Scedule $scedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scedule  $scedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scedule $scedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scedule  $scedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scedule $scedule)
    {
        //
    }
}
