@extends('layouts.master')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Customers</h1>

    <a href="{{ route('customer.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Customer</a>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-4 border-collapse border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Photo</th>
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Email</th>
                <th class="p-2 border">Phone</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customer as $cust)
                <tr>
                    <td class="p-2 border text-center">
                        @if($cust->photo)
                            <img src="{{ asset($cust->photo) }}" class="w-12 h-12 rounded-full mx-auto">
                        @else
                            <span class="text-gray-400">No photo</span>
                        @endif
                    </td>
                    <td class="p-2 border">{{ $cust->name }}</td>
                    <td class="p-2 border">{{ $cust->email }}</td>
                    <td class="p-2 border">{{ $cust->phone }}</td>
                    <td class="p-2 border space-x-2">
                        <a href="{{ route('customer.show',$cust->id) }}" class="text-blue-600">View</a>
                        <a href="{{ route('customer.edit',$cust->id) }}" class="text-yellow-600">Edit</a>
                        <form action="{{ route('customer.destroy',$cust->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Delete this customer?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-gray-500 p-4">No customers found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $customer->links() }}
    </div>
</div>
@endsection
