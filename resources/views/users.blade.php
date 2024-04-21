<x-layout>
    <h1>Users</h1>
    @foreach ($users as $user)
        <li><a href={{ route('user_show', ['id' => $user->id]) }}>{{ $user->name }}</a></li>
    @endforeach
</x-layout>