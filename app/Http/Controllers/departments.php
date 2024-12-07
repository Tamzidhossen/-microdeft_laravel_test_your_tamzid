<?php

namespace App\Http\Controllers;

use App\Models\departments as ModelsDepartments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class departments extends Controller
{
    public function Validation(Request $request){
        $request->validate([
            'name' => ['required', 'unique'],
            'phone' => 'required',
            'address' => 'required',
            'department_id' => 'required',
            'years_of_experience' => 'required',
        ]);

        ModelsDepartments::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'department_id' => $request->dep_id,
            'years_of_experience' => $request->years_exp,
        ]);

        return redirect('/')->with('succ', 'Department Data Added Successfully');
    }

    public function filtering(Request $request){
        $DescData = DB::table('lawyers')
                        ->orderBy('years_of_experience', 'desc');
        $AseList = DB::table('lawyers')
                        ->orderBy('years_of_experience', 'asc');

        // return view('/', compact('DescData'));
    }
}
