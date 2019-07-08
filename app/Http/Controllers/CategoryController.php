<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('page.index');
    }

    public function contact()
    {
        return view('page.contact');
    }
}
