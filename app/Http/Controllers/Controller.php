<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home'); // Pastikan ada file home.blade.php di folder resources/views
    }

    public function bestSeller()
    {
        return view('best-seller'); // Pastikan ada file best-seller.blade.php
    }

    public function newArrival()
    {
        return view('new-arrival'); // Pastikan ada file new-arrival.blade.php
    }

    public function blog()
    {
        return view('blog'); // Pastikan ada file blog.blade.php
    }
}
