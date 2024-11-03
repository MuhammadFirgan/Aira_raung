<section class="bg-gray-950 py-20 antialiased dark:bg-gray-900 md:py-12 overflow-x-auto">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 overflow-x-auto">
        <!-- Heading & Filters -->
        <div class="mb-4 overflow-x-auto">
            <h1 class="title text-6xl text-white px-10 py-12 text-center">Produk Kami</h1>
            <div class="mb-4 flex gap-4 justify-center">
                @foreach ($product as $item)    
                    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full">
                            <a href="/product/1">
                                <img class="mx-auto h-full dark:hidden" src="{{ asset('storage/' . $about->image ) }}" alt="{{ $item->name }}" />
                                <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                            </a>
                        </div>
                        <a href="/product/1" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $item->name }}</a>
                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">Rp {{ $item->price }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/product/1">
                            <img class="mx-auto h-full dark:hidden" src="/horizontal.jpg" alt="" />
                            <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                        </a>
                    </div>
                    <a href="/product/1" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max</a>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$1,699</p>
                    </div>
                </div>
                
                
            </div>
          
        </div>
    </div>
    {{-- <h1 class="title text-6xl text-white px-10 py-12 text-center">Produk Kami</h1>
    <div class="flex justify-center overflow-x-auto w-full whitespace-nowrap gap-8 scroll-smooth">
        @foreach ($product as $item)    
        @endforeach
        <a href="/product/1">
            <div class="w-96 flex flex-col items-center py-10">
                <img src="{{ asset('storage/' . $item->image ?? '') }}" width="300" height="300" alt="product" />
                <div class="flex flex-col text-white gap-4">
                    <h3 class="text-2xl">{{ $item->name }}</h3>
                    <span class="text-gray-300">Rp {{ $item->price }}</span>
                </div>
            </div>
            <div className="w-52">
                <img src="/vertical.jpg" alt="cover audio" className="w-52 aspect-square" />
                <h3 className="line-clamp-2 pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus libero, atque suscipit quo error ullam consequatur magni totam excepturi impedit.</h3>
                
                
            </div>
        </a>
    </div> --}}
  </section>