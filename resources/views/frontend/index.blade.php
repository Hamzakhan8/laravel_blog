@extends('layouts.app')

@section('content')

<div class=" py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach ($category_all as $all_cate_item)
                    <div class="item ">
                        <a class="text-decoration-none" href="{{url('tutorial/'.$all_cate_item->slug)}}">



                         <div class="card">
                            <img src="{{asset('uploads/category/'. $all_cate_item->image)}}" width="90px" height="180px" class="" alt="curosal image">
                            <div class="card-body ">
                                <h4 class="text-dark">{{$all_cate_item->name}}</h4>
                            </div>

                         </div>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
