@extends('dashboard.index')
@section('content')


<section class="g-gray-50 dark:bg-gray-900 p-4 md:ml-64 pt-20 w-full flex flex-col gap-4">
    <div class="w-full ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            
            <div class="overflow-x-auto overflow-y-auto ">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Gambar</th>
                            <th scope="col" class="px-4 py-3">Deskripsi</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="p-4">
                                <img src="{{ asset('storage/' . $about[0]->image) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                            </td>
                            <td class="px-4 py-3 line-clamp-2">{{ $about[0]->description }}</td>
                            <td class="px-6 py-4">
                                {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                <button data-modal-target="about-modal" data-modal-toggle="about-modal" class="block bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300" type="button">
                                    Edit
                                </button>
                                @include('partials.about_modal', compact('about'))
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <h1 class="text-2xl">Preview</h1>

    <div class="flex bg-white px-10 py-40 justify-between flex-col gap-8 lg:flex-row items-center relative">
        <div class="w-full sm:max-w-2xl">
            <h1 class="title text-6xl">AiraRaung</h1>
            <p class="text-sm my-5">{{ $about[0]->description }}</p>
          </div>
          <div class="relative">
            <div class="absolute -bottom-5 -left-5 w-72 h-52 sm:w-[500px] sm:h-96 sm:-bottom-10 sm:-left-10 primary-color z-10"></div>
            <img src="{{ asset('storage/' . $about[0]->image) }}" alt="About" class="relative z-50 w-72 h-52 sm:w-[500px] sm:h-96 rounded-xl" />
            <div class="absolute -top-5 -right-5 rounded-lg bg-white shadow-2xl px-8 py-4 z-50">
              <p>Kopi Bubuk Kualitas Terbaik</p>
              <div class="flex justify-center gap-3 mt-3 text-2xl text-yellow-500">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="hidden absolute bottom-0 left-0 bg-green-400 w-32 h-32 blur-[100px] rounded-full lg:block"></div>
    </div>
</section>

@endsection