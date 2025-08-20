<div wire:init="getPosts">
    <p>Hello, {{ $name }}</p>
    @if ($isLoading)
        <p>LOADING</p>
    @endif
    <ul class="grid grid-cols-5 bg-[#0a0a0a]">
    @foreach($posts as $post)
        <li class="text-[#dd292f] ">{{ $post['title'] }}</li>
    @endforeach
    </ul>
</div>
