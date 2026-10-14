@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Add Activity</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('activities.index') }}">Back</a>
    </div>

    <form action="{{ route('activities.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Activity Name:</label>
            <input type="text" name="activity_name" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ระบุชื่อกิจกรรม" required>
            @error('activity_name')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Activity Date:</label>
            <input type="date" name="activity_date" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @error('activity_date')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Community (ชุมชน):</label>
            <select name="community_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">-- เลือกชุมชน --</option>
                @foreach ($communities as $community)
                    <option value="{{ $community->id }}">{{ $community->community_name }}</option>
                @endforeach
            </select>
            @error('community_id')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>
</div>
@endsection