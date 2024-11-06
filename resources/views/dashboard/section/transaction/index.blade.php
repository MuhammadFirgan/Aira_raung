@extends('dashboard.index')
@section('content')

<section class=" p-4 md:ml-64 pt-20 w-full flex flex-col gap-4">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">Status</th>
                    <th scope="col" class="px-4 py-3">Custommer Name</th>
                    <th scope="col" class="px-4 py-3">Address</th>
                    <th scope="col" class="px-4 py-3">Product Name</th>
                    <th scope="col" class="px-4 py-3">Weight</th>
                    <th scope="col" class="px-4 py-3">Price</th>
                    <th scope="col" class="px-4 py-3">Action</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)    
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-3 text-center
                        ">
                            @if ($item->status == 'paid')  
                            <span class="bg-green-800 block text-center text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                            @elseif($item->status == 'failed')
                                <span class="bg-red-800 block text-center text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                            @else
                                <span class="bg-gray-800 block text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $item->cust_name }}</td>
                        <td class="py-3 px-4">{{ $item->address }}</td>
                        <td class="py-3 px-4">{{ $item->product_name }}</td>
                        <td class="py-3 px-4">{{ $item->weights }}</td>
                        <td class="py-3 px-4">Rp {{ $item->price }}</td>
                        <td class="px-6 py-4 flex">
                            <form action="/dashboard/transactions-success/{{ $item->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="block bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300" >
                                    paid
                                </button>
                            </form>
                            <form action="/dashboard/transactions/{{ $item->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="block bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300" >
                                    failed
                                </button>
                            </form>
                            {{-- @include('partials.home_modal', compact('home')) --}}
                        </td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
</section>

@endsection