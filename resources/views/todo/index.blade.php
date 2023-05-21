@extends('layouts/app')
@section('title', 'Todo List')
@section('content')

<a href="/todo/create" class="btn btn-primary" >New Todo</a>

    <ul class="list-group my-5">
        @foreach ($todos as $todo)
        @php
            $todoClass ='';
            if($todo->is_complete) {
                $todoClass = 'checked';
            }
        @endphp  
        
            <li class="list-group-item {{ $todoClass }}">
                <small class="float-end"><span class="mx-3"><a href="/todo/{{$todo->id}}/edit">Edit</a></span><span><a href="/todo/{{$todo->id}}">Delete</a></span></small>
                <input class="form-check-input me-1" type="checkbox"  {{ $todoClass }}>
                <label class="form-check-label" for="firstCheckbox">{{$todo->title}}</label>
                <p class="my-2 mx-1">{{ $todo->description }}</p>
                
            </li>
        @endforeach
    </ul>
@endsection