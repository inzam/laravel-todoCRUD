@extends('layouts.app')

@section('content')
    <a href="/">Go Back</a>
    <div class="alert alert-warning mt-5" role="alert">
        <h3>{{$todos->body}}</h3>
        <span>{{$todos->due}}</span>
    </div>

    <a href="/todo/{{$todos->id}}/edit" class="btn btn-primary">Edit</a>

    {{--delete--}}
    {!! Form::open(['action' => ['TodosController@destroy',$todos->id], 'method'=>'POST', 'class' => 'float-right']) !!}
    {{ Form::hidden('_method','DELETE') }}
    {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection