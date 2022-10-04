{{-- @include('dashboard.data.layouts.header')
@extends('dashboard.data.layouts.main')
@section('container')

<div class="flex mt-[55px]">

  <div class="hidden lg:flex bg-sky-500">
    <aside class="md:w-sm md:h-screen lg:w-56 bg-sky-500 " aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-sky-500 fixed lg:w-56 pt-10 text-slate-50">

            <ul class="space-y-2">
              <li class="group">
                  <a href="/Dashboard" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-slate-50 hover:text-sky-500">
                    <svg class=" w-8 h-8 text-salte-50 group-hover:text-sky-500 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Dashboard</span>
                  </a>
              </li>
            
                <li class="group">
                  <a href="/Dashboard/data" class="aktif flex items-center p-2 text-base font-normal rounded-full text-sky-500 bg-slate-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-sky-500 group-hover:text-sky-500 transition duration-75" viewBox="0 0 20 20" fill="currentColor"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap"> Data Mahasiswa</span>
                </a>
                </li>

                <li class="group">
                  <a href="/Dashboard/jadwal" class="flex items-center p-2 text-base font-normal rounded-full hover:text-sky-500 hover:bg-slate-50">
                    <svg class="w-8 h-8 text-slate-50 group-hover:text-sky-500 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Jadwal Mahasiswa</span>
                    </a>
                  </li>

                  <li class="group">
                      <form action="/logout" method="post" class="flex  hover:text-sky-500 hover:bg-slate-50 p-2 rounded-full">
                        @csrf
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <button class="-ml-4" style="width: 100px"  type="submit">Logout</button>
                    </form>
                  </li>

            </ul>
        </div>
     </aside>
   </div>

    <div class="px-5 py-5 text-justify w-full mt-4">

            @if (Session::has('success'))
              <div class="bg-sky-500 text-slate-50 rounded-xl p-4 mb-8" role="alert">
                <strong>{{ Session::get('success') }}</strong> 
              </div>
            @endif

          <div class="py-10 rounded-3xl bg-sky-500">
            <div class="container mx-auto px-6">
              <h2 class="text-4xl font-bold mb-2 text-white text-center">
              DATA PEKERJA
              </h2>
              <h3 class="text-1xl mb-8 text-slate-50 text-center">
             Selamat Datang, {{ auth()->user()->name }}
              </h3>
              <a href="{{ url('Dashboard/data/create') }}" class="ml-[380px] bg-white font-bold rounded-full py-2 px-8 shadow-lg uppercase tracking-wider">
                Tambah Data
              </a>
            </div>
          </div>

          <div class="overflow-x-auto shadow-md sm:rounded-lg mt-10">

              <table class="w-full text-sm text-left text-gray-500">
                  <thead class="text-xs text-gray-900 uppercase bg-gray-300">
                      <tr>
                          <th scope="col" class="py-3 px-6">
                              Nama
                          </th>
                          <th scope="col" class="py-3 px-6">
                              alamat
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Tanggal
                          </th>
                          <th scope="col" class="py-3 px-6">
                              jenis kelamin
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Pendidikan Terakhir
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Jurusan
                          </th>
                          <th scope="col" class="py-2 pl-0">
                          Action
                          </th>
                      
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($datamhs as $key=>$value) 
                      <tr class="border-b  odd:bg-white even:bg-gray-50 group">

                          <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap group-hover:bg-gray-300 group-hover:text-gray-900">
                              {{ $value->nama_lengkap }}
                          </th>

                          <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap group-hover:bg-gray-300 group-hover:text-gray-900">
                              {{ $value->alamat_domisili }}
                          </td>

                          <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap group-hover:bg-gray-300 group-hover:text-gray-900">
                              {{ $value->hari }}
                          </td>

                          <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap group-hover:bg-gray-300 group-hover:text-gray-900">
                              {{ $value->jenis_kelamin }}
                          </td>

                          <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap group-hover:bg-gray-300 group-hover:text-gray-900">
                              {{ $value->pendidikan_terakhir }}
                          </td>

                          <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap group-hover:bg-gray-300 group-hover:text-gray-900">
                              {{ $value->jurusan }}
                          </td>

                          <td class=" text-right flex  group-hover:bg-gray-300 group-hover:text-gray-900">
                                <form action="{{ url('Dashboard/data/'.$value->id) }}" method="POST">
                                    @csrf
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button class="bg-slate-50 mt-3 group-hover:bg-pink-500 group-hover:text-slate-50 mx-4 font-bold rounded-full py-2 px-8 uppercase tracking-wide" type="submit">  DELETE </button>
                                  </form>
                                
                                <a class="bg-white my-2.5  group-hover:bg-yellow-400 group-hover:text-slate-50 mx-4 font-bold rounded-full h-10 pt-2.5 px-8 uppercase tracking-wide" href="{{ url('Dashboard/data/'.$value->id.'/edit') }}">UPDATE</a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>

    </div>

</div>


@endsection --}}