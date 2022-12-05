<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задачи</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @if (count($todos) === 0)
        <div class="todo-container">
            <div class="todo-content todo-content-padding">Задач нет</div>
        </div>
    @else
        <div class="todo-container">
            @foreach ($todos as $todo)
                <div class="todo-content">
                    <div class="todo-title">{{ $todo->title }}</div>
                    <div class="todo-descript">{{ $todo->description }}</div>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>
