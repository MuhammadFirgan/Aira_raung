<section class="bg-gray-50 dark:bg-gray-900 w-full">
  <div class="w-full ">
      <!-- Start coding here -->
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          
          <div class="overflow-x-auto overflow-y-auto h-[45vh]">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-4 py-3">Name</th>
                          <th scope="col" class="px-4 py-3">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    
                      <tr class="border-b dark:border-gray-700">
                          <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user[0]->username }}</th>
                          <td class="px-4 py-3">
                            <button data-modal-target="user-modal" data-modal-toggle="user-modal" class="block bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300" type="button">
                                Edit
                            </button>
                            @include('partials.user_modal', compact('user'))
                          </td>
                          
                      </tr>
                      
                      
                  </tbody>
              </table>
          </div>
          
      </div>
  </div>
  </section>

