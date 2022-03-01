<?php

namespace App\Http\Controllers\Fronend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    Public  function index(){
        return view('frontend.index');
    }

    public function ViewCategoryPost($category_slug){

        $category= Category::where('slug',$category_slug)->where('status','0')->first();

        if($category){

            $post=Post::where('category_id',$category->id)->where('status','0')->paginate(2);
            return view('frontend.post.index',compact('post','category'));

        }

        else{
            return view('/');
        }


    }
}
