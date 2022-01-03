@extends('components.inharit-layout')
@section('title','home')
@section('page-name')
    <h1>Welcome Here</h1>
@endsection

@section('default-content')
    @parent
    <h4>This is Defalut Content from layout</h4>
@endsection