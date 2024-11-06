

<section class="bg-gray-50 dark:bg-gray-900 w-full">
  <div class="w-full ">
      <!-- Start coding here -->
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          
          <div class="overflow-x-auto overflow-y-auto h-screen">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-4 py-3">Status</th>
                          <th scope="col" class="px-4 py-3">Customer Name</th>
                          <th scope="col" class="px-4 py-3">Product Name</th>
                          <th scope="col" class="px-4 py-3">Amount</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($transactions as $item)    
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if ($item->status == 'paid')  
                                    <span class="bg-green-800 block text-center text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                                @elseif($item->status == 'failed')
                                    <span class="bg-red-800 block text-center text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                                @else
                                    <span class="bg-gray-800 block text-white px-2 py-1 text-xs rounded-lg">{{ $item->status }}</span>
                                @endif
                            </th>
                            <td class="px-4 py-3">{{ $item->cust_name }}</td>
                            <td class="px-4 py-3">{{ $item->product_name }}</td>
                            
                            <td class="px-4 py-3">Rp. {{ $item->price }}</td>
                            
                        </tr>
                    @endforeach
                      
                      
                  </tbody>
              </table>
          </div>
          
      </div>
  </div>
  </section>


   