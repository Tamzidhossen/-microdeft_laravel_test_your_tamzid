<?php

namespace App\Http\Controllers;

use App\Models\lawyers as ModelsLawyers;
use Illuminate\Http\Request;

class lawyers extends Controller
{
    public function DynamicForm(){
        return view('welcome');
    }

    public function addForm(Request $request){
        ModelsLawyers::insert([
            'name' => $request->name,
            'status' => $request->status,
        ]);
        return back()->with('succ', 'New Data Added Successfully');
    }
}
