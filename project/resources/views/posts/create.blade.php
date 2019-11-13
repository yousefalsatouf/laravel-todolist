@extends('base');

@section('content')
    <h1><b>Create a Post!</b></h1>
    @if($errors->all())
        <div class="alert alert-danger">
            Sorry, missing information!
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"  placeholder="Enter Title" name="title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" rows="7" placeholder="Enter Content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create now</button>
    </form>
@endsection

