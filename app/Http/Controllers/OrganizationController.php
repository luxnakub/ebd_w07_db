<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        return view('organization.index', compact('organizations'));
    }

    public function create()
    {
        return view('organization.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'org_name' => 'required',
        ]);

        Organization::create($request->all());

        return redirect()->route('organization.index')
                         ->with('success', 'บันทึกข้อมูลหน่วยงานเรียบร้อยแล้ว');
    }

    public function show(Organization $organization)
    {
        return view('organization.show', compact('organization'));
    }

    public function edit(Organization $organization)
    {
        return view('organization.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'org_name' => 'required',
        ]);

        $organization->update($request->all());

        return redirect()->route('organization.index')
                         ->with('success', 'อัปเดตข้อมูลหน่วยงานเรียบร้อยแล้ว');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->route('organization.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}