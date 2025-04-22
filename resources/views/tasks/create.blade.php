@extends('layouts.app')

@section('content')
<h2>Create Task</h2>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    @include('tasks.form')
    <button type="submit" class="btn btn-success mt-2">Create</button>
</form>
@endsection
