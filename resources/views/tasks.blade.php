<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $key => $task)
        {{-- <li>{{$key}} - <h2>{{$task}}</h2></li> --}}
        <li><a href="{{$key}}">{{$task}}</a></li>
        @endforeach
    </ul>
<h1>{{$tasks['c']}}</h1>
</body>
</html>
