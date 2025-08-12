<div wire:init="getPosts">
    <p>Hello, {{ $name }}</p>
    @if ($isLoading)
        <p>LOADING</p>
    @endif
    <ul>
    @foreach($posts as $post)
        <li>{{ $post['title'] }}</li>
    @endforeach
    </ul>
</div>
