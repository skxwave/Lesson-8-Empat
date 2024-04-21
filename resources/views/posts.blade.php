<x-layout>
    <p>Posts</p>

    @foreach ($posts as $post)
        <li><a href={{ route('post_show', ['id' => $post->id]) }}>{{ $post->title }}</a></li>
        <p>{{ $post->content }}</p>
    @endforeach
</x-layout>