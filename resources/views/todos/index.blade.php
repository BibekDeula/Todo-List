@extends('layout.app')

@section('content')

    <h1>Todo List</h1>

    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="well">
                <h3><a href="todo/{{ $todo->id }}">{{ $todo->text }}</a></h3><h4> <br><span class="label label-danger">{{ $todo->due }}</span><br><br><span class="btn-info">{{$todo->body}}</span></h4>
            </div>
        @endforeach
    @endif

@endsection
   <style> /* this is style is for product zoom effect */

         {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  
  transition: transform .2s;
 
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.25); 
 
}
    </style>