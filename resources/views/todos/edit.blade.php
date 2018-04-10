@extends('layouts.app')

@section('content')
    <a href="/todo/{{$todos->id}}" class="btn btn-dark mt-5 mb-3">Go back</a>
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update',$todos->id], 'method'=>'POST']) !!}
    @csrf
    {{ Form::bsText('title',$todos->title) }}
    {{ Form::bsTextArea('body',$todos->body) }}
    {{ Form::bsText('due',$todos->due) }}

    {{ Form::hidden('_method','PUT') }}
    {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection