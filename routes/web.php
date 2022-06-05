<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
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

Route::get('/', function () {
    $portfolios = Portfolio::all();
    return view('home',['portfolios' => $portfolios]);
});
Route::get('faq',function(){
    return view('FAQ');
});
Route::get('about',function(){
    return view('about');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('terms-and-condition',function(){
    return view('tnc');
});

Route::post('contact',[EmailController::class,'contact']);
Route::post('quatation',[EmailController::class,'quatation']);
Route::get('login',[PortfolioController::class,'login']);
Route::post('admin',[PortfolioController::class,'admin']);
Route::get('portfolio',[PortfolioController::class,'portfolio'])->middleware('admin');
Route::post('addportfolio',[PortfolioController::class,'addportfolio'])->middleware('admin');
Route::get('logout',function(){
    session()->forget('quadmonk');
    return redirect('login');
});
Route::get('delete/{id}',[PortfolioController::class,'delete'])->middleware('admin');
Route::get('portfolios',function(){
    $portfolios = Portfolio::all();
    return view('portfolios',['portfolios' => $portfolios]);
});
