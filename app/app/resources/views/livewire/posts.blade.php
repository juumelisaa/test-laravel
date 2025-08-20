<div wire:init="getPosts" class='bg-gray-100'>
    <p>Hello, {{ $name }}</p>
    @if ($isLoading)
        <p>LOADING</p>
    @endif
    <ul class="grid grid-cols-3 gap-10">
    @foreach($posts as $post)
        <li class="shadow rounded p-5">
            <p class='font-bold capitalize'>{{ $post['title'] }}</p>
            <p>{{ $post['body'] }}</p>
        </li>
    @endforeach
    </ul>
</div>
