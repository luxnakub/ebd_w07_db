@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Title Detail</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('title.index') }}">Back</a>
    </div>

    <div class="bg-white p-6 rounded shadow-md">
        <p class="mb-2"><strong>ID:</strong> {{ $title->id }}</p>
        <p class="mb-2"><strong>Title Name:</strong> {{ $title->title_name }}</p>
        <p class="mb-2"><strong>Created At:</strong> {{ $title->created_at }}</p>
    </div>
</div>
@endsection