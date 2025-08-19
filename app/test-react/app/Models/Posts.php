<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class Posts
{
    public static function fetchPosts()
    {
        $client = new Client();
        // $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $response = $client->get('https://jsonplaceholder.typicode.com/posts');
        $body = $response->getBody();
        $data = json_decode($body, true);
        // dd($data);
        return $data;
    }
}
