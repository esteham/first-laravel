@extends('layouts.app')

@section('content')
<h2>Product Details</h2>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $product->description ?? 'N/A' }}</p>
                <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                <p class="card-text"><strong>Stock:</strong> {{ $product->stock }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
            </div>
        </div>
    </div>
</div>
@endsection