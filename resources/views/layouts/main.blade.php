
{{----------------------------------------------------------LAYOUTSORIGINAL -----------------------------------------------------------------}}

{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Belajar Laravel | {{ $judul }}</title>
</head>

<body>
    
    @extends('partials.navbar')
    
  
      <div class="container mt-4">
        @yield('container')
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html> --}}


{{----------------------------------------------------------END LAYOUTSORIGINAL -----------------------------------------------------------------}}



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INFO UNM</title>
  <link href="https://cdn-icons-png.flaticon.com/128/2784/2784461.png" rel="shortcut icon">

  <link rel="stylesheet" href="css/glightbox.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/tailwind.css" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="js/wow.min.js"></script>
   <script src="js/tailwind.config.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  <script>
      // ===== wow js
      new WOW().init();
    </script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body>
    
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
                <form action="/logout" method="post" class="ml-48"> @csrf 
                  <button type="submit" class="py-5 px-4 font-inter flex">LogOut
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0,5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                  </button>
                </form>  @else
                <a href="/login" class="py-5 px-4 font-inter {{ $judul === 'Login' ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a> @endauth
            </div>


          <div class="ring-tranparent outline-transparent border-0 focus:ring-tranparent focus:outline-transparent focus:transparent md:hidden flex items-center">
                <button class="mobile-menu-button p-5">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
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

             
    

@yield('container')

<script src="js/glightbox.min.js"></script>
<script src="js/main.js"></script>

 <script>
      const  btn = document.querySelector("button.dropdownDefault1");
      const  menu = document.querySelector(".dropdown-menu1");


      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>


    <script>
      const  btnalert = document.querySelector(".mobile-menu-button");
      const  menualert = document.querySelector(".mobile-menu");


      btnalert.addEventListener("click", () => {
        menualert.classList.toggle("hidden");
      });
    </script>
    
  </body>
  </html>