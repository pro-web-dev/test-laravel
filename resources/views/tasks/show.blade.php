@extends('layout')

@section('content')
    <div class="container">
        <br>

        @include('errors')

        <div class="row mt-4">
            <div class="col-md-12">
                <h3>{{ $task->title }}</h3>
                <hr>
                <p>{{ $task->description }}</p>
            </div>
        </div>
    </div>
@endsection

