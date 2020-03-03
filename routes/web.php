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

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('admin', 'admin.index')->name('admin.index');

Route::resource('admin/programas', 'Admin\ReferencesController')->names([
    'index' => 'references.index',
    'create' => 'references.create',
    'store' => 'references.store',
    'edit' => 'references.edit',
    'update' => 'references.update'
])->only([
    'index', 'create', 'store', 'edit', 'update'
])->parameters([
    'progrmas' => 'references'
]);