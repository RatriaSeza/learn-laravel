@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By: <a href="/authors/{{ $post->author->username }}" class="text-secondary text-decoration-none">{{ $post->author->name }}</a> in <a class="text-secondary" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    </article>
    
    <br>
    <a class="btn btn-dark" href="/blog" role="button">Back</a>
@endsection
