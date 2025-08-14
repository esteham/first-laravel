@extends('layouts.app')

@section('content')
<h2>Add New Product</h2>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    @include('products.form')
    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>
@endsection
