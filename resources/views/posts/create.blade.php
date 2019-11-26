@extends('layout.app')

@section('content')
<body>
    <div class="form-box offset-md-4">
        <form method="POST" action="/store" enctype="multipart/form-data">
            {{csrf_field()}}
            @csrf
            <input type="text" class="text-box" name="text">
            <input type="hidden" value="11111111-1111-1111-1111-111111111111" name="user_id">
            <input type="submit" class="btn btn-primary" value="送信">
        </form>
    </div>
</body>

@endsection