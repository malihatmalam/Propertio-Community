<?php

namespace App\Http\Controllers;

use App\Models\Article as Posts;
use App\Models\Category;
use App\Models\Tags;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticlePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user()->id;
        $category_widget = Category::all();
        $post = Posts::where('user_id',$auth)->paginate(10);
        return view('page.article.public.posting.index', compact('post','category_widget'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_widget = Category::all();
        $tags = Tags::all();
        $category = Category::all();
        return view('page.article.public.posting.create', compact('category','tags','category_widget'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'image_cover' => 'required',
            'read_duration' => 'required'
        ]);

        $image_cover = $request->image_cover;
        $new_image_cover = time().$image_cover->getClientOriginalName();

        $post = Posts::create([
            'title' => $request->title,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,
            'image_cover' => 'public/uploads/posts/'.$new_image_cover,
            // 'slug' => Str::slug($request->title),
            'read_duration' => $request->read_duration,
            'user_id' => Auth::user()->id
        ]);

        $post->tag()->attach($request->tags);

        $image_cover->move('public/uploads/posts/', $new_image_cover);
        return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_widget = Category::all();

        $category = Category::all();
        $tags = Tags::all();
        $post = Posts::findorfail($id);
        return view('page.article.public.posting.edit', compact('post','tags','category', 'category_widget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            // 'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'read_duration' => 'required'            
         ]);

        

        $post = Posts::findorfail($id);

        if ($request->has('image_cover')) {
            $image_cover = $request->image_cover;
            $new_image_cover = time().$image_cover->getClientOriginalName();
            $image_cover->move('public/uploads/posts/', $new_image_cover);

        $post_data = [
            // 'title' => $request->title,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,
            'image_cover' => 'public/uploads/posts/'.$new_image_cover,
            // 'slug' => Str::slug($request->title),
            'read_duration' => $request->read_duration,
        ];
        }
        else{
        $post_data = [
            // 'title' => $request->title,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,            
            // 'slug' => Str::slug($request->title),
            'read_duration' => $request->read_duration,
        ];
        }
    

        $post->tag()->sync($request->tags);
        $post->update($post_data);

        
        return redirect()->route('post.index')->with('success','Postingan anda berhasil diupdate'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success','Post Berhasil Dihapus (Silahkan cek trashed post)');
    }

    public function tampil_hapus(){
        $post = Posts::onlyTrashed()->paginate(10);
        return view('page.article.public.posting.hapus', compact('post'));
    }

    public function restore($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->back()->with('success','Post Berhasil DiRestore (Silahkan cek list post)');
    }

    public function kill($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        return redirect()->back()->with('success','Post Berhasil Dihapus Secara Permanen');
    }
}
