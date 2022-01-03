<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1> Contact Page 1 </h1> 
    {{-- <h1> {{$name}}  </h1> --}}
    <h1>Time {{ time()}} </h1>
    <h1>Square {{sqrt(49)}} </h1>

    @if ($name=="Hassan")
        <h1>Hellow {{$name}} </h1>
        @elseif ($name=="Husnain")
        <h1>Hi {{$name}}</h1>
        @else
        <h1>Hellow Guest</h1>
    @endif

    @unless ($name=="Hassan")
        <h1>You are Not Admin</h1>
    @endunless
@isset($name)
    <h1>{{$name}} You are Admin</h1>
@endisset

@empty($name)
    <h1>Hellow</h1>
@endempty


@production
     <h1>Hellow</h1>
@endproduction

@env('local')
    <h1>Hellow local Enviroment</h1>
@endenv

@switch(1)
    @case(1)
        <h1>First</h1>
        @break
    @case(2)
        <h1>Second</h1>
        @break
    @case(3)
        <h1>Third</h1>
        @break

    @default
        <h1>Invalid Value</h1>
@endswitch

@for ($i=0;$i<10;$i++)

  {{$i}}
@endfor

@foreach ($students as $value)
    <h1> {{$value}} </h1>
@endforeach
</body>
</html>