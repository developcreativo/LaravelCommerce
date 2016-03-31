@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="margin-left: 10px">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif