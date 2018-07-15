@extends('layout')

@section('content')
    <div class="container">
        <br>
        <h3>Create task</h3>

        @include('errors')

        <div class="row mt-4">
            <div class="col-md-12">
                {!! Form::open(['route' => 'tasks.store']) !!}
                <div class="form-group">
                    <input value="{{ old('title') }}" name="title" type="text" class="form-control mb-4">
                    <textarea {{ old('description') }} name="description" cols="30" rows="7" class="form-control mb-4"></textarea>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

