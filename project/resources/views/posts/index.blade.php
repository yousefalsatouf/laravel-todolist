@extends('base');

@section('content')
        <h1>All posts!</h1>
        @foreach($posts as $post)
        <div class="card">
            <div class="card-body">
                <h><b>Title: </b>{{ $post->title  }}</h>
                <button class="bg-dark"><a href="{{ route('posts.show', $post->id)  }}">More++</a></button>
            </div>
        </div>
        @endforeach
@endsection

