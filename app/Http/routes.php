<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['domain' => '{domain}.abc.com'], function (){
    Route::get('/',function ($domain){
        if($domain != 'www'){
            $user = \App\Company::where('domain','=',$domain) -> first();  // 返回单条记录;
            if($user){
                $template = \App\Template::where('id','=',$user -> tid) -> first();
                //dd($template);
                return view('template.'.$template -> name.'.index')->with('name',$template -> name);

            }else{
                return view('welcome')->with('msg',$domain);
            }

        }else{
            return view('index');
        }
    });

});






//Route::post('/login', 'Auth\AuthController@postLogin');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('info', 'AdminController@corporateInformation');
    Route::post('info', 'AdminController@postInformation');
    Route::post('changePassword', 'AdminController@changePassword');

    Route::get('template','AdminController@selectTemplate');

    Route::post('changeTemplate','AdminController@changeTemplate');

    Route::get('shop','PromptController@index');

    Route::get('prompt','PromptController@index');

});
