@extends('layouts.main')

@section('container')
    <div class="h-screen bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="/register" method="POST">
                @csrf
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Formregister</h1>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="name">Name</label>
                    <input
                        class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none  @error('name') is-invalid @enderror"
                        id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
                    <input type="text" name="username"
                        class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none @error('username') is-invalid @enderror"
                        id="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email address</label>
                    <input type="email" name="email"
                        class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none @error('email') is-invalid @enderror"
                        id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                    <input type="password" name="password"
                        class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none @error('password') is-invalid @enderror"
                        id="password" placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full mt-6 bg-teal-500 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>

            </form>
        </div>
    </div>
@endsection
