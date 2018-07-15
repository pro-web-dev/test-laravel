@if($errors->any())
    <div class="alert alert-danger my-3">
        @foreach($errors->all() as $error)
            <div>- {{ $error  }}</div>
        @endforeach
    </div>
@endif