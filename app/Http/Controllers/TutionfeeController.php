<?php

namespace App\Http\Controllers;

use App\Models\Onlineadmission;
use App\Models\Tutionfee;
use App\Models\User;
use Illuminate\Http\Request;

class TutionfeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTutionFees = Tutionfee::all();
        return view('tutionFee', compact('allTutionFees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $students = Onlineadmission::where('status',1)->get();
        foreach($students as $student){

            Tutionfee::create([
                'studentId' => 'stu'. $student->id,
                'tution_fee' => $student->tution_fee,
                'year' => $request->year,
                'month' => $request->month,
                'status' => "pending"
            ]);
        }
        $allTutionFees = Tutionfee::all();
        return view('tutionFee', compact('allTutionFees'));
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
     * @param  \App\Models\Tutionfee  $tutionfee
     * @return \Illuminate\Http\Response
     */
    public function show(Tutionfee $tutionfee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutionfee  $tutionfee
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutionfee $tutionfee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutionfee  $tutionfee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutionfee $tutionfee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutionfee  $tutionfee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutionfee $tutionfee)
    {
        //
    }
}
