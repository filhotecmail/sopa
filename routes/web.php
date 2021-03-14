<?php

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

Route::get('/', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'create'])->middleware(['guest']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//admin/user, admin/servico
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum','verified'], 'as' => 'admin.', 'namespace' => '\App\Http\Livewire' ], function() {
    Route::get('users', User\Index::class)->name('users');
    Route::get('users/create', User\Create::class)->name('users.create');
});

//php artisan make:livewire Nome ou Pasta/Arquivo
//php artisan route:list Lista de rotas