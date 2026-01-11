<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
     public function index()
{
    $courses = Course::all(); 
    return view('html.coordinator-dashboard', compact('courses'));
}

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'acronym' => 'required',
        ]);

        Course::create($request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        return redirect()->back();
    }
}
