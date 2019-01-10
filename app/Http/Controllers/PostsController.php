<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Posts;
class PostsController extends Controller
{
    protected $posts;
    public function __construct(Posts $posts)
    {
        $this->posts = $posts;
    }
    public function index()
    {
        $posts = $this->posts->all();
        $posts = json_decode($posts, true);
        //$posts = array_search('Luke Skywalker', $posts);
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = $this->posts->find($id);
        $post = json_decode($post, true);
        //dd($post);
        $i = 0;
        return view('posts.show', compact('post', 'i'));
    }
    public function search()
    {
        $nome = $_GET['nome'];
        dd($nome);
        return view('posts.index', compact('nome'));
    }
}
