<form>
    <div class="flex flex-col gap-3 justify-center items-center sm:flex-row mt-5 mb-3">
        <div class="w-full">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis alamat..."/>
        </div>
        <div class="w-full">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Wa</label>
            <input id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis no wa..."/>

        </div>
    </div>
    <div class="flex justify-between">
        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Kirim</button>
        <button data-modal-target="contact-modal" data-modal-toggle="contact-modal" class="block text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button">
            Edit
          </button>
        @include('partials.contact_modal')
    </div>
</form>