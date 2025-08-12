<div wire:init="getPosts">
    <p>Hello, {{ $name }}</p>
    @if ($isLoading)
        <p>LOADING</p>
    @endif
    <ul class="grid grid-cols-5">
    @foreach($posts as $post)
        <li>{{ $post['title'] }}</li>
    @endforeach
    </ul>
</div>
