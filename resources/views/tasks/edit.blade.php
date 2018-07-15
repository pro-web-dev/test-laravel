@extends('layout')

@section('content')
    <div class="container">
        <br>
        <h3>Edit task # - {{ $task->id }}</h3>

        @include('errors')

        <div class="row mt-4">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.update', $task->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    <input value="{{ $task->title }}" name="title" type="text" class="form-control mb-4">
                    <textarea name="description" cols="30" rows="7" class="form-control mb-4">{{ $task->description }} </textarea>
                    <button class="btn btn-warning">Изменить</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

