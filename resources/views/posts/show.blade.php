@extends('posts.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card my-5">
                    <div class="card-body">
                        <h1 class="card-title">{{ $post->title }}</h1>
                        <hr>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="my-3">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
