@extends('layouts.mainlayout')

@section('title', 'Show Page')

@section('content')
    <div class="container p-5 bg-dark text-white rounded" style="border: 5px solid #585B5E;">
        <h1><b>Product Details</b></h1>
        <hr class="rounded" style="height: 5px">
        <h2><b>Product ID: </b>{{ $show['id'] }}</h2>
        <h2><b>Product Code: </b>{{ $show['productcode'] }}</h2>
        <h2><b>Product Name: </b>{{ $show['productname'] }}</h2>
        <h2><b>Description: </b>{{ $show['description'] }}</h2>
        <h2><b>Price: </b>{{ $show['price'] }}</h2>
        <h2><b>Is Active: </b>{{ $show['isactive'] }}</h2>
        <hr class="rounded" style="height: 5px">
        <a class="btn btn-secondary" href="{{ route('products.index') }}">Back</a>
    </div>
@endsection
