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
        $res = Auth::login($data);
        return Inertia::render('Login', [
            'apiResult' => $res,
            'test' => 'test aja'
        ]);
    }
}
