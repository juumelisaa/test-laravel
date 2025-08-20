<div wire:init="getPosts" class='bg-gray-100'>
    <h1 class="mb-5 font-bold">POSTS</h1>
    @if ($isLoading)
        <p>LOADING</p>
    @endif

    <table>
        <thead class="bg-blue-900 text-white">
            <tr>
                <th class="p-4">No</th>
                <th class="p-4">Title</th>
                <th class="p-4">Body</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr class="<?= ($loop->iteration % 2 == 0) ? 'bg-blue-100' : 'bg-white' ?>">
                <td class="p-2">{{$loop->iteration}}</td>
                <td class="p-2">{{ $post['title'] }}</td>
                <td class="p-2">{{ $post['body'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
