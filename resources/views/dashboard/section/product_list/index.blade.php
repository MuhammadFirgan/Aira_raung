@extends('dashboard.index')
@section('content')


<section class="p-4 md:ml-64 pt-20 w-full flex flex-col gap-4">

    <a href="/dashboard/pages/product/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 max-w-52 text-center">
        Tambah Product Baru
    </a>
    
    <div class="w-full flex justify-center flex-wrap gap-4">
        @foreach ($products as $product)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="">
                    <img class="p-8 rounded-t-lg aspect-square max-h-96 w-full" src="{{ asset('storage/' . $product->image) }}" alt="product image" />
                </div>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h5>
                    </a>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp {{ $product->price }}</span>
                        <div class="flex">
                            <form action="/dashboard/pages/product/{{ $product->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="block bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300" type="submit" onclick="return confirm('anda yakin ingin menghapus ini?')">
                                    Delete
                                </button>
                            </form>
                            <button data-modal-target="product-modal" data-modal-toggle="product-modal" class="block bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300" type="button">
                                Edit
                            </button>
                        </div>
                        @include('partials.product_modal', compact('product'))
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</section>

@endsection