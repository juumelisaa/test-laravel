<div wire:init="getPosts" class="bg-yellow-900">
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
