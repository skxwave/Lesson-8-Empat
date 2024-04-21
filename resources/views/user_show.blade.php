<x-layout>
    <h1>User Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Posts:</p>
    @foreach ($posts as $post)
        <li><a href={{ route('post_show', ['id' => $post->id]) }}>{{ $post->title }}</a></li>
    @endforeach
</x-layout>