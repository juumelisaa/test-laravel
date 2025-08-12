<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PostsModel;

class Posts extends Component
{
    public $name = "World";
    public $isLoading = true;
    public $posts = [];
    public function getPosts ()
    {
        $this->posts = PostsModel::fetchPosts();
        $this->isLoading = false;
    }
    public function render()
    {
        return view('livewire.posts');
    }
}
