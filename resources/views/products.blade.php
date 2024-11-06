<section class="bg-gray-950 py-20 antialiased dark:bg-gray-900 md:py-12 overflow-x-auto">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 overflow-x-auto">
        <!-- Heading & Filters -->
        <div class="mb-4 overflow-x-auto">
            <h1 class="title text-6xl text-white px-10 py-12 text-center">Produk Kami</h1>
            <div class="mb-4 flex gap-4 justify-center">
                @foreach ($product as $item)    
                
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="p-8 rounded-t-lg max-h-96 w-full" src="{{ asset('storage/' . $item->image) }}" alt="item image" />
                        </div>
                        <div class="px-5 pb-5">
                            <a href="/product/{{ $item->id }}">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $item->name }}</h5>
                            </a>
                            
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp {{ $item->price }}</span>
                                
                            </div>
                        </div>
                    </div>

                @endforeach
               
            </div>
          
        </div>
    </div>
    
  </section>