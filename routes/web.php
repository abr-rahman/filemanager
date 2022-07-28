<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TestmultipleUploadController;

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


Auth::routes();

Route::get('/open/file', [CategoryController::class, 'openfile'])->name('create.file');
Route::get('/test/file', [CategoryController::class, 'testfile'])->name('test.file');

Route::post('/apply/multiple_upload', [CategoryController::class, 'applyfile'])->name('apply.multiple_upload');

Route::resource('testmultiple', TestmultipleUploadController::class);

Route::post('/folder/store', [TestmultipleUploadController::class, 'folderstore'])->name('folder.store');

Route::get('/photo', [FolderController::class, 'photofolder'])->name('photo.folder');
Route::get('/video', [FolderController::class, 'videofolder'])->name('video.folder');
Route::get('/odio', [FolderController::class, 'odiofolder'])->name('odio.folder');
Route::get('/document', [FolderController::class, 'documentfolder'])->name('document.folder');
