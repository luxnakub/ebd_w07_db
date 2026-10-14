<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_name' => 'required',
        ]);

        Tag::create($request->all());

        return redirect()->route('tag.index')
                         ->with('success', 'บันทึก Tag เรียบร้อยแล้ว');
    }

    public function show(Tag $tag)
    {
        return view('tag.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'tag_name' => 'required',
        ]);

        $tag->update($request->all());

        return redirect()->route('tag.index')
                         ->with('success', 'อัปเดต Tag เรียบร้อยแล้ว');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}