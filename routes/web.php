<?php

use App\Http\Controllers\{ LoginController, ArticleController, CategoryController, TagController };
use App\Http\Controllers\ArticlePostController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('page.homepage.homepage');
// })->name('home');

Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('/coba-isi', function () {
	return view('page.article.public.detail');
 })->name('coba');

Route::get('/login', function(){
	return redirect('http://propertio-sso.apps.test/login');
 })->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

// Route::get('/', [ArticleController::class, 'index']);
/*Route::get('/isi_post', function(){
	return view('blog.isi_post');
});*/
Route::get('/isi-post/{slug}', [ArticleController::class, 'isi_blog'])->name('blog.isi');
Route::get('/list-post', [ArticleController::class, 'list_blog'])->name('blog.list');
Route::get('/category/{category}/list-post', [ArticleController::class, 'list_blog_by_category'])->name('blog.category.list');
Route::get('/list-category/{category}', [ArticleController::class, 'list_category'])->name('blog.category');
Route::get('/cari', [ArticleController::class, 'cari'])->name('blog.cari');
Route::get('/post-terbaru', [ArticleController::class, 'post_terbaru']);
Route::get('/post-populer', [ArticleController::class, 'post_popular']);
Route::get('/category_footer', [ArticleController::class, 'category_footer']);



Route::group(['middleware' => 'auth' ], function(){
	// Route::middleware('role: ADMIN | SUPER_ADMIN')->group(function () {
		// Route::get('/home', 'HomeController@index')->name('home');
		Route::resource('/category', CategoryController::class);
		Route::resource('/tag', TagController::class);
	
		Route::resource('/post', ArticlePostController::class);
		Route::get('/post/tampil_hapus', [ArticlePostController::class, 'tampil_hapus'])->name('post.tampil_hapus');
		Route::get('/post/restore/{id}', [ArticlePostController::class, 'restore'])->name('post.restore');
		Route::delete('/post/kill/{id}', [ArticlePostController::class, 'kill'])->name('post.kill');
		Route::resource('/user', 'UserController');
	// });
});