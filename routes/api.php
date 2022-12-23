<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Agama96Controller;
use App\Http\Controllers\api\UserData96Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/userdata96", [UserData96Controller::class, "getUsers96"]);
Route::get("/userdata96/{id}", [UserData96Controller::class, "getUserDetail96"]);
Route::put("/userdata96/{id}", [UserData96Controller::class, "putUserDetail96"]);
Route::put("/userdata96/{id}/photo", [UserData96Controller::class, "putUserPhoto96"]);
Route::put("/userdata96/{id}/photoKTP", [UserData96Controller::class, "putUserPhotoKTP96"]);
Route::put("/userdata96/{id}/password", [UserData96Controller::class, "putUserPassword96"]);
Route::put("/userdata96/{id}/status", [UserData96Controller::class, "putUserStatus96"]);
Route::put("/userdata96/{id}/agama", [UserData96Controller::class, "putUserAgama96"]);
Route::delete("/userdata96/{id}", [UserData96Controller::class, "deleteUser96"]);

Route::get("/agama96", [Agama96Controller::class, "getAgama96"]);
Route::get("/agama96/{id}", [Agama96Controller::class, "getDetailAgama96"]);
Route::post("/agama96", [Agama96Controller::class, "postAgama96"]);
Route::put("/agama96/{id}", [Agama96Controller::class, "putAgama96"]);
Route::delete("/agama96/{id}", [Agama96Controller::class, "deleteAgama96"]);



