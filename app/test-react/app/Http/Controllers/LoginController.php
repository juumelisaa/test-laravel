<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        // dd($data);
        // return $data;
        $res = Auth::login($data);
        // return $res;
        // $posts = [];
        // foreach ($res as $post) {
        //     $obj = [
        //         'id' => $post['id'],
        //         'title' => $post['title'],
        //         'body' => $post['body']
        //     ];
        //     array_push($posts, $obj);
        // };
        return Inertia::render('login', [
            'success' => true,
        ]);
        
    }
}
