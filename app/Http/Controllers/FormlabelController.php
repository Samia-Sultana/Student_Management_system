<?php

namespace App\Http\Controllers;

use App\Models\formlabel;
use Illuminate\Http\Request;

class FormlabelController extends Controller
{
       public function show()
    {
        $formfields = formlabel::all();
        return view('admin.adminSection.student_applicationform_setup',compact('formfields'));
    }

    
    public function create(Request $request)
    {
        $relatedField = $request->relatedField;

        formlabel::where('relatedField', $relatedField)->update([

            'labelName' => $request->labelName,
        ]);

        return redirect()->route('studentFormsetupView');
    }

    
}
