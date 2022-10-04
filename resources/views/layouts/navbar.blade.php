  <nav class="bg-teal-500 text-white pb-0 mb-0">
      <div class="max-w-7xl mx-auto">
          <div class="flex justify-between md:grid md:grid-cols-5">

              <div class="md:col-span-2 pt-5">
                  <a href="/dashboard/blogs" class="font-bold pt-8 p-4 md:pl-2">UNM INFO</a>
              </div>

              <div class="hidden md:text-sm lg:text-base md:col-span-3 md:flex md:justify-start">
                  <a href="/" class="py-5 px-4 font-inter">Home</a>
                  <a href="/blogs" class="py-5 px-4 font-inter">BlogPost</a>
                  <a href="/about" class="py-5 px-4 font-inter">About</a>
                  <a href="/about" class="py-5 px-4 font-inter">Contact</a> @auth
                      <a class="py-5 px-4 font-inter" href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
                      <form action="/logout" method="post" class="ml-40"> @csrf
                          <button type="submit" class="py-5 px-4 font-inter flex">Log Out
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0,5 ml-2" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                              </svg>
                          </button>
                      </form>
                  @else
                      <a href="/login" class="py-5 px-4 font-inter {{ $judul === 'Login' ? 'active' : '' }}"
                      class="bi bi-box-arrow-in-right">Login</a> @endauth
              </div>
              <div
                  class="ring-tranparent outline-transparent border-0 focus:ring-tranparent focus:outline-transparent focus:transparent md:hidden flex items-center">
                  <button class="mobile-menu-button p-5">
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd" />
                      </svg>
                  </button>
              </div>

          </div>
      </div>


      <div class="mobile-menu hidden grid grid-cols-1 pb-4">
          <a href="/" class="py-2 px-3 font-inter ">Home</a>
          <a href="/blogs" class="py-2 px-3 font-inter ">BlogPost</a>
          <a href="https://zulhamabidin.github.io/" class="py-2 px-3 font-inter ">About</a>
          <a href="https://zulhamabidin.github.io/" class="py-2 px-3 font-inter ">Contact</a>
      </div>

  </nav>
