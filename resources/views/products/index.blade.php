@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Products</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$loop->index }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $products->links() }}
@endsection
