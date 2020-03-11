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
    'programas' => 'references'
]);

Route::resource('admin/proyectos', 'Admin\ProjectController')->names([
    'index' => 'projects.index',
    'create' => 'projects.create',
    'store' => 'projects.store',
    'edit' => 'projects.edit',
    'update' => 'projects.update'
])->only([
    'index', 'create', 'store', 'edit', 'update'
])->parameters([
    'proyectos' => 'projects'
]);

Route::resource('admin/voluntarios', 'Admin\VolunteersController')->names([
    'index' => 'volunteers.index',
    'create' => 'volunteers.create',
    'store' => 'volunteers.store',
    'edit' => 'volunteers.edit',
    'update' => 'volunteers.update'
])->only([
    'index', 'create', 'store', 'edit', 'update'
])->parameters([
    'voluntarios' => 'volunteers'
]);

Route::resource('admin/sectores', 'Admin\SectorController')->names([
    'index' => 'sector.index',
    'create' => 'sector.create',
    'store' => 'sector.store',
    'edit' => 'sector.edit',
    'update' => 'sector.update'
])->only([
    'index', 'create', 'store', 'edit', 'update'
])->parameters([
    'sectores' => 'sector'
]);