@extends('dashboard.index')
@section('content')


<main class="p-4 md:ml-64 pt-20 w-full">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div
            class="w-full"
        >
            <h1 class="pb-3 text-2xl">Riwayat Transaksi</h1>
            @include('partials.table_transaction')
        </div>
        <div class="grid gap-2">
            <div
              class="rounded-lg min-h-full"
            >
                <h1 class="pb-3 text-2xl">List Product</h1>
                @include('partials.table_product')
            </div>
            <div
              class="rounded-lg min-h-full "
            >
                <h1 class="pb-3 text-2xl">Pengurus</h1>
                @include('partials.table_employee')
            </div>
        </div>
      
    </div>
    
    </div>
  </main>


    
@endsection