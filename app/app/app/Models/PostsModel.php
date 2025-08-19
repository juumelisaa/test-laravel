<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class PostsModel extends Model
{
    public static function fetchPosts()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $result = $response->json();
        return $result;
    }
}
