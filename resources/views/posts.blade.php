@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-3 border-bottom pb-4 ">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-secondary text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>
                By:
                <a class="text-secondary text-decoration-none"
                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}
                </a>
                in
                <a class="text-secondary text-decoration-none"
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}
                    Category
                </a>
            </p>
            <p>{{ $post->excerpt }} ...</p>

            <a class="text-secondary text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
@endsection
