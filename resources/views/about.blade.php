<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- <h1>about us</h1>
    <?php echo "I am $name";
    // <h1>{{$name}}</h1>
    // <h1>{{$age}}</h1>
        // echo "<br>";
        echo "I am $age";
        //علامة الدولار دائما لازم تكون متوفرة
        ?> --}}
        <form action="/about" method="post">
            @csrf
            <input type="text" name="name" id="name">
            <input type="submit" value="Send">
        </form>
        <h1>my name is :{{$name}}</h1>
        {{-- <h1>my age is : {{$age}}</h1> --}}
</body>
</html>
