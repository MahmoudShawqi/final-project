<?php

use App\Http\Controllers\TaskController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', [TaskController::class, 'index']);
// Route::get('/about', [TaskController::class, 'about']);
// Route::post('/about', [TaskController::class, 'send']);
// Route::get('/tasks', [TaskController::class, 'tasks']);
// Route::get('/show/{id}', function ($id) {

//     $tasks = [
//         'task_1' => 'Task 1',
//         2 => 'Task 2',
//         'c' => 'Task 3'
//     ];
//     $task = $tasks[$id];
//     return view('show', compact('task'));
// });
// Route::get('contact/{id}', [TaskController::class, 'show']);
//
// Route::get('app', function () {
//     return view('layout.app');
// });
Route::get('/',[TaskController::class,'index']);
Route::post('store', [TaskController::class, 'store']);
Route::get('delete/{id}', [TaskController::class, 'delete']);
Route::patch('update/{id}', [TaskController::class, 'update']);
Route::put('edit/{id}', [TaskController::class, 'edit']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
