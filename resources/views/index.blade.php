@extends('posts.layouts')

@section('content')
<div class="container-fluid p-0">
  <section class="hero-section bg-primary text-white py-5">
    <div class="hero-text text-center">
      <h1>Home 🏠</h1>
      <p>Welcome to my Laravel application!</p>
      <a href="{{ route('posts.index') }}" class="btn btn-lg btn-light mt-3">Show all posts</a>
    </div>
  </section>
</div>
@endsection

