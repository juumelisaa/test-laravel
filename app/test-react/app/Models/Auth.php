<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class Auth
{
    public static function login(array $data)
    {
        $client = new Client();
        if ($data['email'] === 'melisa@mailinator.com' && $data['password'] === '123456') {
            // $response = $client->post('https://jsonplaceholder.typicode.com/posts');
            // $body = $response->getBody();
            // $data = json_decode($body, true);
            // dd($data);
            return $data;
        } else {
            $res = [
                'error' => true
            ];
            return $res;
        }
    }
}
