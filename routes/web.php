<?php

use App\Http\Controllers\authorController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\editorController;
use App\Http\Controllers\subcategoryController;
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

#region Authors
Route::get('/author/create', [authorController::class, 'create']);
Route::post('/author/create',[authorController::class, 'valid']);
Route::get('/author/update/{index}', [authorController::class, 'update']);
Route::post('/author/updateValid', [authorController::class, 'updateValid']);
Route::get('/author/delete/{index}', [authorController::class, 'delete']);
Route::post('/author/deleteValid', [authorController::class, 'deleteValid']);
#endregion
#region Editors
Route::get('/editor/create', [editorController::class, 'create']);
Route::post('/editor/create', [editorController::class, 'valid']);
Route::get('/editor/update/{index}', [editorController::class, 'update']);
Route::post('/editor/updateValid', [editorController::class, 'updateValid']);
Route::get('/editor/delete/{index}', [editorController::class, 'delete']);
Route::post('/editor/deleteValid', [editorController::class, 'deleteValid']);
#endregion
#region Categories
Route::get('/category/show', [categoryController::class, 'show']);
#endregion
#region SubCategories
Route::get('/subcategory/show', [subcategoryController::class, 'show']);
#endregion
