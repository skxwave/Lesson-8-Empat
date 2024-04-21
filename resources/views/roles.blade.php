<x-layout>
    <h1>Roles</h1>
    @foreach ($roles as $role)
        <li><a href={{ route('role_show', ['id' => $role->id])}}>{{ $role->name }}, - {{ $role->description }}</a></li>
    @endforeach
</x-layout>