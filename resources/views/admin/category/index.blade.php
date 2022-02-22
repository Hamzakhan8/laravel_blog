@extends('layouts.master')
@section('title','category')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">category</h1>
    @if (session('massage'))

        <div class="alert alert-success">{{session('massage')}}</div>

    @endif
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">category</li>
    </ol>

    </div>
    <div class="row">


    </div>
@endsection
