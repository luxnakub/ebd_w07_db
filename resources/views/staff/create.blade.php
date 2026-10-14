@extends('layouts.app')

@section('title', 'Add Staff - ebd_w07')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-200">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6 pb-4 border-b border-gray-200">
        <h2 class="text-2xl font-bold text-gray-800">เพิ่มข้อมูลบุคลากร (Add Staff)</h2>
        <a href="{{ route('staff.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-sm font-medium transition duration-150">
            &larr; ย้อนกลับ
        </a>
    </div>

    <!-- Form -->
    <form action="{{ route('staff.store') }}" method="POST">
        @csrf

        <!-- Title Foreign Key Dropdown -->
        <div class="mb-5">
            <label for="title_id" class="block text-gray-700 font-semibold mb-2">คำนำหน้าชื่อ (Title) <span class="text-red-500">*</span></label>
            <select name="title_id" id="title_id" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-white" required>
                <option value="">-- เลือกคำนำหน้าชื่อ --</option>
                @foreach ($titles as $item)
                    <option value="{{ $item->id }}" {{ old('title_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->tit_name }}
                    </option>
                @endforeach
            </select>
            @error('title_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- First Name -->
        <div class="mb-5">
            <label for="first_name" class="block text-gray-700 font-semibold mb-2">ชื่อ (First Name) <span class="text-red-500">*</span></label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="กรอกชื่อ" required>
            @error('first_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Last Name -->
        <div class="mb-5">
            <label for="last_name" class="block text-gray-700 font-semibold mb-2">นามสกุล (Last Name) <span class="text-red-500">*</span></label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="กรอกนามสกุล" required>
            @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Organization Foreign Key Dropdown -->
        <div class="mb-6">
            <label for="organization_id" class="block text-gray-700 font-semibold mb-2">หน่วยงาน (Organization) <span class="text-red-500">*</span></label>
            <select name="organization_id" id="organization_id" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-white" required>
                <option value="">-- เลือกหน่วยงาน --</option>
                @foreach ($organizations as $item)
                    <option value="{{ $item->id }}" {{ old('organization_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->org_name }}
                    </option>
                @endforeach
            </select>
            @error('organization_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-200">
            บันทึกข้อมูล (Submit)
        </button>
    </form>
</div>
@endsection