@extends('layouts.mainlayout')

@section('title', 'Index Page')

@section('content')
    <div class="container p-5 bg-dark rounded" style="border: 5px solid #585B5E;">
        <div class="position-relative" style="align-items: center;">
            <h1 class="text-white"><b>List of Products</b></h1>
            <a class="btn btn-primary btn-sm position-absolute top-50 end-0 translate-middle-y"
                href="{{ route('products.create') }}"><i class='fa fa-plus-square'></i> Create Product</a>
        </div>

        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th style="width: 8%">Product ID</th>
                    <th style="width: 10%">Product Code</th>
                    <th style="width: 11%">Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th style="width: 7%">Is Active</th>
                    <th style="width: 20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->productcode }}</td>
                        <td>{{ $products->productname }}</td>
                        <td>{{ $products->description }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->isactive }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ route('products.show', $products->id) }}"><i
                                    class='fa fa-eye'></i> Show</a>
                            <a class="btn btn-warning btn-sm" href="{{ route('products.edit', $products->id) }}"><i
                                    class='fa fa-edit'></i> Edit</a>
                            <form action="{{ route('products.destroy', $products->id) }}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>
                                    Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
