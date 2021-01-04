<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    /**
     * PostController constructor.
     * Implement auth middleware, now user will not able to access create post page directly
     * using the URL unless login.
     */
    public function __construct()
    {
        $this-> middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(){
        $data = \request()-> validate([
           'caption' => 'required' ,
            'image' => ['required' , 'image']
        ]);

        dd(request('image') -> store('/uploads', 'public'));

        auth() -> user() -> posts() -> create($data);

        dd(request()->all());
    }
}
