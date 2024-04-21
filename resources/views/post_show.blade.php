<x-layout>
    <h1>Title: {{ $post->title }}</h1>
    <h2><a href={{ route('user_show', ['id' => $post->user->id]) }}>Creator: {{ $post->user->name }}</a></h2>
    <p>Description: {{ $post->content }}</p>
</x-layout>