@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new category</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form action="/dashboard/categories" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="input" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    autofocus value="{{ old('name') }}" autocomplete="off" required>
                @error('name')
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
            <button type="submit" class="btn btn-primary">Create category</button>
            <a href="/dashboard/categories" class="text-decoration-none text-black-50 ml-5">Cancel</a>
        </form>
    </div>

    <script defer>
        const name = document.getElementById("name");
        const slug = document.getElementById("slug");

        name.addEventListener("keyup", function() {
            slug.value = stringToSlug(name.value);
        });
    </script>
@endsection
