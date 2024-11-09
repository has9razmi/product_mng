@extends('master')

@section('title', 'Show Product')
<div class="row">
    <div class="col-8 m-auto my-3">
        <h4>Product Details</h4>
        <div class="d-flex justify-content-end my-2">
            <a href="{{ route('product.index') }}" class="btn btn-primary">All Products</a>
        </div>
        <div class="card">
            <img src="{{ $product->image }}" class="card-img-top" alt="Product Image Unavailable">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : ৳{{ $product->price }}</li>
                <li class="list-group-item">Availability : {{ $product->stock }} in stock</li>
                <li class="list-group-item">Listed at : {{ $product->created_at->format('d-m-Y D H:i A') }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post"
                    class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@section('content')
@endsection
