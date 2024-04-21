<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 8</title>
</head>
<body>
    <div class="header">
        <ul class="header_list">
            <li class="headel_link"><a href={{ route('home') }}>Home</a></li>
            <li class="headel_link"><a href={{ route('posts') }}>Posts</a></li>
            <li class="headel_link"><a href={{ route('users') }}>Users</a></li>
            <li class="headel_link"><a href={{ route('roles') }}>Roles</a></li>
        </ul>
    </div>
    {{ $slot }}
</body>
</html>