<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);

Route::get('login', [LoginController::class, 'login']);

Route::get('login/{email}', function ($email) {

    $client = new Client([
        'base_uri' => 'http://localhost:8000/api/',
        'timeout' => 2.0
    ]);

    $response = $client->request('GET','usuario/'.$email.'');

    return json_decode( $response->getBody()->getContents());

});

Route::post('login', function(){
    // $credentials = request()->only('email','password');
    $credent_email = request('email');
    $credent_password = request('password');

    // return $credent_email.' + '.$credent_password;

    $client = new Client([
        'base_uri' => 'http://localhost:8000/api/',
        'timeout' => 2.0
    ]);

    $response = $client->request('GET','usuario/'.$credent_email);

    return json_decode( $response->getBody()->getContents());

    // if(Auth::attempt($credentials)){
    //     return 'Logueado';
    // }

    // return 'Fail Log';
});