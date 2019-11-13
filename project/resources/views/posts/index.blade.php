@extends('base');

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <div class="m-5 text-info col-lg-12 d-flex justify-content-center">
                    <h1><b>All the lists!</b></h1>
                </div>
                <div class="d-flex flex-wrap justify-content-around">
                    @foreach($posts as $post)
                        <div class="card col-lg-4">
                            <div class="d-flex justify-content-center flex-wrap align-center card-body">
                                <h4 class=""><b>Title: </b>{{ $post->title  }}</h4>
                                <div class="p-4 d-flex flex-wrap justify-content-center">
                                    <button class="btn btn-primary col-lg-12 m-1">
                                        <a class="text-white" href="{{ route('posts.show', $post->id)  }}">More++</a>
                                    </button>
                                    <button class="btn btn-secondary col-lg-11 m-1">
                                        <a class="text-white" href="{{ route('posts.edit', $post->id)  }}">Edit</a>
                                    </button>
                                    <button class="btn btn-info col-lg-10 m-1">
                                        <a class="text-white" href="{{route('posts.create')}}" class="btn btn-secondary">Create One!</a>
                                    </button>
                                    <form class="col-lg-10 d-inline-block m-1" onsubmit="return confirm('Are you sure ?')" action="{{route('posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class=" col-lg-12 btn btn-danger text-white ">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-5 col-lg-12 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            @else
                <h2 class="text-danger">
                    <b>Nice Try!, Please Login First!</b>
                </h2>
            @endauth
        </div>
    @endif
@endsection

