@extends('layout')

@section('title', 'Home')

@section('content')
    <div>
        <h1>
            Here is my First blade layout
        </h1>
        <ul>
            @foreach($tasks as $task)

                <li>{{ $task }}</li>

            @endforeach
        </ul>
    </div>
@endsection