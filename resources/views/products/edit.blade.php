@extends('layouts.app')

@section('content')
<h2>Edit Product</h2>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('products.form')
    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
@endsection
