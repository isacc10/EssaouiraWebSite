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

Route::get('/', 'SiteController@index');
Route::get('/blog/{id?}', 'SiteController@blog');
Route::get('/post/{slug}', 'SiteController@show');
Route::post('/contact', 'SiteController@store');


Route::get('/religion/{id?}', 'ReligionController@blog');
Route::get('/relgion/{slug}', 'ReligionController@show');

Route::get('/desc/{id?}', 'ArganController@blog');
Route::get('/desct/{id?}', 'ThuyaController@blog');

Route::get('/bloga/{id?}',  'CooperativeController@blog');
Route::get('/showa/{slug}', 'CooperativeController@show');

Route::get('/blogt/{id?}', 'TcooperativeController@blog');
Route::get('/showt/{slug}', 'TcooperativeController@show');

Route::get('/welcome/{id?}' , 'AcceuilController@show');



/*Route::get('/musulman', function () {
    return view('religion.musulman');
});
Route::get('/tolerance', function () {
    return view('religion.tolerance');
});
Route::get('/juifs', function () {
    return view('religion.juifs');
});*/

/*Route::get('/desc', function () {
    return view('arganier.desc');
});*/


Route::get('/blog', function () {
    return view('blog.apropos');
});
Route::get('/contact', function () {
    return view('blog.contact');
});
/*Route::get('/religion', function () {
    return view('religion.religion');
});*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
