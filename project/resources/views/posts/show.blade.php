@extends('base');

@section('content')
    <h1>All posts!</h1>
        <div class="card">
            <div class="card-header">
                <h3><b>Title: </b>{{ $post->title  }}</h3>
            </div>
            <div class="card-body">
                <p><b>Title: </b>{{ $post->content  }}</p>
            </div>
        </div>
@endsection

