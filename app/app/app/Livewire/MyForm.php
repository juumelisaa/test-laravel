<?php

namespace App\Livewire;

use Livewire\Component;

class MyForm extends Component
{
    
    public $email;
    public $password;

    public function submit()
    {
        // Example POST call
        $email = $this->email;
        $password = $this->password;
        if ($email == 'admin@mailinator.com' && $password == '123456') {
            session(['token' => 'hello']);
            return redirect('/posts');
        } else {
            session()->flash('error', 'Invalid credential!');
        }
    }

    public function render()
    {
        return view('livewire.my-form');
    }
}
