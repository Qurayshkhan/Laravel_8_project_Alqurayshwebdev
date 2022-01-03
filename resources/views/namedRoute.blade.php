<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Name Route Home Page</h1>
    <ul>
        <li><a href="namedRoute">Home</a></li>
        <li><a href="namedRouteAbout">About</a></li>
        <li><a href="nameRouteContact">Contact</a></li>
    </ul>
    <ul>
        <li><a href="{{route('namedRoute')}}">Home</a></li>
        <li><a href="{{route('nameRouteAbout')}}">About</a></li>
        <li><a href="{{route('nameRouteController')}}">Contact</a></li>
    </ul>
</body>
</html>