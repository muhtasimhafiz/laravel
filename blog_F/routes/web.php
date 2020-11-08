<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', function () {
//     return view('website.index');
// })->name('website');


// Route::get('/about', function () {
//     return view('website.about');
// });


// Route::get('/blog', function () {
//     return view('website.blog');
// });


// Route::get('/grid', function () {
//     return view('website.grid');
// });

// Route::get('/masonry', function () {
//     return view('website.masonry');
// });

// Route::get('/post', function () {
//     return view('website.single-post');
// });

//frontend routes
Route::get('/', 'FrontEndController@home')->name('website');
Route::get('/about', 'FrontEndController@about')->name('website.about');
Route::get('/category/{slug}', 'FrontEndController@catagory')->name('website.catagory');
Route::get('/tag/{slug}', 'FrontEndController@tag')->name('website.tag');
Route::get('/contact', 'FrontEndController@contact')->name('website.contact');
Route::get('/post/{slug}', 'FrontEndController@post')->name('website.post');

Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');

///admin panel routes


Route::get('/test', function () {
    return view('layouts.admin');
});


// Route::get('/dash', function () {
//     return view('admin.dashboard.index');
// });


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dash', function () {
        return view('admin.dashboard.index');
    });
    
    Route::resource('catagory','CatagoryController');

    Route::resource('tag','TagController');

    Route::resource('post', 'PostController');

    Route::resource('user','UserController');

    Route::get('/profile','UserController@profile')->name('user.profile');
    Route::get('/profile_update','UserController@profile')->name('user.profile.update');


});


// Route::resource('catagory','CatagoryController');

Route::get('/test',function(){
    $posts= App\Post::all();

    $id = 1;

    foreach($posts as $post){
        $post->image = "https://picsum.photos/id/".$id."/200/200";
        $post->save();
        $id++;
    }
});