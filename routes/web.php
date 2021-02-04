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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [App\Http\Controllers\ProjectsController::class, 'show'])->name('projects.show');
Route::post('/projects', [App\Http\Controllers\ProjectsController::class, 'store'])->name('projects.store');

Route::get('/test', function(){
  $attributes = App\Models\Project::factory()->make(['title' => '']);
  dd($attributes);
});
