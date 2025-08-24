@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Customers</h1>

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add Customer</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-center">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customer as $cust)
                    <tr>
                        <td class="text-center">
                            @if($cust->photo)
                                <img src="{{ asset($cust->photo) }}" class="rounded-circle" style="width:48px; height:48px;">
                            @else
                                <span class="text-muted">No photo</span>
                            @endif
                        </td>
                        <td>{{ $cust->name }}</td>
                        <td>{{ $cust->email }}</td>
                        <td>{{ $cust->phone }}</td>
                        <td>
                            <a href="{{ route('customers.show',$cust->id) }}" class="btn btn-sm btn-info text-white">View</a>
                            <a href="{{ route('customers.edit',$cust->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('customers.destroy',$cust->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this customer?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No customers found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $customer->links() }}
    </div>
</div>
@endsection
