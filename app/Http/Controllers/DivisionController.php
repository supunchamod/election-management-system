<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Division;


class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::with('district')->get();
        return view('divisions.index', compact('divisions'));
    }

    public function create()
    {
        $districts = District::all();
        return view('divisions.create', compact('districts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'division_name' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
        ]);
        Division::create($request->all());
        return redirect()->route('divisions.index')->with('success', 'Division created successfully.');
    }

    public function edit(Division $division)
    {
        $districts = District::all();
        return view('divisions.edit', compact('division', 'districts'));
    }

    public function update(Request $request, Division $division)
    {
        $request->validate([
            'division_name' => 'required|string|max:255',
            'district_id' => 'required|exists:districts,id',
        ]);
        $division->update($request->all());
        return redirect()->route('divisions.index')->with('success', 'Division updated successfully.');
    }

    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('divisions.index')->with('success', 'Division deleted successfully.');
    }
}
