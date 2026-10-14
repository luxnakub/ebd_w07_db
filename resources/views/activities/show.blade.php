@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Activity Detail</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('activities.index') }}">Back</a>
    </div>

    <div class="bg-white p-6 rounded shadow-md">
        <p class="mb-2"><strong>ID:</strong> {{ $activity->id }}</p>
        <p class="mb-2"><strong>Activity Name:</strong> {{ $activity->activity_name }}</p>
        <p class="mb-2"><strong>Activity Date:</strong> {{ $activity->activity_date }}</p>
        <p class="mb-2"><strong>Community:</strong> {{ $activity->community->community_name ?? '-' }}</p>
        <p class="mb-2"><strong>Created At:</strong> {{ $activity->created_at }}</p>
    </div>
</div>
@endsection