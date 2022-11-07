<?php

use App\Models\minPlanFormModel;
use App\Http\Livewire\MinPlanForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Livewire\LangTrasns;

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
    return redirect('/form');
});
Route::get('/relative-advice', LangTrasns::class);

Route::get('/relative-advice/advice', function () {
    return view('advices');
});

Route::get('/form', MinPlanForm::class)->name('form')->middleware('lang');

Route::get('/help', function () {
    return view('helpPage');
})->name('help');

Route::get('/downloadApp', function () {
    return view('downloadApp');
})->name('downloadApp');
Route::get('/underagehelp', function () {
    return view('underageHelp');
})->name('underageHelp');
