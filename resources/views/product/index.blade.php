@extends('master')

@section('title', 'Product Index')

@section('content')
    <div class="row">
        <div class="col-8 m-auto my-3">
            <h4>Product List</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $products->firstItem() + $loop->index }}</th>
                            <td>{{ $product->product_id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('product.show', ['product' => $product->id]) }}"
                                    class="btn btn-info">View</a>
                                <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
            <div class="d-flex justify-content-end m-auto">
                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
            </div>
        </div>
    </div>
@endsection
