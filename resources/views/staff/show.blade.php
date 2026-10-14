@extends('layouts.app')

@section('title', 'Staff Detail - ebd_w07')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-200">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b border-gray-200 pb-3">รายละเอียดบุคลากร (Staff Detail)</h2>

    <div class="space-y-4">
        <div class="flex border-b border-gray-100 pb-2">
            <span class="font-semibold text-gray-600 w-36">ID:</span>
            <span class="text-gray-900 font-bold">{{ $staff->id }}</span>
        </div>

        <div class="flex border-b border-gray-100 pb-2">
            <span class="font-semibold text-gray-600 w-36">คำนำหน้าชื่อ:</span>
            <span class="text-indigo-600 font-medium">
                {{ $staff->title ? $staff->title->tit_name : 'ไม่ระบุ' }}
            </span>
        </div>

        <div class="flex border-b border-gray-100 pb-2">
            <span class="font-semibold text-gray-600 w-36">ชื่อ - นามสกุล:</span>
            <span class="text-gray-900 font-medium">{{ $staff->first_name }} {{ $staff->last_name }}</span>
        </div>

        <div class="flex border-b border-gray-100 pb-2">
            <span class="font-semibold text-gray-600 w-36">หน่วยงาน:</span>
            <span class="text-purple-600 font-medium">
                {{ $staff->organization ? $staff->organization->org_name : 'ไม่ระบุ' }}
            </span>
        </div>

        <div class="flex border-b border-gray-100 pb-2">
            <span class="font-semibold text-gray-600 w-36">วันที่สร้าง:</span>
            <span class="text-gray-500 text-sm">{{ $staff->created_at ? $staff->created_at->format('d/m/Y H:i') : '-' }}</span>
        </div>
    </div>

    <div class="mt-8 flex space-x-3">
        <a href="{{ route('staff.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2.5 px-5 rounded-lg text-sm transition duration-150">
            &larr; กลับหน้าหลัก
        </a>
        <a href="{{ route('staff.edit', $staff->id) }}" class="bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2.5 px-5 rounded-lg text-sm transition duration-150">
            แก้ไขข้อมูล
        </a>
    </div>
</div>
@endsection