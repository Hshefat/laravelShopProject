@extends('admin.master')

@section('dashboard')
<hr/>
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>

<table class="table table-bordered table-hover" >
    <thead>
        <tr>
            <th> Product Name </th>
            <th> Category Name </th>
            <th> Manufacturer Name </th>
            <th> Product Price </th>
            <th> Product Quantity </th>
            <th> Publication status </th>
            <th style="text-align: center;"> Action </th>
        </tr>
    </thead>

    <tbody>

        @foreach ($products as $product)
            <tr>
            <th scope="row"> {{$product->productName}}</th>
            <td> {{$product->categoryName}}</td>
            <td> {{$product->manufacturerName}}</td>
            <td> Tk: {{$product->productPrice}}</td>
            <td>  {{$product->productQuantity}}</td>
            <td> {{$product->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td>
            <td style="text-align: center;  " >

                <a href=" {{url('/product/edit'.$product->id)}} " class="   success" title="Product Edit"  style=" ">
                   <button class="button"><i class="fa fa-edit"></i></button>
                </a>
                <a href=" {{url('/product/view'.$product->id)}} " class="   success" title="Product View"  style=" ">
                   <button class="buttoninfo"><i class="fa fa-eye"></i></button>
                </a>
                <a href="{{ url('/category/delete'.$product->id) }}" class="danger" title="Product Delete" onclick="return confirm('Are you sure to delete all of the informations ? ');">
                     <button class="buttonred"><i class="fa fa-trash"></i></button>
                </a>

            </td>
            </tr>
        @endforeach

    </tbody>

</table>


@endsection
