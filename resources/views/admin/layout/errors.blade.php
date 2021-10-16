

@if ($errors->any())
    <div class="font-bold btn btn-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </ul>
    </div>
@endif
