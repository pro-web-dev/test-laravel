@extends('layout')

@section('content')
    <div class="container">
        <br>
        <h3>My list</h3>
        <a href="{{ route('tasks.create') }}" class="btn btn-success mt-3 mb-4">Create</a>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                {!! Form::open(['route' => ['tasks.destroy', $task->id],'method' => 'DELETE']) !!}
                                <a href="{{ route('tasks.show', $task->id) }}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('tasks.edit', $task->id) }}"><i class="fa fa-edit"></i></a>
                                <button type="submit" class="btn btn-link"
                                        onclick="return confirm('Удалить?')"
                                        style="padding: 0; margin-top: -7px;">
                                    <a href=""><i class="fa fa-remove"></i></a>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

