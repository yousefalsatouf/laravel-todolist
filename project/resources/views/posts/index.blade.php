@extends('base');

@section('content')
        <div class="m-5 text-info col-lg-12 d-flex justify-content-center">
            <h1><b>All the lists!</b></h1>
        </div>
        <div class="d-flex flex-wrap justify-content-around">
            @foreach($posts as $post)
                <div class="card col-lg-4">
                    <div class="d-flex justify-content-center flex-wrap align-center card-body">
                        <h4 class=""><b>Title: </b>{{ $post->title  }}</h4>
                        <div class="p-4">
                            <button class="btn btn-primary"><a class="text-white" href="{{ route('posts.show', $post->id)  }}">More++</a></button>
                            <button class="btn btn-secondary"><a class="text-white" href="{{ route('posts.edit', $post->id)  }}">Edit</a></button>
                            <form class="d-inline-block" onsubmit="return confirm('Are you sure ?')" action="{{route('posts.destroy', $post->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger text-white ">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-5 col-lg-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
@endsection

