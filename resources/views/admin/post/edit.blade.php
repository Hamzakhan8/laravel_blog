@extends('layouts.master')
@section('title','category')


@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
    <h4 class="">update category</h4>
<div class="card-body">

    @if ($errors->any())

        @foreach ($errors->all() as $error )
            <div>{{$error}}</div>

        @endforeach

    @endif

    <form action="{{url('admin/update-category/'.$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="mb-3">
                <label for="">Category name</label>
                <input type="text" name="name" value="{{$post->name}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description"  rows="5" class="form-control">{{$post->description}}</textarea>
            </div>


            <h6>seo tags</h6>
            <div class="mb-3">
                <label for="">meta Title</label>
                <input type="text" name="meta_title"  value="{{$post->meta_title}}"class="form-control">
            </div>
            <div class="mb-3">
                <label for="">meta description</label>
                <textarea name="meta_description"  rows="5" class="form-control">{{$post->meta_description}}</textarea>

            </div>
            <div class="mb-3">
                <label for="">meta keyword</label>
                <textarea name="meta_keyword" rows="5" class="form-control">{{$post->meta_keyword}}</textarea>

            </div>

            <h6>Status Mode</h6>
            <div class="row">

            <div class="col-md-3 mb-3">
                <label >status</label>
                <input type="checkbox" name="status" {{$post->status=='1'?'checked':''}} >
            </div>

        </div>
        <div class="col-md-6 ">
            <button type="submit" class="btn btn-success">Update Category </button>
        </div>

    </form>

    </div>
</div>
    </div>
</div>
@endsection
