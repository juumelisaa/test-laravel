<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Posts;

class IndexController extends Controller
{
    public function index()
    {
        $res = Posts::fetchPosts();
        $posts = [];
        foreach ($res as $post) {
            $obj = [
                'id' => $post['id'],
                'title' => $post['title'],
                'body' => $post['body']
            ];
            array_push($posts, $obj);
        };
        return Inertia::render('Index', [
            'posts' => $posts,
        ]);
        
    }
}
