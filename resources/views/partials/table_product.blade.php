

<section class="bg-gray-50 dark:bg-gray-900 w-full">
  <div class="w-full ">
      <!-- Start coding here -->
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          
          <div class="overflow-x-auto overflow-y-auto h-[45vh]">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-4 py-3">Nama Product</th>
                          <th scope="col" class="px-4 py-3">Harga</th>
                          
                          
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($product as $item)
                        
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->name }}</th>
                            <td class="px-4 py-3">{{ $item->price }}</td>
                            
                        </tr>
                    @endforeach
                      
                      
                  </tbody>
              </table>
          </div>
          
      </div>
  </div>
  </section>

