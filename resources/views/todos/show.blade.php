@extends('layouts.app')

@section('content')
    <div class="alert alert-warning mt-5" role="alert">
        <h3>{{$todos->body}}</h3>
        <span>{{$todos->due}}</span>
    </div>
    <a href="/">Go Back</a>

@endsection