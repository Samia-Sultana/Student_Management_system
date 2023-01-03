<?php

namespace App\Http\Controllers;

use App\Models\Tutionfee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $id = Auth::guard('web')->user()->id;
        $studentId = 'stu'.$id;
        $tution_fees = Tutionfee::where('studentId',$studentId)->get();
        
        return view('dashboard',compact('tution_fees'));
    }
}
