@extends('base');

@section('content')
    <h1><b>Update The Current Post!</b></h1>
    @if($errors->all())
        <div class="alert alert-danger">
            Sorry, missing information!
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success">
            <li>{{session()->get('message')}}</li>
        </div>
    @endif

    <form method="post" action="{{route('posts.update', $post->id )}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"  placeholder="Enter Title" name="title" value="{{$post->title}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" rows="7" placeholder="Enter Content">{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update now</button>
    </form>
@endsection

