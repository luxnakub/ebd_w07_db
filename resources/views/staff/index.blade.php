@extends('layouts.app')

@section('title', 'Staff List - ebd_w07')

@section('content')
<div class="container mx-auto">
    <!-- Header & Add Button -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">จัดการข้อมูลบุคลากร (Staff Management)</h1>
            <p class="text-gray-600 text-sm mt-1">แสดงรายการบุคลากรพร้อมความสัมพันธ์แบบ One-to-Many (Title & Organization)</p>
        </div>
        <a href="{{ route('staff.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-5 rounded-lg shadow-md transition duration-200">
            + เพิ่มบุคลากร (Add Staff)
        </a>
    </div>

    <!-- Alert Notification -->
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6 shadow-sm flex justify-between items-center" role="alert">
            <div>
                <p class="font-bold">สำเร็จ!</p>
                <p class="text-sm">{{ session('success') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="text-green-700 font-bold text-lg">&times;</button>
        </div>
    @endif

    <!-- Data Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow border border-gray-200">
        <table class="min-w-full leading-normal border-collapse">
            <thead>
                <tr class="bg-indigo-50 text-indigo-900 uppercase text-xs font-bold leading-normal border-b border-gray-200">
                    <th class="py-3.5 px-6 text-left">ID</th>
                    <th class="py-3.5 px-6 text-left">คำนำหน้า</th>
                    <th class="py-3.5 px-6 text-left">ชื่อ - นามสกุล</th>
                    <th class="py-3.5 px-6 text-left">หน่วยงาน (Organization)</th>
                    <th class="py-3.5 px-6 text-center">จัดการ (Actions)</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                @forelse ($staffs as $item)
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="py-4 px-6 text-left font-medium text-gray-900">{{ $item->id }}</td>
                    
                    <!-- ดึงข้อมูลจาก Relationship title -->
                    <td class="py-4 px-6 text-left">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded border border-blue-200">
                            {{ $item->title ? $item->title->tit_name : 'ไม่ระบุ' }}
                        </span>
                    </td>

                    <!-- แสดงชื่อและนามสกุล -->
                    <td class="py-4 px-6 text-left font-medium">
                        {{ $item->first_name }} {{ $item->last_name }}
                    </td>

                    <!-- ดึงข้อมูลจาก Relationship organization -->
                    <td class="py-4 px-6 text-left">
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded border border-purple-200">
                            {{ $item->organization ? $item->organization->org_name : 'ไม่ระบุ' }}
                        </span>
                    </td>

                    <!-- Action Buttons -->
                    <td class="py-4 px-6 text-center">
                        <div class="flex items-center justify-center space-x-2">
                            <a href="{{ route('staff.show', $item->id) }}" class="bg-sky-500 hover:bg-sky-600 text-white py-1.5 px-3 rounded text-xs font-medium transition duration-150 shadow-sm">
                                Detail
                            </a>
                            <a href="{{ route('staff.edit', $item->id) }}" class="bg-amber-500 hover:bg-amber-600 text-white py-1.5 px-3 rounded text-xs font-medium transition duration-150 shadow-sm">
                                Edit
                            </a>
                            <form action="{{ route('staff.destroy', $item->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลบุคลากรท่านนี้?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-rose-500 hover:bg-rose-600 text-white py-1.5 px-3 rounded text-xs font-medium transition duration-150 shadow-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-8 px-6 text-center text-gray-500">
                        ยังไม่มีข้อมูลบุคลากรในระบบ
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection