@extends('layouts.app')

@section('content')
<h2>Edit Task</h2>
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('tasks.form', ['task' => $task])
    <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
@endsection
