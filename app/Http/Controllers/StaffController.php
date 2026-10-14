<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Title;
use App\Models\Organization;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // 1. หน้าแสดงรายการทั้งหมด
    public function index()
    {
        $staffs = Staff::with(['title', 'organization'])->get();
        return view('staff.index', compact('staffs'));
    }

    // 2. หน้าฟอร์มเพิ่มข้อมูล (ต้องส่ง $titles และ $organizations ไปทำ Dropdown)
    public function create()
    {
        $titles = Title::all();
        $organizations = Organization::all();
        return view('staff.create', compact('titles', 'organizations'));
    }

    // 3. บันทึกข้อมูล
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'title_id' => 'required',
            'organization_id' => 'required',
        ]);

        Staff::create($request->all());

        return redirect()->route('staff.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    // 4. หน้าฟอร์มแก้ไขข้อมูล
    public function edit(Staff $staff)
    {
        $titles = Title::all();
        $organizations = Organization::all();
        return view('staff.edit', compact('staff', 'titles', 'organizations'));
    }

    // 5. อัปเดตข้อมูล
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'title_id' => 'required',
            'organization_id' => 'required',
        ]);

        $staff->update($request->all());

        return redirect()->route('staff.index')->with('success', 'อัปเดตข้อมูลเรียบร้อยแล้ว');
    }

    // 6. ลบข้อมูล
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }

    // 7. แสดงรายละเอียด
    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }
}