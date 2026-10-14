<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Community;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activities::with('community')->get();
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        $communities = Community::all();
        return view('activities.create', compact('communities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required',
            'activity_date' => 'required',
            'community_id' => 'required',
        ]);

        Activities::create($request->all());

        return redirect()->route('activities.index')
                         ->with('success', 'บันทึกกิจกรรมเรียบร้อยแล้ว');
    }

    public function show(Activities $activity)
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activities $activity)
    {
        $communities = Community::all();
        return view('activities.edit', compact('activity', 'communities'));
    }

    public function update(Request $request, Activities $activity)
    {
        $request->validate([
            'activity_name' => 'required',
            'activity_date' => 'required',
            'community_id' => 'required',
        ]);

        $activity->update($request->all());

        return redirect()->route('activities.index')
                         ->with('success', 'อัปเดตกิจกรรมเรียบร้อยแล้ว');
    }

    public function destroy(Activities $activity)
    {
        $activity->delete();

        return redirect()->route('activities.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}