<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayeoutController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

// Route::get('home', [HomeController::class, 'index']);

Route::get('auth/register', [RegisterController::class, 'register']);
Route::post('/auth/register/store', [RegisterController::class, 'registerstore'])->name('auth.register.store');

Route::get('home', [TestmultipleUploadController::class, 'index']);
Route::get('testmultiple/create', [TestmultipleUploadController::class, 'create'])->name('testmultiple.create');
Route::post('testmultiple/store', [TestmultipleUploadController::class, 'store'])->name('testmultiple.store');
Route::get('testmultiple/edit/{id}', [TestmultipleUploadController::class, 'edit'])->name('testmultiple.edit');
Route::post('testmultiple/update/{id}', [TestmultipleUploadController::class, 'update'])->name('testmultiple.update');
Route::get('testmultiple/destroy/{id}', [TestmultipleUploadController::class, 'destroy'])->name('testmultiple.destroy');
Route::get('testmultiple/show', [TestmultipleUploadController::class, 'show']);

Route::post('/folder/store', [TestmultipleUploadController::class, 'folderstore'])->name('folder.store');

Route::get('/photo', [FolderController::class, 'photofolder'])->name('photo.folder');
Route::get('/video', [FolderController::class, 'videofolder'])->name('video.folder');
Route::get('/odio', [FolderController::class, 'odiofolder'])->name('odio.folder');
Route::get('/document', [FolderController::class, 'documentfolder'])->name('document.folder');
Route::get('/index/edit/{id}', [EditController::class, 'indexToedit'])->name('indexTo.edit');


Route::get('/grid/layet', [LayeoutController::class, 'gridlayet'])->name('grid.layet');
Route::get('/grid/video', [LayeoutController::class, 'listvideo'])->name('list.video');
Route::get('/grid/audio', [LayeoutController::class, 'listaudio'])->name('list.audio');

Route::get('/grid/list', [LayeoutController::class, 'gridlist'])->name('grid.list');


