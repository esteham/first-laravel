@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add Customer</h1>

<form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label class="block">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2">
        @error('name') <p class="text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2">
        @error('email') <p class="text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block">Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border rounded p-2">
        @error('phone') <p class="text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block">Photo</label>
        <input type="file" name="photo" class="w-full border rounded p-2">
        @error('photo') <p class="text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block">Bio</label>
        <textarea name="bio" rows="4" class="w-full border rounded p-2">{{ old('bio') }}</textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
    <a href="{{ route('customers.index') }}" class="ml-2 text-gray-600">Cancel</a>
</form>
@endsection
