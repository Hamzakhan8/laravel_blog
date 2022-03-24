<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index(){

        $categories= Category:: count();
        return view('admin.Dashboard',compact('categories'));


    }
}
