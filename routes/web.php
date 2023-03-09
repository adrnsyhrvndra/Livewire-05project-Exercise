<?php

use App\Http\Livewire\TodoList;
use App\Http\Livewire\Calculator;
use App\Http\Livewire\ImageUpload;
use App\Http\Livewire\RegisterForm;
use App\Http\Livewire\ProductSearch;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CascadingDropdowns;

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

Route::get('/counter', function () {

    return view('welcome');

})->name('counter');

Route::get('/calculator', Calculator::class)->name('calculator');

Route::get('/todolist', TodoList::class)->name('todolist');

Route::get('/cascading-dropdowns', CascadingDropdowns::class)->name('cascading-dropdowns');

Route::get('/products', ProductSearch::class)->name('products');

Route::get('/image-upload', ImageUpload::class)->name('image-upload');

Route::get('/register', RegisterForm::class)->name('register');
