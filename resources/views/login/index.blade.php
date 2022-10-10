@extends('layouts.main')

@section('container')
    <div class="h-screen bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">

            @if (session()->has('success'))
                <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                    role="alert">
                    {!! session('success') !!}
                    <span class="font-medium">Silahkan Login</span> Berdasarkan Username dan password.
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                    role="alert">
                    {!! session('loginError') !!}
                    <span class="font-medium"> Username atau Password </span> Tidak sesuai silahkan coba kembali.
                </div>
            @endif

            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="/login" method="POST">
                @csrf
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">LOGIN</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input
                        class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none @error('username') is-invalid @enderror"
                        type="text" name="username" id="username" aria-placeholder="username" required autofocus
                        value="{{ old('username') }} " />
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password"
                        name="password" id="password" placeholder="password" required />
                </div>

                <button type="submit"
                    class="w-full mt-6 mb-3 bg-teal-500 rounded-lg px-4 py-2 text-lg text-gray-50 tracking-wide font-semibold font-sans">Login</button>
                <a href="/register" type="submit"
                    class="w-full bg-teal-500 rounded-lg px-4 py-2 text-lg text-slate-50 text-center tracking-wide font-semibold font-sans">Register</a>
            </form>
        </div>
    </div>


    <footer id="footer">

        <div class=" bg-teal-500" data-wow-delay=".25s">
            <p class="text-slate-50 text-base p-4 text-center mb-0">
                Copyright by Zulham Abidin 2022.
            </p>
        </div>
    </footer>
@endsection
