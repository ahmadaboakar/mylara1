@extends('posts.layouts')

@section('content')
    <h1>Posts</h1>
    <hr>
    <div style="background-color: #fff4db; padding: 10px" class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td class="col-md-6">{{ $post->description }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary"><i class='bx bx-show-alt'></i></a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning"><i class='bx bx-edit-alt'></i></a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this post?')"><i class='bx bx-trash'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
