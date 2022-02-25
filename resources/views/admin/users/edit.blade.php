@extends('layouts.master')
@section('title','POST')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
    <h4 class="">Add POST</h4>
<div class="card-body ">

    @if ($errors->any())
                <div class="alert alert-danger" >
            @foreach ($errors->all() as $error )
            <div>{{$error}}</div>

        @endforeach
    </div>

    @endif

    <form action="{{url('admin/edit-user')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')



            <div class="mb-3">
                <label for="">role</label>
                <input type="text" name="slug" class="form-control">
            </div>


            <div class="col-md-6 ">
                <button type="submit" class="btn btn-success">Save post </button>
            </div>
        </div>


    </form>

    </div>
</div>
    </div>
</div>
@endsection
