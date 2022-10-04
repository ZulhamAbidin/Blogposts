{{-- @extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {!! session('loginError') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required autofocus value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>

                <small class="d-block text-center mt-3">
                    Not registered ? <a href="/register">Register here</a>
                </small>
            </main>
        </div>
    </div>

@endsection
 --}}


@extends('layouts.main')

@section('container')
 
<div class="h-screen bg-indigo-100 flex justify-center items-center">
  <div class="lg:w-2/5 md:w-1/2 w-2/3">

      @if (session()->has('success'))
            
          <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
          {!! session('success') !!}
              <span class="font-medium">Silahkan Login</span> Berdasarkan Username dan password.
         </div>

      @endif
            @if (session()->has('loginError'))
                        
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                {!! session('loginError') !!}
                <span class="font-medium"> Username atau Password </span> Tidak sesuai silahkan coba kembali.
            </div>
     @endif

    <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="/login" method="POST">
      @csrf
      <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">LOGIN</h1>
      <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="username" >Username</label> @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="username" required autofocus value="{{ old('username') }} "/>
      </div>
     
      <div>
        <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="password" id="password" placeholder="password" required/>
      </div>
    
      <button type="submit" class="w-full mt-6 mb-3 bg-teal-500 rounded-lg px-4 py-2 text-lg text-gray-50 tracking-wide font-semibold font-sans">Login</button>
      <a href="/register" type="submit" class="w-full bg-teal-500 rounded-lg px-4 py-2 text-lg text-slate-50 text-center tracking-wide font-semibold font-sans">Register</a>
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