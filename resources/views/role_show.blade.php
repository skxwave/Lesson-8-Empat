<x-layout>
    <h1>Role Info</h1>
    <p>Name: {{ $role->name }}</p>
    <p>Description: {{ $role->description }}</p>
    <h2>Users with this role:</h2>
    @foreach ($role->users as $user)
        <li><a href={{ route('user_show', ['id' => $user->id]) }}>{{ $user->name }}</a></li>
    @endforeach
</x-layout>