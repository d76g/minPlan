<?php

use App\Http\Livewire\CareTips;
use App\Http\Livewire\AgeCategory;
use App\Http\Livewire\EmergencyContacts;
use App\Http\Livewire\MinPlanForm;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\OnboardingIntroduction;
use App\Http\Livewire\ShowFormData;

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
    return redirect('/home');
})->name('home');


Route::get('/admin/formdata', ShowFormData::class)->middleware(['auth', 'verified'])->name('formData');
Route::get('/admin/emergencycontacts', EmergencyContacts::class)->middleware(['auth', 'verified'])->name('contacts');

require __DIR__ . '/auth.php';

Route::get('/home', OnboardingIntroduction::class)->name('home');
Route::get('/home/guidance', AgeCategory::class)->name('Guidance');

Route::get('/relative-advice', function () {
    return view('relativeAdvice');
});

Route::get('/form', MinPlanForm::class)->name('form')->middleware('lang');
Route::get('/help', CareTips::class)->name('help');


Route::get('/downloadApp', function () {
    return view('downloadApp');
})->name('downloadApp');

Route::get('/underagehelp', function () {
    return view('underageHelp');
})->name('underageHelp');

Route::get('/advices', function () {
    return view('advices');
})->name('advices');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});
