<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/createAccount', [AdminController::class,"submitForm"]);
Route::post('/login', [AdminController::class,"loginForm"]);
Route::post('/uploadPost', [AdminController::class,"uploadPost"]);

Route::get('/followFromSearch', [AdminController::class,"followSearch"]);
Route::get('/unfollowFromSearch', [AdminController::class,"unfollowSearch"]);
Route::get("/profile",[AdminController::class,"profileHandle"]);
Route::get("/homeData",[AdminController::class,"homeData"]);
Route::get("/logout",[AdminController::class,"logout"]);

Route::get("/searchAccount",[AdminController::class,"searchAccount"]);
Route::get("/admin",[AdminController::class,"admin"]);


Route::get("/",function(){
    return view("welcome");
});
Route::get("/dashboard",function(){
    if(session("username"))
    {
    return view("home");
}
    else{
        return redirect("/")->with('msg','Please Login First');
    }
});
Route::get("/search",function(){
    if(session("username"))
    {
    return view("search");
    }
    else{
        return redirect("/")->with('msg','Please Login First');
    }
});
Route::get("/upload",function(){
    if(session("username"))
    {
    return view("upload");
}
    else{
        return redirect("/")->with('msg','Please Login First');
    }
});
