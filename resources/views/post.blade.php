@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-secondary text-decoration-none">{{ $post->author->name }}</a> in <a class="text-secondary" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                
                @if ($post->image)
                    <img style="max-height:350px; overflow:hidden" src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a class="btn btn-dark d-block mt-3" href="/blog" role="button">Back</a>
            </div>
        </div>
    </div>
@endsection
