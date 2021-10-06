@extends('layout.app')

@section('content')
    <a class="btn btn-info" href="{{url('todo')}}">Go Back</a>
    <h3 >{{ $todo->text }}</h3>
    <div class="label label-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
    <hr>
    <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
    <form action="{{action('TodosController@destroy',[$todo->id,'edit'])}}"method="post">
        <button type="submit"class="btn-primary">delete</button>
        <input type="hidden" name="_method"value="delete">
        {{csrf_field()}}
    
@endsection