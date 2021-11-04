@extends('admin.master')


@section('dashboard')

<div class="row">
    <div class="col-lg-12">
    <h4 class="text-center text-success">{{ Session::get('message')}}</h4>
       <hr/>
        <h3 style="text-align: center"> </h3>

        <div class="well">

        {!! Form::open(['url'=>'manufacturer/update','method'=>'POST','class'=>'form-horizontal','name'=>'editmanufacturerForm'])!!}

            {{-- <form class="form-horizontal" action="" method="post"> --}}

                <br>
                <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">Manufacturer Name</label>
                    <div class="col-sm-8">
                        <input type="text"  value= "{{ $manufacturerByid->manufacturerName}}" class="form-control" name="manufacturerName">
                     {{--   <input type="text"  value= "{{ $manufacturerByid->id}}" class="form-control" name="id"> --}}
                        <input type="hidden"  value= "{{ $manufacturerByid->id}}" class="form-control" name="id">
                    </div>
                </div>
               {{--  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Author Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author_name">
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="inputPassword3" value= ""  class="col-sm-4 control-label">Manufacturer Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="manufacturerDescription" rows="8">{{ $manufacturerByid->manufacturerDescription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3"  class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control"  name="publicationStatus">
                            <option>Select Publication Status</option>
                            <option value="1"    >   Published</option>
                            <option value="0"    >   Unpublished</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btn" class="btn btn-success  ">Update manufacturer Information</button>
                    </div>
                </div>

                {!! Form::close()!!}
            {{-- </form> --}}
        </div>
    </div>
</div>

<script>
    document.forms['editmanufacturerForm'].elements['publicationStatus'].value={{$manufacturerByid->publicationStatus}}
</script>






@endsection
