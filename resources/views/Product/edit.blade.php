@extends('layouts.mainlayout')

@section('title', 'Edit Page')

@section('content')
    <div class="container p-5 bg-dark text-white rounded" style="border: 5px solid #585B5E;">
        <h1><b>Edit Product</b></h1>
        <hr class="rounded" style="height: 5px">

        @if ($errors->any())
            <div class="mt-2 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label class="form-label"><b>Product Code:</b></label>
                <input type="text" class="form-control" value="{{ $product['productcode'] }}" name="productcode">
            </div>

            <div class="mt-2">
                <label class="form-label"><b>Product Name:</b></label>
                <input type="text" class="form-control" value="{{ $product['productname'] }}" name="productname">
            </div>

            <div class="mt-2">
                <label class="form-label"><b>Description:</b></label>
                <input type="text" class="form-control" value="{{ $product['description'] }}" name="description">
            </div>

            <div class="mt-2">
                <label class="form-label"><b>Price:</b></label>
                <input type="text" class="form-control" value="{{ $product['price'] }}" name="price">
            </div>

            <div class="mt-2">
                <div class="form-group">
                    <label class="form-label"><b>Is Active:</b></label>
                    <select class="form-select" name="isactive">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
            </div>

            <hr class="rounded" style="height: 5px">
            <a class="btn btn-secondary" href="{{ route('products.index') }}">Back</a>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
        </form>
    </div>
@endsection
