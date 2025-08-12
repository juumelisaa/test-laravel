<div wire:init="getPosts">
    <p>Hello, {{ $name }}</p>
    <ul>
    @foreach($posts as $post)
        <li>{{ $post['title'] }}</li>
    @endforeach
    </ul>
</div>
