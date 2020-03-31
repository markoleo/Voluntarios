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
    'update' => 'references.update',
    'destroy' => 'references.destroy'
])->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
])->parameters([
    'programas' => 'references'
]);

Route::resource('admin/proyectos', 'Admin\ProjectController')->names([
    'index' => 'projects.index',
    'create' => 'projects.create',
    'store' => 'projects.store',
    'edit' => 'projects.edit',
    'update' => 'projects.update',
    'destroy' => 'projects.destroy'
])->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
])->parameters([
    'proyectos' => 'projects'
]);

Route::resource('admin/voluntarios', 'Admin\VolunteersController')->names([
    'index' => 'volunteers.index',
    'create' => 'volunteers.create',
    'store' => 'volunteers.store',
    'edit' => 'volunteers.edit',
    'update' => 'volunteers.update',
    'destroy' => 'volunteers.destroy'
])->only([
    'index', 'create', 'store', 'edit', 'update','destroy'
])->parameters([
    'voluntarios' => 'volunteers'
]);

Route::resource('admin/sectores', 'Admin\SectorController')->names([
    'index' => 'sector.index',
    'create' => 'sector.create',
    'store' => 'sector.store',
    'edit' => 'sector.edit',
    'update' => 'sector.update',
    'destroy'=>'sector.destroy'
])->only([
    'index', 'create', 'store', 'edit', 'update','destroy'
])->parameters([
    'sectores' => 'sector'
]);

Route::resource('admin/instituciones', 'Admin\InstitutionsController')->names([
    'index' => 'institutions.index',
    'create' => 'institutions.create',
    'store' => 'institutions.store',
    'edit' => 'institutions.edit',
    'update' => 'institutions.update',
    'destroy'=>'institutions.destroy'
])->only([
    'index', 'create', 'store', 'edit', 'update','destroy'
])->parameters([
    'instituciones' => 'institutions'
]);

Route::resource('admin/Coberturas', 'Admin\ToppingsController')->names([
    'index' => 'toppings.index',
    'create' => 'toppings.create',
    'store' => 'toppings.store'
])->only([
    'index', 'create', 'store'
])->parameters([
    'coberturas' => 'toppings'
]);

Route::get('lista-coberturas-excel','Admin\ToppingsController@exportExcel')->name('toppings.excel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
