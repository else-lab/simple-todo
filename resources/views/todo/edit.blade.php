@extends('layouts/app')
@section('title', 'New Todo')

@section('content')
    <h2>Edit a todo</h2>
    <form action="/todo/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $todo->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="isCompleted" class="form-label">Task Completed?</label>
            <select class="form-control" name="is_complete" id="is_complete">
                <option value=no>No</option>
                <option value=yes>Yes</option>
            </select>
        </div>

        <button class="btn btn-primary"type="submit">Update Todo</button>

    </form>

@endsection
