@extends('admin.master')

@section('dashboard')
<hr/>
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>

<table class="table table-bordered table-hover" >
    <thead>
        <tr>
            <th> ID </th>
            <th> Category Name </th>
            <th> Category Description </th>
            <th> Publication status </th>
            <th style="text-align: center;"> Action </th>
        </tr>
    </thead>

    <tbody>

        @foreach ($categories as $category)
            <tr>
            <th scope="row"> {{$category->id}}</th>
            <td> {{$category->categoryName}}</td>
            <td> {{$category->categoryDescription}}</td>
            <td> {{$category->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td>
            <td style="text-align: center;  " >

                <a href=" {{url('/category/edit'.$category->id)}} " class="   success"   style="margin : 5px;">
                   <button class="button"><i class="fa fa-edit"></i></button>
                </a>
                <a href="{{ url('/category/delete'.$category->id) }}" class="danger" onclick="return confirm('Are you sure to delete all of the informations ? ');">
                     <button class="buttonred"><i class="fa fa-trash"></i></button>
                </a>

            </td>
            </tr>
        @endforeach

    </tbody>

</table>


@endsection
