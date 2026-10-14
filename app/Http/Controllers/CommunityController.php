<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::all();
        return view('community.index', compact('communities'));
    }

    public function create()
    {
        return view('community.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'community_name' => 'required',
        ]);

        Community::create($request->all());

        return redirect()->route('community.index')
                         ->with('success', 'บันทึกข้อมูลชุมชนเรียบร้อยแล้ว');
    }

    public function show(Community $community)
    {
        return view('community.show', compact('community'));
    }

    public function edit(Community $community)
    {
        return view('community.edit', compact('community'));
    }

    public function update(Request $request, Community $community)
    {
        $request->validate([
            'community_name' => 'required',
        ]);

        $community->update($request->all());

        return redirect()->route('community.index')
                         ->with('success', 'อัปเดตข้อมูลชุมชนเรียบร้อยแล้ว');
    }

    public function destroy(Community $community)
    {
        $community->delete();

        return redirect()->route('community.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}