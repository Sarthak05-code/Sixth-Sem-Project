<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index() {
        $institutions = Institution::latest()->get();

        return view('institutions.index' , compact('institutions'));
    }

    public function store(Request $request) {
        $valdiated = $request->validate([
            'name' => ['required' , 'string' , 'max:255'],
            'email_domain' => ['nullable' , 'string' , 'max:255']
        ]);

        Institution::create($valdiated);

        return redirect()->route('institutions.index')->with('sucess' , 'Institution created sucessfully');
    }
}
