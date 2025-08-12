@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-6">Available Courses</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($courses as $course)
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">{{ $course->title }}</h2>
            <p class="text-gray-600 mb-4">{{ $course->description }}</p>
            <a href="#" class="text-blue-600 font-bold hover:underline">View Details</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
