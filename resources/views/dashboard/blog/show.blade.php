{{-- @extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="my-5">{{ $blog->title }}</h2>

                <a href="/dashboard/blogs/" class="btn btn-info"><span data-feather="arrow-left"></span> Back</a>
                <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>

                @if ($blog->image)

                <img src="{{ asset('storage/' . $blog->image) }}"
                    alt="{{ $blog->category->name }}" class="img-fluid mt-5">
                    
                @else

                <img src="http://source.unsplash.com/1200x400?{{ $blog->category->name }}"
                    alt="{{ $blog->category->name }}" class="img-fluid mt-5">
                
                @endif

                <article class="my-5">
                    {!! $blog->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection --}}


{{-- @extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My blog</h1>
    </div>

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/blogs/create" class="btn btn-primary mb-3">Create new blog</a>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>
                            <a href="/dashboard/blogs/{{ $blog->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}


<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn-icons-png.flaticon.com/128/2784/2784461.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet">
    <title> Dashboard </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="py-5 bg-teal-500">
    <div class="flex mt-[4.7rem] md:mt-0">
        <nav class="side-nav bg-teal-500">
            <a href="/" class="intro-x flex items-center pl-5 pt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-50" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                </svg>
                <span class="hidden xl:block text-white text-lg ml-3">
                    INFO UNM
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>

                <li>
                    <a href="/" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Halaman Utama
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="inbox" data-lucide="inbox"
                                class="lucide lucide-inbox">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                <path
                                    d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z">
                                </path>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Dashboard
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/blogs" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Postingan
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/blogs/create" class="side-menu side-menu--active">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Lihat Detail Postingan
                        </div>
                    </a>
                </li>
                </li>


            </ul>
        </nav>

        <div class="content">
            <div class="top-bar">

                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active font-semibold" aria-current="page">Lihat Detail Postingan</li>
                    </ol>
                </nav>

                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent"
                            placeholder="Search...">
                    </div>
                </div>

                <div class="intro-x dropdown w-8 h-8 mr-24 mb-2">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm pl-5  py-2.5 mr- mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-28 h-9 flex text-xs">Log
                            Out
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 ml-1 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>

            </div>

            <div class="grid grid-cols-12 gap-2">

                <div
                    class="col-span-12 lg:col-span-10 2xl:col-span-10 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-190">


                    <div class="intro-y inbox box mt-5">
                        <div class="intro-y">
                            <div
                                class="transition delay-150 duration-300 ease-in-out rounded-lg drop-shadow-2x inline-block sm:block bg-slate-50 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex px-5 py-3 text-slate-600">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <h2 class="my-5 text-center font-bold text-2xl">{{ $blog->title }}
                                                </h2>

                                                <div class="flex gap-3">

                                                    <a href="/dashboard/blogs/" class="btn btn-primary h-10">
                                                        Back</a>
                                                    <a href="/dashboard/blogs/{{ $blog->slug }}/edit"
                                                        class="btn btn-warning h-10">
                                                        Edit</a>

                                                    <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Are you sure ?')"><span
                                                                data-feather="trash-2"></span> Delete</button>
                                                    </form>
                                                </div>


                                                @if ($blog->image)
                                                    <img src="{{ asset('storage/' . $blog->image) }}"
                                                        alt="{{ $blog->category->name }}" class="img-fluid mt-5 w-sm">
                                                @else
                                                    <img src="http://source.unsplash.com/1200x400?{{ $blog->category->name }}"
                                                        alt="{{ $blog->category->name }}" class="img-fluid mt-5">
                                                @endif

                                                <article class="my-5">
                                                    {!! $blog->body !!}
                                                </article>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

        </div>

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&amp;libraries=places">
        </script>

</body>

</html>
