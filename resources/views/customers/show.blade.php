@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ $customer->name }}</h1>

@if($customer->photo)
    <img src="{{ asset($customer->photo) }}" class="w-32 h-32 rounded mb-4">
@endif

<p><strong>Email:</strong> {{ $customer->email }}</p>
<p><strong>Phone:</strong> {{ $customer->phone ?? 'N/A' }}</p>
<p><strong>Bio:</strong> {{ $customer->bio ?? 'N/A' }}</p>

<div class="mt-4">
    <a href="{{ route('customers.edit',$customer->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
    <a href="{{ route('customers.index') }}" class="ml-2 text-gray-600">Back</a>
</div>
@endsection
