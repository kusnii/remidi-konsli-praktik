<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class BlogController extends Controller
// {
//     function index(){
//         $a = 1;
//         $b = 3;
//         $c = $a + $b;
//         return 'hai kusni'.$c;
//     }
// }

class BlogController extends Controller
{
    function index(){
        return view('blog', ['data' => 'whatever']);
    }
}
