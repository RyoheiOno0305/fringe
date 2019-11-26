@extends('layout.app')

@section('content')
<body>
    @foreach($posts as $post)
        <div class="post">
            <p>{{$post->text}}</p>
            <p>{{$post->posted_at}}</p>
        </div> 
    @endforeach
</body>

@endsection