<?php

namespace App\Http\Controllers;
use App\Models\OjtInformation;
use Illuminate\Http\Request;

class OjtInformationController extends Controller
{
    public function store(Request $request)
{
    /*{
    dd($request->all());
}*/
    $request->validate([
        'company_name' => 'required',
        'company_address' => 'required',
        'nature_of_business' => 'required',
        'networking' => 'required',
        'training_status' => 'required',
        'level' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
    ]);

    OjtInformation::create([
        'company_name' => $request->company_name,
        'company_address' => $request->company_address,
        'nature_of_business' => $request->nature_of_business,
        'networking' => $request->networking,
        'training_status' => $request->training_status,
        'level' => $request->level,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    return back()->with('success', 'OJT Information saved successfully.');
}
}
