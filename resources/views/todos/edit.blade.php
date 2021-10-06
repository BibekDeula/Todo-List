@extends('layout.app')

@section('content')
    <h1>Edit Todo</h1>
    <a href="/todo/{{ $todo->id }}" class="btn btn-info">Go Back</a>
   <!DOCTYPE html>
<html>
<body>
        <form method="post"action="{{url('todo',$todo->id)}}">
    <input type="hidden"name="_method"value="put">
    TEXT:
    <input type="text"name="text"value="{{$todo->text}}"class ='form-control'><br>
    BODY:
    <input type="text"name="body"value="{{$todo->body}}"class ='form-control'><br>
    DUE:
    <input type="text"name="due"value="{{$todo->due}}"class ='form-control'><br><br>
    <input type="submit"name="save"value="update"class= 'btn btn-primary'>
    {{csrf_field()}}
</body>
</html>
@endsection