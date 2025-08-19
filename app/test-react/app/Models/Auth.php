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
            $token = 'token123';
            session(['token', $token]);
            $res = [
                'success' => true,
                'message' => 'success login'
            ];
            return $res;
        } else {
            $res = [
                'success' => false,
                'message' => 'invalid credential'
            ];
            return $res;
        }
    }
}
