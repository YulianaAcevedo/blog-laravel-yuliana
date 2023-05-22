<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;

use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
       /*if (!Gate::allows('index', $posts[0])){
            abort(403);
        }
        
*/
        return view('dashboard.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      /*  $categories = Category::pluck('id', 'name');
       
        $post= new Post();
        /*if (!Gate::allows('create', $posts)){
            abort(403);
        }
        
*/
        return view('dashboard.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePost $request)
    {
        Post::create($request ->validated());
        return back()->with('status', 'Publicacion creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', ["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',["post"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePost $request, Post $post)
    {
        $post->update($request ->validated());
        return back()->with ('status',"Post modificado exitosamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status',"Post eliminado exitosamente");
    }

    public function category(Category $category)
    {
        
        return $this->sucessResponse($category->post);
    }
}
