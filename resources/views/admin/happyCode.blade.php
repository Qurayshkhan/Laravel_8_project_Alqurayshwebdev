<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Includes</title>
</head>
<body>
    <h1>{{$web}} Welcome To Happy Code</h1>
    <hr>
    @include('admin.mobile',['total_mobile'=>4]);
    {{-- @includeIf('admin.mobile',['total_mobile'=>4]); --}}
    @includeWhen($userType,'admin.mobile',['total_mobile'=>4]);
    {{-- @foreach ($students as $stu)
     @include('admin.students')
    @endforeach --}}
    @each('admin.students',$students ,'stu')
    @once
    <h1>It will eveluated once per rendering</h1>
    @endonce

<h1>How To Write Php in Laravel</h1>
@php
    echo 'Welcome To PHP CODE';
@endphp

</body>
</html>