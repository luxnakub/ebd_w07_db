<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titles = Title::all();
        return view('title.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('title.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_name' => 'required',
        ]);

        Title::create($request->all());

        return redirect()->route('title.index')
                         ->with('success', 'บันทึกคำนำหน้าชื่อเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     */
    public function show(Title $title)
    {
        return view('title.show', compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Title $title)
    {
        return view('title.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Title $title)
    {
        $request->validate([
            'title_name' => 'required',
        ]);

        $title->update($request->all());

        return redirect()->route('title.index')
                         ->with('success', 'อัปเดตคำนำหน้าชื่อเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Title $title)
    {
        $title->delete();

        return redirect()->route('title.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}