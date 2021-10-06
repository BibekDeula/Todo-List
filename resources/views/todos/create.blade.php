@extends('layout.app')

@section('content')
 <form method="POST"action="{{url('todo')}}"autocomplete="off">
    ID:
    <input type="text" name="id"class ='form-control'><br>
    TEXT:
    <input type="text" name="text"class ='form-control'><br>
    BODY:
    <input type="text" name="body"class ='form-control'><br>
    DUE:
    <input type="text" name="due"class ='form-control'><br>
    <input type="submit" name="save"class= 'btn btn-primary'><br>
{{csrf_field()}}
 </form>

@endsection