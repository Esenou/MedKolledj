<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>


</head>
<body>
<ul>

    @foreach($tasks as $task)
        <a href="tasks/{{$task->id}}">
            <li>{{$task->title}}</li>
        </a>

    @endforeach
</ul>


</div>
</body>
</html>