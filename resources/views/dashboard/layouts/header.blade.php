<!-- This example requires Tailwind CSS v2.0+ -->

<header class="navbar bg-primary sticky-top flex-md-nowrap p-0">
    <a class="navbar col-md-3 text-white col-lg-2 me-0 px-3" style="text-decoration: none" href="/">Dashboard</a>

    <button class="bg-transparent navbar-toggler position-absolute d-md-none collapsed" type="button"
        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-transparent"></span>
    </button>

    <input class="form-control bg-light form-control w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-primary text-white border-0">
                    Log Out
                    <span data-feather="log-out"></span>
                </button>
            </form>
        </div>
    </div>
</header>

{{-- ------------------------------------------------------------------------------------------------ --}}



{{-- ------------------------------------------------------------------------------------------------ --}}
