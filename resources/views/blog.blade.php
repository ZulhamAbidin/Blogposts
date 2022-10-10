@extends('layouts.main')

@section('container')
    <div class="max-w-md mt-4 rounded overflow-hidden shadow-lg mx-auto">


        @if ($blogs->image)
            <img class="w-full rounded-xl" src="{{ asset('storage/' . $blogs->image) }}" alt="{{ $blogs->category->name }}"
                class="w-full">
        @else
            <img src="http://source.unsplash.com/1200x400?{{ $blogs->category->name }}" alt="{{ $blogs->category->name }}"
                class="w-full mt-5">
        @endif
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $blogs->title }}</div>

            <p class="text-xs">
                By. <a href="/authors/{{ $blogs->author->username }}"
                    class="text-decoration-none">{{ $blogs->author->name }}</a> in <a
                    href="/categories/{{ $blogs->category->slug }}"
                    class="text-decoration-none">{{ $blogs->category->name }}</a> {{ $blogs->created_at->diffForHumans() }}
            </p>


            <article class="mt-4 text-gray-700 text-base text-justify">
                {!! $blogs->body !!}
            </article>

            <a class="bg-teal-500 block mt-4 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-full" href="/blogs"
                role="button">Kembali ke halaman blog</a>

        </div>

    </div>


    <footer id="footer">

        <div class="mt-20 bg-teal-500" data-wow-delay=".25s">
            <p class="text-slate-50 text-base p-4 text-center mb-0">
                Copyright by Zulham Abidin 2022.
            </p>
        </div>
    </footer>
@endsection
