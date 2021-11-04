@extends('admin.master')

@section('dashboard')
<hr/>
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>


<table class="table table-bordered table-hover" >

    <tr>
        <th>Product Id</th>
        <th>{{ $product->id }}</th>
    </tr>
    <tr>
        <th>Product Name</th>
        <th>{{ $product->productName }}</th>
    </tr>
    <tr>
        <th>Category Name</th>
        <th>{{ $product->categoryName }}</th>
    </tr>
    <tr>
        <th>Manufacturer Name</th>
        <th>{{ $product->manufacturerName }}</th>
    </tr>
    <tr>
        <th>Product Price</th>
        <th>Tk: {{ $product->productPrice }}</th>
    </tr>
    <tr>
        <th>Product Quantity</th>
        <th>{{ $product->productQuantity }}</th>
    </tr>
    <tr>
        <th>Product Short Description</th>
        {{-- <th>{{  $product->productShortDescription  }}</th> --}}
        <th>{{  $product->productQuantity  }}</th>
    </tr>
    <tr>
        <th>Product Long Description</th>
        {{-- <th>{{  $product->productLongDescription  }}</th> --}}
        <th>{{  $product->productQuantity  }}</th>
    </tr>
    <tr>
        <th>Product Image</th>
        <th>Image</th>
        {{-- <th><img src="{{asset($product->productImage)}}" alt="" height="100" width="100"></th> --}}
    </tr>
    <tr>
        <th>Publication Status</th>
        <th>{{$product->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</th>
    </tr>


</table>

@endsection
