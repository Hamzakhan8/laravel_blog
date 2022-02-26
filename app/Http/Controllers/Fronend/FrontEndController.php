<?php

namespace App\Http\Controllers\Fronend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    Public  function index(){
        return view('frontend.index');
    }
}
