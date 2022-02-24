@extends('layouts.master')
@section('title','POSTS')


@section('content')
<div class="container-fluid px-4">
    <div class="card">
        .<div class="card">
            <div class="card-header">
                <h4>View POST<a href="{{url('admin/add-category')}} " class="btn btn-primary btn-sm float-end">Add category</a></h4>
            </div>
            <div class="card-body">
                @if (session('massage'))

                <div class="alert alert-success">{{session('massage')}}</div>

            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>delete</th>


                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
            </div>

        </div>
    </div>


    </div>

@endsection
