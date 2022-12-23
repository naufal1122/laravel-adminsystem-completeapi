<?php

use App\Http\Controllers\UserData96Controller;
use App\Http\Controllers\Agama96Controller;
use App\Http\Controllers\apiclient\Agama96Controller as ClientAgama96Controller;
use App\Http\Controllers\apiclient\UserData96Controller as ClientUserData96Controller;
use Illuminate\Support\Facades\Route;

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

//welcome page
Route::get('/', function () {
    return redirect('/login96');
});

Route::group(['middleware' => ['isNotLogged']], function () {
    // Register Login
    Route::view('/register96', 'register');
    Route::view('/login96', 'login');
    Route::post('/register96', [App\Http\Controllers\Register96Controller::class, 'register96']);
    Route::post('/login96', [App\Http\Controllers\Login96Controller::class, 'login96']);
});

// Role Admin
Route::group(['middleware' => ['isAdmin']], function () {

    // API DATA USER
    Route::get('/dashboard96', [UserData96Controller::class, 'dashboardPage96']);
    Route::get('/user96/{id}', [UserData96Controller::class, 'detailPage96']);
    Route::get('/user96/{id}/status', [UserData96Controller::class, 'putUserStatus96']);
    Route::post('/user96/{id}/agama', [UserData96Controller::class, 'putUserAgama96']);
    Route::get('/user96/{id}/delete', [UserData96Controller::class, 'deleteUser96']);

    // API AGAMA
    Route::get("/agama96", [Agama96Controller::class, "agamaPage96"]);
    Route::post("/agama96", [Agama96Controller::class, "createAgama96"]);
    Route::get("/agama96/{id}/edit", [Agama96Controller::class, "editAgamaPage96"]);
    Route::post("/agama96/{id}/update", [Agama96Controller::class, "updateAgama96"]);
    Route::get("/agama96/{id}/delete", [Agama96Controller::class, "deleteAgama96"]);

    // API CLIENT DATA USER
    Route::get("/apiclient/dashboard96", [ClientUserData96Controller::class, "dashboardPage96"]);
    Route::get("/apiclient/user96/{id}", [ClientUserData96Controller::class, "detailPage96"]);
    Route::get("/apiclient/user96/{id}/status", [ClientUserData96Controller::class, "putUserStatus96"]);
    Route::post("/apiclient/user96/{id}/agama", [ClientUserData96Controller::class, "putUserAgama96"]);
    Route::get("/apiclient/user96/{id}/delete", [ClientUserData96Controller::class, "deleteUser96"]);

    // API CLIENT AGAMA
    Route::get("/apiclient/agama96", [ClientAgama96Controller::class, "agamaPage96"]);
    Route::get("/apiclient/agama96/{id}/edit", [ClientAgama96Controller::class, "editAgamaPage96"]);
    Route::post("/apiclient/agama96", [ClientAgama96Controller::class, "createAgama96"]);
    Route::post("/apiclient/agama96/{id}/update", [ClientAgama96Controller::class, "updateAgama96"]);
    Route::get("/apiclient/agama96/{id}/delete", [ClientAgama96Controller::class, "deleteAgama96"]);


});


// Role User
Route::group(['middleware' => ['isUser']], function () {

    // API User
    Route::view('/changePassword96', 'editPassword');
    Route::get('/profile96', [UserData96Controller::class, 'profilePage96']);
    Route::post('/user96', [UserData96Controller::class, 'putUserDetail96']);
    Route::post('/user96/photo', [UserData96Controller::class, 'putUserPhoto96']);
    Route::post('/user96/photoKTP', [UserData96Controller::class, 'putUserPhotoKTP96']);
    Route::post('/user96/password', [UserData96Controller::class, 'putUserPassword96']);

    // API Client User
    Route::view('/apiclient/changePassword96', 'editPassword', ['Use_API' => true]);
    Route::get('/apiclient/profile96', [ClientUserData96Controller::class, 'profilePage96']);
    Route::post('/apiclient/user96', [ClientUserData96Controller::class, 'putUserDetail96']);
    Route::post('/apiclient/user96/photo', [ClientUserData96Controller::class, 'putUserPhoto96']);
    Route::post('/apiclient/user96/photoKTP', [ClientUserData96Controller::class, 'putUserPhotoKTP96']);
    Route::post('/apiclient/user96/password', [ClientUserData96Controller::class, 'putUserPassword96']);


});

// Welcome Page
Route::get('/welcome96', [App\Http\Controllers\Welcome96Controller::class, 'welcomePage96']);

// Logout Session
Route::get('/logout96', [UserData96Controller::class, 'logout96'])->middleware('isLogged');
