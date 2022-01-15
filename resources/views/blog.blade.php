@extends('layouts.main')

@section('container')

<article>
    <h2>{{$blogs->title}}</h2>
    <p>By. <a href="#" class="text-decoration-none">{{ $blog->user->name }}</a> in <a href="/categories/{{ $blogs->category->slug }}">{{ $blogs->category->name }}</a></p>
    {{-- <h5>{{$blogs->author}}</h5> --}}
    {!! $blogs->body !!}
</article>

<a href="/blogs">Kembali ke halaman blog</a>

@endsection