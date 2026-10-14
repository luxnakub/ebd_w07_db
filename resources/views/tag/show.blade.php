@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Tag Detail</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('tag.index') }}">Back</a>
    </div>

    <div class="bg-white p-6 rounded shadow-md">
        <p class="mb-2"><strong>ID:</strong> {{ $tag->id }}</p>
        <p class="mb-2"><strong>Tag Description:</strong> {{ $tag->tag_name }}</p>
        <p class="mb-2"><strong>Created At:</strong> {{ $tag->created_at }}</p>
    </div>
</div>
@endsection