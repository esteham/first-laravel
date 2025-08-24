@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">{{ $customer->name }}</h1>

    @if($customer->photo)
        <div class="mb-4">
            <img src="{{ asset($customer->photo) }}" class="rounded" style="width:128px; height:128px;">
        </div>
    @endif

    <p><strong>Email:</strong> {{ $customer->email }}</p>
    <p><strong>Phone:</strong> {{ $customer->phone ?? 'N/A' }}</p>
    <p><strong>Bio:</strong> {{ $customer->bio ?? 'N/A' }}</p>

    <div class="mt-4">
        <a href="{{ route('customers.edit',$customer->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary ms-2">Back</a>
    </div>
</div>
@endsection
