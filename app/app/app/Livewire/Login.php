<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function mount ()
    {
        session(['token' => 'hello']);
        $token = session('token');
        return redirect('/posts');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
