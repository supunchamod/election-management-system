<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;


class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = Party::all();
        return view('party.view-party', compact('parties'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('party.add-party');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'party_name' => 'required',
            'party_abbreviation' => 'required',
            'party_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // File validation
        ]);
    
        // Handle logo upload
        if ($request->file('party_logo')) {
            $fileName = time().'_'.$request->file('party_logo')->getClientOriginalName();
            $filePath = $request->file('party_logo')->storeAs('uploads', $fileName, 'public');
        } else {
            $fileName = null;
        }
    
        Party::create([
            'party_name' => $request->party_name,
            'party_abbreviation' => $request->party_abbreviation,
            'party_logo' => $fileName,
        ]);
    
        return redirect()->route('parties.index')->with('success', 'Party created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $party = Party::findOrFail($id);
    return view('party.edit-party', compact('party'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $party = Party::findOrFail($id);
    
        $request->validate([
            'party_name' => 'required',
            'party_abbreviation' => 'required',
            'party_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // File validation
        ]);
    
        // Handle logo upload
        if ($request->file('party_logo')) {
            // Delete the old logo if exists
            if ($party->party_logo && file_exists(storage_path('app/public/uploads/' . $party->party_logo))) {
                unlink(storage_path('app/public/uploads/' . $party->party_logo));
            }
    
            $fileName = time().'_'.$request->file('party_logo')->getClientOriginalName();
            $filePath = $request->file('party_logo')->storeAs('uploads', $fileName, 'public');
        } else {
            $fileName = $party->party_logo; // Keep the old logo if not updated
        }
    
        $party->update([
            'party_name' => $request->party_name,
            'party_abbreviation' => $request->party_abbreviation,
            'party_logo' => $fileName,
        ]);
    
        return redirect()->route('parties.index')->with('success', 'Party updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $party = Party::findOrFail($id);

    // Delete the logo from storage if it exists
    if ($party->party_logo && file_exists(public_path('uploads/' . $party->party_logo))) {
        unlink(public_path('uploads/' . $party->party_logo));
    }

    $party->delete();
    return redirect()->route('parties.index')->with('success', 'Party deleted successfully.');
}

}
