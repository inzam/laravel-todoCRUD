@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method'=>'POST']) !!}
    //
    {!! Form::close() !!}
@endsection