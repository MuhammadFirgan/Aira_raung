@extends('dashboard.index')
@section('content')


<section class="bg-gray-50 dark:bg-gray-900 p-4 md:ml-64 pt-20 w-full flex flex-col gap-4">
    <div class="w-full ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            
            <div class="overflow-x-auto overflow-y-auto ">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Gambar</th>
                            <th scope="col" class="px-4 py-3">Tagline</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="p-4">
                                <img src="{{ asset('storage/' . $home[0]->image) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                            </td>
                            <td class="px-4 py-3 line-clamp-2">{{ $home[0]->tagline }}</td>
                            <td class="px-6 py-4">
                                {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                <button data-modal-target="home-modal" data-modal-toggle="home-modal" class="block bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300" type="button">
                                    Edit
                                </button>
                                @include('partials.home_modal', compact('home'))
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    
    <h1 class="text-2xl">Preview</h1>
    
    <div class="relative w-full bg-gray-950 pb-16 text-white">
        <div class="hidden bg-green-600 w-16 h-16 rounded-full sm:block absolute top-0 right-0 blur-3xl"></div>
        <div class="hidden absolute top-20 left-0 bg-green-600 w-60 h-60 blur-[100px] rounded-full sm:block lg:translate-x-60"></div>
        <div class="absolute bottom-0 right-0 bg-green-600 w-60 h-60 blur-[100px] rounded-full lg:-translate-x-60"></div>
        <div class="relative z-50 flex flex-col items-center gap-7 px-10">
          <h1 class="text-2xl sm:text-5xl title text-center max-w-3xl mx-auto mt-9">{{ $home[0]->tagline }}</h1>
          <a href="" class="bg-green-600 text-white px-8 py-2 rounded-lg">Contact</a>
            {{-- @include('partials.video') --}}
            <div class="lg:w-1/2 bg-blue-500 rounded-xl overflow-hidden">
              <img src="{{ asset('storage/' . $home[0]->image) }}" class="min-w-full lg:h-96 object-cover sm:w-[500px]" alt="image">
            </div>
        </div>
    </div>
</section>

@endsection