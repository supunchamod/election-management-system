<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Party;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('party')->get();
        return view('members.index', compact('members'));
    }

    public function create()
    {
        $parties = Party::all(); // Fetch all parties
        return view('members.create', compact('parties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'members_name' => 'required',
            'party_id' => 'required',
            'member_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color_code' => 'required|string|min:4|max:7', // Color code validation
        ]);

        // Upload image if present
        $imagePath = null;
        if ($request->hasFile('member_image')) {
            $imagePath = time() . '_' . $request->file('member_image')->getClientOriginalName();
            $request->file('member_image')->move(public_path('uploads/members'), $imagePath);
        }

        // Create member
        Member::create([
            'members_name' => $request->members_name,
            'party_id' => $request->party_id,
            'member_image' => $imagePath,
            'color_code' => $request->color_code, // Store color code
        ]);

        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        $parties = Party::all();
        return view('members.edit', compact('member', 'parties'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'members_name' => 'required',
            'party_id' => 'required',
            'member_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image update
        if ($request->hasFile('member_image')) {
            // Delete old image
            if ($member->member_image && file_exists(public_path('uploads/members/' . $member->member_image))) {
                unlink(public_path('uploads/members/' . $member->member_image));
            }

            $imagePath = time() . '_' . $request->file('member_image')->getClientOriginalName();
            $request->file('member_image')->move(public_path('uploads/members'), $imagePath);
            $member->member_image = $imagePath;
        }

        // Update member details
        $member->members_name = $request->members_name;
        $member->party_id = $request->party_id;
        $member->save();

        return redirect()->route('members.index')->with('success', 'Member updated successfully!');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        // Delete the member image
        if ($member->member_image && file_exists(public_path('uploads/members/' . $member->member_image))) {
            unlink(public_path('uploads/members/' . $member->member_image));
        }

        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
    }
}
