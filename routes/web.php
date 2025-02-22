<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view ('blog' , ['data' => 'test 123']);
});

Route::view('/blog', 'blog' , ['data' => 'hekso nob']);

// Route::get('/blog/1', function () {
//     return 'blok1';
// });

// Route::get('/blog/2', function () {
//     return 'blok2';
// });

Route::get('/blog/{id}', function ($id) {
    return 'blok '.$id;
});

// Route::get('/blog/{id}', function (Request $request) {
//     $name = $request->name;
//     $password = $request->password;
//     return 'blok '.$request->id;
// });

Route::get('/blog/{title}', function (Request $request) {
    $name = $request->name;
    $password = $request->password;
    return 'blok '.$request->title;
})->name('whatever');

// Route::get('/blog/', function () {
//     $profile = 'aduhai gantengnya';
//     return view('blog', ['data' => $profile]);
// });

Route::get('/blog/{title}', function (Request $request) {
    return redirect()->route('blog');
    // return 'blok '.$request->title;
});

Route::get('/blog', [BlogController::class, 'index']);
