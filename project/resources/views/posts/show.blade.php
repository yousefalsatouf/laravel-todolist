@extends('base');

@section('content')
    <h1 class="text-dark"><b>Detail about {{$post->title}}!</b></h1>
        <div class="card p-5 m-5">
            <div class="card-header">
                <h3><b>Title: </b>{{ $post->title  }}</h3>
            </div>
            <div class="card-body">
                <p><b>Content: </b>{{ $post->content  }}</p>
            </div>
        </div>
@endsection

