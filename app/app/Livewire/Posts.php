<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PostsModel;

class Posts extends Component
{
    public $name = "MINGYU";
    public $posts = [];
    public function getPosts ()
    {
        $this->posts = PostsModel::fetchPosts(); 
    }
    public function render()
    {
        return view('livewire.posts');
    }
}
