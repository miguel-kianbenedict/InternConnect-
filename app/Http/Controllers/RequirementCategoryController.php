<?php

namespace App\Http\Controllers;

use App\Models\RequirementCategory;
use Illuminate\Http\Request;

class RequirementCategoryController extends Controller
{
    public function index() {
    $categories = RequirementCategory::all();
    return view('html.professor-dashboard', compact('categories'));
}
    // Save to database
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        RequirementCategory::create(['name' => $request->name]);
        return back()->with('success', 'Category added successfully!');
    }

    // Remove from database
    public function destroy($id)
    {
        RequirementCategory::findOrFail($id)->delete();
        return back()->with('success', 'Category removed!');
    }
}

return redirect()->back()->with('active_tab', 'maintenance');