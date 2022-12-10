{{-- @extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new blog</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form action="/dashboard/blogs" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="input" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    autofocus value="{{ old('title') }}" autocomplete="off" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="input" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}" required autocomplete="off">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

                <div class="mb-3">
                    <label for="image" class="form-label" >Post Image</label>
                    <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                     onchange="previewImage()" >
                     @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required
                    value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create blog</button>
            <a href="/dashboard/blogs" class="text-decoration-none text-black-50 ml-5">Cancel</a>
        </form>
    </div>

    <script defer>
        const title = document.getElementById("title");
        const slug = document.getElementById("slug");

        title.addEventListener("keyup", function() {
            slug.value = stringToSlug(title.value);
        });

        document.addEventListener("trix-file-accept", function(e) {
            e.preventDefault();
        });

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview =document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection --}}



<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn-icons-png.flaticon.com/128/2784/2784461.png" rel="shortcut icon">



    <link href="/css/style.css" rel="stylesheet">
    <title> Dashboard </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/css/tailwind.config.js"></script>
    <link href="/js/tailwind.config.js" rel="">

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        button.trix-button.trix-button--icon.trix-button--icon-attach {
            display: none;
        }
    </style>

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
                    <a href="/dashboard/blogs/create" class="side-menu side-menu--active ">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Buat Postingan
                        </div>
                    </a>
                </li>

            </ul>
        </nav>

        <div class="content">
            <div class="top-bar">

                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active font-semibold" aria-current="page">Buat Postingan Baru</li>
                    </ol>
                </nav>

                <div class="intro-x relative mr-4 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent"
                            placeholder="Search...">
                    </div>
                </div>

                <div class="intro-x dropdown w-8 h-8 mr-24 mb-2">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="text-white hover:bg-teal-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm pl-5  py-2.5 mr- mb-1 dark:bg-teal-500 dark:hover:bg-teal-500 focus:outline-none dark:focus:ring-teal-500 w-28 h-9 flex text-xs">Log
                            Out
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 ml-1 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>


            </div>


            <form action="/dashboard/blogs" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 grid grid-cols-2 mt-12">
                    <label for="title" class="col-span-2">Judul</label>
                    <input type="input"
                        class="border-2 mt-2 border-slate-300 outline-slate-400 px-4 rounded-lg col-span-2 h-8 @error('title') is-invalid @enderror id="title
                        name="title" autofocus value="{{ old('title') }}" autocomplete="off" required>

                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3 grid grid-cols-2 mt-4">
                    <label for="slug" class="col-span-2">Judul Alternatif</label>
                    <input type="input"
                        class="border-2 mt-2 border-slate-300 outline-slate-400 px-4 rounded-lg col-span-2 h-8 @error('slug') is-invalid @enderror"
                        id="slug" name="slug" value="{{ old('slug') }}" required autocomplete="off">

                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Lokasi</label>
                    <select name="category_id" id="category_id"
                        class="form-select @error('category_id') is-invalid @enderror">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                    <input
                        class="border-2 border-slate-300 p-2 w-full  focus:outline-slate-300 outline-slate-400 px-4 rounded-lg  @error('image') is-invalid @enderror"
                        type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror"
                        required value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="p-2 bg-teal-500 text-slate-50 px-4 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Create
                    blog</button>
                <a href="/dashboard/blogs"
                    class="p-[9px] bg-teal-500 text-slate-50 px-10 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-240  duration-300">Cancel</a>
            </form>




        </div>
    </div>


    <script defer>
        const title = document.getElementById("title");
        const slug = document.getElementById("slug");

        title.addEventListener("keyup", function() {
            slug.value = stringToSlug(title.value);
        });

        document.addEventListener("trix-file-accept", function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="/js/dashboard.js"></script>

    <script src="/js/script.js"></script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&amp;libraries=places">
    </script>

</body>

</html>
