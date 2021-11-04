@extends('admin.master')

@section('dashboard')
<hr/>
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>

<table class="table table-bordered table-hover" >
    <thead>
        <tr>
            <th> ID </th>
            <th> Manufacturer Name </th>
            <th> Manufacturer Description </th>
            <th> Publication status </th>
            <th style="text-align: center;"> Action </th>
        </tr>
    </thead>

    <tbody>

        @foreach ($manufacturers as $manufacturer)
            <tr>
            <th scope="row"> {{$manufacturer->id}}</th>
            <td> {{$manufacturer->manufacturerName}}</td>
            <td> {{$manufacturer->manufacturerDescription}}</td>
            <td> {{$manufacturer->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td>
            <td style="text-align: center;  " >

                <a href=" {{url('/manufacturer/edit'.$manufacturer->id)}} " class="   success"   style="margin : 5px;">
                   <button class="button"><i class="fa fa-edit"></i></button>
                </a>
                <a href="{{ url('/manufacturer/delete'.$manufacturer->id) }}" class="danger" onclick="return confirm('Are you sure to delete all of the informations ? ');">
                     <button class="buttonred"><i class="fa fa-trash"></i></button>
                </a>

            </td>
            </tr>
        @endforeach

    </tbody>

</table>


@endsection
