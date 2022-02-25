 @extends('layouts.master')
@section('title','view user')


@section('content')
<div class="container-fluid px-4">
    <div class="card">
        .<div class="card">
            <div class="card-header">
                <h4>View Users<a href="{{url('admin/add-post')}} " class="btn btn-primary btn-sm float-end">Add Post</a></h4>
            </div>
            <div class="card-body">
                @if (session('massage'))

                <div class="alert alert-success">{{session('massage')}}</div>

            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>username </th>
                        <th>email </th>
                        <th>Role As</th>
                        <th>Edit</th>



                    </tr>
                </thead>

                    <tbody>

                        @foreach ($users as $items)
                        <tr>
                            <td scope="row">{{$items->id}}</td>
                            <td>{{$items->name}}</td>
                            <td>{{$items->email}}</td>



                            <td>{{$items->role_as == '1' ? 'admin':'user'}}</td>
                            <td>
                                <a href="{{url('admin/edit-user/'.$items->id)}}" class="btn btn-success">Edit </a>
                            </td>


                        </tr>
                        @endforeach


                    </tbody>

            </table>
            </div>

        </div>
    </div>


    </div>

@endsection

