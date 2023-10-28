<?php

namespace App\Http\Controllers;

use App\Models\Article as Posts;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Redirect,Response;

class ArticleController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::all();

        $c_properti = Category::where('name','Properti')->first();
        $data_properti = Posts::where('category_id', $c_properti->id)->take(2)->get();
        foreach ($data_properti as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }

        $c_arsitektur = Category::where('name','Arsitektur')->first();
        $data_arsitektur = Posts::where('category_id', $c_arsitektur->id)->take(4)->get();
        foreach ($data_arsitektur as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }

        $c_keuangan = Category::where('name','Keuangan')->first();
        $data_keuangan = Posts::where('category_id', $c_keuangan->id)->take(3)->get();
        foreach ($data_keuangan as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }

        $c_ide = Category::where('name','Ide Kreatif')->first();
        $data_ide = Posts::where('category_id', $c_ide->id)->take(3)->get();
        foreach ($data_ide as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }

        $c_lifestyle = Category::where('name','Lifestyle')->first();
        $data_lifestyle = Posts::where('category_id', $c_lifestyle->id)->take(3)->get();
        foreach ($data_lifestyle as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }

        $c_budaya = Category::where('name','Budaya')->first();
    	$data_budaya = Posts::where('category_id', $c_budaya->id)->take(3)->get();
        foreach ($data_budaya as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }

        // $data = $posts->latest()->take(8)->get();
    	return view('page.homepage.homepage', compact(
            'category_widget','c_properti','data_properti','c_arsitektur','data_arsitektur',
            'c_keuangan','data_keuangan','c_ide','data_ide',
            'c_lifestyle','data_lifestyle','c_budaya','data_budaya'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        
    	$data = Posts::where('slug', $slug)->first();
        $data->date = Carbon::parse($data->created_at)->locale('id')->diffForHumans(); 
    	return view('page.article.public.detail', compact('data','category_widget'));
    }

    public function list_blog(){
        $category_widget = Category::all();
    	$data = Posts::latest()->paginate(10);
        foreach ($data as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }
    	return view('page.article.public.list', compact('data','category_widget'));
    }

    public function list_blog_by_category($category_name){
        $category_widget = Category::all();
        $category = Category::where('name', $category_name)->first();
    	$data = Posts::where('category_id', $category->id)->latest()->paginate(10);
        foreach ($data as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }
    	return view('page.article.public.listByCategory', compact('data','category', 'category_widget'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();

        $data = $category->posts()->paginate(6);
        return view('blog.list_post', compact('data','category_widget'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
    	$data = Posts::where('title','like','%'.$request->cari.'%')->paginate(10);
        foreach ($data as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }
        return view('page.article.public.list', compact('data','category_widget'));
    }

    public function post_terbaru(){
    	$data = Posts::select('title','slug','image_cover','created_at')->latest()->limit(5)->get();
        foreach ($data as $post) {
            $post->date = Carbon::parse($post->created_at)->locale('id')->diffForHumans();
        }
        // dd($data);
    	return Response::json( ['post' => $data]);;
    }

    public function post_popular(){
    	$data = Posts::select('title','slug','image_cover')->latest()->limit(3)->get();
        // dd($data);
    	return Response::json( ['post' => $data]);;
    }

    public function category_footer(){
    	$data = Category::select('name')->withCount(['articles'])->latest()->limit(6)->get();
        // dd($data);
    	return Response::json( ['category' => $data]);;
    }
}
