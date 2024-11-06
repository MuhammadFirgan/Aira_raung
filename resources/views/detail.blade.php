@extends('layout.index')
@section('container')

<div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 lg:flex lg:justify-center lg:items-center lg:h-screen">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16 place-items-center">
      <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
        <img class="w-full aspect-square dark:hidden" src="{{ asset('storage/' . $data->image) }}" alt="" />
        
      </div>

      <div class="mt-6 sm:mt-8 lg:mt-0 ">
        <h1
          class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
        >
          {{ $data->name }}
        </h1>
        <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
          <p
            class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white"
          >
            Rp {{ $data->price }}
          </p>

          <div class="flex items-center gap-2 mt-2 sm:mt-0">
            <div class="flex items-center gap-1">
              <svg
                class="w-4 h-4 text-yellow-300"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                />
              </svg>
              <svg
                class="w-4 h-4 text-yellow-300"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                />
              </svg>
              <svg
                class="w-4 h-4 text-yellow-300"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                />
              </svg>
              <svg
                class="w-4 h-4 text-yellow-300"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                />
              </svg>
              <svg
                class="w-4 h-4 text-yellow-300"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                />
              </svg>
            </div>
            <p
              class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400"
            >
              (5.0)
            </p>
            
          </div>
        </div>

        <button class="w-full lg:w-3/4 bg-gray-950 hover:bg-gray-950/90 
    text-white px-4 py-2 rounded mt-6" id="orderBtn">Beli Sekarang</button>

        <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

        <p class="mb-6 text-gray-500 dark:text-gray-400 text-sm">
          {{ $data->detail_product }}
        </p>

        
      </div>
    </div>
  </div>


<div id="orderModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg mx-4 md:mx-8 lg:mx-auto">
        <h2 class="text-2xl mb-4">Confirm Your Order</h2>
        <form action="/order" method="POST">
            @csrf
            <div class="grid gap-4">
                <input type="hidden" name="product_name" value="{{ $data->name ?? '' }}">
                <input type="hidden" name="price" value="{{ $data->price ?? '' }}">
                
                <div>
                    <label for="nama" class="font-semibold">Nama</label>
                    <input type="text" id="nama" name="cust_name" placeholder="Nama..." class="border rounded p-2 w-full" />
                </div>

                <div>
                    <label for="address" class="font-semibold">Alamat</label>
                    <input type="text" id="address" name="address" placeholder="Alamat..." class="border rounded p-2 w-full" />
                </div>

                <div class="mb-4">
                    <h2 class="mb-2 font-semibold">Berat:</h2>
                    <div class="flex flex-wrap gap-2">
                        <div>
                            <label for="weight_100" class="weight border-2 border-gray-950 rounded-lg px-4 py-2 cursor-pointer block text-center">100 gram</label>
                            <input type="radio" name="weights" id="weight_100" value="100" class="hidden">
                        </div>
                        <div>
                            <label for="weight_150" class="weight border-2 border-gray-950 rounded-lg px-4 py-2 cursor-pointer block text-center">150 gram</label>
                            <input type="radio" name="weights" id="weight_150" value="150" class="hidden">
                        </div>
                        <div>
                            <label for="weight_200" class="weight border-2 border-gray-950 rounded-lg px-4 py-2 cursor-pointer block text-center">200 gram</label>
                            <input type="radio" name="weights" id="weight_200" value="200" class="hidden">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <h2 class="font-semibold">Jumlah barang</h2>
                    <div class="flex items-center gap-2 mt-4">
                        <button id="decrementBtn" class="bg-gray-950 px-3 py-1 text-white cursor-pointer" type="button">-</button>
                        <input type="text" id="quantityInput" class="w-12 px-2 border-2 text-center" name="quantity" value="1" readonly>
                        <button id="incrementBtn" class="bg-gray-950 px-3 py-1 text-white cursor-pointer" type="button">+</button>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button id="cancelBtn" class="mr-4 px-4 py-2 bg-gray-500 text-white rounded" type="button">Cancel</button>
                    <button id="confirmBtn" type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const weights = document.querySelectorAll('.weight');
    const orderBtn = document.getElementById('orderBtn');
    const orderModal = document.getElementById('orderModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const confirmBtn = document.getElementById('confirmBtn');
    const decrementBtn = document.getElementById('decrementBtn');
    const incrementBtn = document.getElementById('incrementBtn');
    const quantityInput = document.getElementById('quantityInput');
    
    
    orderBtn.addEventListener('click', function (event) {
        event.preventDefault();
        orderModal.classList.remove('hidden');
    });

   
    cancelBtn.addEventListener('click', function () {
        orderModal.classList.add('hidden');
    });


    weights.forEach(weight => {
        weight.addEventListener('click', () => {
            const checkbox = document.getElementById(`weight_${weight.innerText.split(' ')[0]}`);
            weights.forEach(w => {
                if (w !== weight) {
                    const cb = document.getElementById(`weight_${w.innerText.split(' ')[0]}`);
                    cb.checked = false;
                    w.classList.remove('border-green-600', 'text-green-600');
                }
            });
            checkbox.checked = !checkbox.checked;
            weight.classList.toggle('border-green-600');
            weight.classList.toggle('text-green-600');
        });
    });

    confirmBtn.addEventListener('click', function () {
        const formData = new FormData(orderDetailsForm);
        const productName = formData.get('product_name');
        const price = formData.get('price');
        const customerName = formData.get('cust_name');
        const address = formData.get('address');
        const weight = formData.get('weights');
        const quantity = formData.get('quantity');
        const whatsappNumber = {{ $no_wa }}
    

        const message = `Nama Product : ${productName} \nNama Pembeli : ${customerName} \nAlamat : ${address} Berat Barang : ${weights} \nJumlah Barang : ${quantity}`;

        // const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${message}`;
        let whatsappUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    });


    decrementBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    incrementBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
</script>

@endsection
