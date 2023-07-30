@extends('layouts.master')
@section('main')
<div class="row text-center">
    <div class="col-md-6">
        <h1> <a href="{{ route('task.one') }}">Task 1: </a> </h1>
    </div>

    <div class="col-md-6">
        <h1> <a href="{{ route('task.two') }}">Task 2: </a> </h1>
    </div>
</div>
@endsection
