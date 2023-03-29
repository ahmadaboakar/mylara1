@extends('posts.layouts')

@section('content')
    <h1>Add New Post</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
