@extends('master')

@section('title', 'Product Create')

@section('content')
    <div class="row">
        <div class="col-8 m-auto my-3">
            <h4>Create Product</h4>
            <div class="d-flex justify-content-end m-auto">
                <a href="{{ route('product.index') }}" class="btn btn-primary">All Products</a>
            </div>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="productId" class="form-label">Product ID</label>
                    <input type="text"
                        class="form-control @error('product_id')
                        is-invalid
                    @enderror"
                        id="productId" placeholder="Product ID" name="product_id">
                    @error('product_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="productName" class="form-label">Product
                        Name</label>
                    <input type="text"
                        class="form-control @error('name')
                        is-invalid
                    @enderror"
                        id="productName" placeholder="Product Name" name="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control @error('description')
                        is-invalid
                    @enderror"
                        id="productDescription" rows="3" name="description"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <div class="input-group">
                        <span class="input-group-text">৳</span>
                        <input type="number" step="0.01"
                            class="form-control @error('price')
                        is-invalid
                        @enderror"
                            id="productPrice" placeholder="Product Price" min="0" name="price">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="productStock" class="form-label">Product
                        Stock</label>
                    <input type="number"
                        class="form-control  @error('stock')
                        is-invalid
                    @enderror"
                        id="productStock" placeholder="Product Stock" min="0" name="stock">
                    @error('stock')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="productImage" class="form-label">Product Image</label>
                    <input
                        class="form-control @error('image')
                        is-invalid
                    @enderror"
                        type="file" id="productImage" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
