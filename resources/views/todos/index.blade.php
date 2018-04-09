@extends('layouts.app')

@section('content')
    <h1>Todos List</h1>
    @if(count($todos)>0)
        @foreach($todos as $todo)
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"><a href="/todo/{{$todo->id}}">{{$todo->title}}</a></h4>
                {{--<p>{{$todo->body}}</p>--}}
                <hr>
                <p class="mb-0">{{$todo->due}}</p>
            </div>
        @endforeach
    @endif
@endsection
