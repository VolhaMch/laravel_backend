<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DownloadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/download', [DownloadController::class, 'download'])->name('CV_Machys.pdf');
Route::middleware('lang')->group(function () {
Route::get('/', [App\Http\Controllers\BaseController::class, 'getIndex']);
Route::get('/dashboard', function () {return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/favorites', [ProfileController::class, 'favorites'])->name('profile.favorites');

});

    Route::middleware('auth')->group(function () {
        Route::get('/favorite/{blog}', [FavoriteController::class, 'add'])->name('favorite.add');
        Route::get('/favorite/{blog}/delete', [FavoriteController::class, 'delete'])->name('favorite.delete');
    });
Route::get('blogs', [Controllers\BlogController::class, 'getAll']);
Route::get('blog/{blog}', [Controllers\BlogController::class, 'getOne'])->name('blog');

    Route::get('review', [Controllers\ReviewController::class,'getIndex']
    );
    Route::post('review', [Controllers\ReviewController::class,'postIndex']
    );

    Route::get('feed', [Controllers\FeedController::class, 'getIndex']);
    Route::get('star/add', [Controllers\StarController::class, 'getAdd']);

//    Route::get('comment', [Controllers\CommentController::class,'getIndex']);
//    Route::post('comment', [Controllers\CommentController::class, 'postIndex']);
//    Route::get('/portfolio', function () {
//        return view('portfolio');
//    });
    Route::get('/case', function () {
        return view('case');
    });
    Route::get('/sitemap.xml', [SitemapController::class, 'generateSitemap']);
Route::middleware('auth')->group(function () {
    Route::post('blog/{blog}/add_text', [Controllers\BlogController::class, 'postBlogText']);
    Route::post('blogtext/{blog_text}/add_picture', [Controllers\BlogController::class, 'addPicture']);
    Route::post('blog_text/{blog_text}/edit', [Controllers\BlogController::class, 'updateBlogText']);
    Route::get('blog_picture/{blog_text_picture}/delete', [Controllers\BlogController::class, 'deletePicture']);
    Route::post('blog/{blog}/add_comment', [Controllers\BlogController::class, 'postAddComment']);
});
require __DIR__.'/auth.php';
//всегда последний
Route::get('/{url}', [App\Http\Controllers\BaseController::class, 'getUrl']);
});



