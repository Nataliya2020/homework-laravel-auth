<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>О пользователе</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div>
    <div><span class="user-data-key">id:</span> {{$userData->id}},</div>
    <div><span class="user-data-key">name:</span> {{$userData->name}},</div>
    <div><span class="user-data-key">email:</span> {{$userData->email}}</div>
</div>
</body>
</html>
