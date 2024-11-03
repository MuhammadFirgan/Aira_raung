@extends('dashboard.index')
@section('content')

<section class="bg-gray-50 dark:bg-gray-900 p-4 md:ml-64 pt-20 w-full flex flex-col gap-4">
    <div class="w-full ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            
            <div class="overflow-x-auto overflow-y-auto ">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Address</th>
                            <th scope="col" class="px-4 py-3">no_wa</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4">{{ $contact[0]->address }}</td>
                            <td>{{ $contact[0]->no_wa }}</td>
                            
                            <td class="px-6 py-4">
                                {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                <button data-modal-target="contact-modal" data-modal-toggle="contact-modal" class="block bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300" type="button">
                                    Edit
                                </button>
                                @include('partials.contact_modal', compact('contact'))
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    
    <h1 class="text-2xl">Preview</h1>

    <div class="bg-white relative flex flex-col py-20 sm:flex-row" id="contact">
        <div class="px-10 py-8 w-full sm:w-1/2">
            <h1 class="title text-3xl mb-10">Kontak Kami</h1>
            <div class="flex flex-col gap-4 max-w-sm">
                <div class="grid w-full sm:w-52 lg:w-full max-w-sm items-center gap-1.5">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" placeholder="Nama..." class="border rounded p-2" />
                </div>
                <div class="grid w-full sm:w-52 lg:w-full max-w-sm items-center gap-1.5">
                    <label for="pesan">Deskripsi</label>
                    <textarea id="pesan" placeholder="Pesan anda..." class="h-40 border rounded p-2"></textarea>
                </div>
                <button class="bg-gray-950 hover:bg-gray-950/90 
        text-white px-4 py-2 rounded" id="btnKirim">Kirim</button>
            </div>
            <div class="my-12 sm:absolute sm:top-1/2 sm:left-1/2 sm:-translate-x-1/2 sm:-translate-y-56 lg:top-1/2 lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-44 bg-green-600 text-white px-6 py-4 rounded-lg w-full sm:max-w-64 lg:max-w-xs">
                <div>
                    <h3 class="text-2xl title">Alamat Kami</h3>
                    <span class="italic block my-5">{{ $contact[0]->address }}</span>
                </div>
                <div>
                    <h3 class="text-2xl title">Nomor Kami</h3>
                    <span class="italic block my-5" id="whatsappNumber">{{ $contact[0]->no_wa }}</span>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252860.65194047996!2d113.84950839889457!3d-8.004332183417235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c9326bea068b%3A0x68766a54028276d7!2sSumberwringin%2C%20Bondowoso%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1716560224567!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full sm:w-1/2 h-auto"></iframe>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
         document.getElementById('btnKirim').addEventListener('click', function() {
             let nama = document.getElementById('nama').value;
             let pesan = document.getElementById('pesan').value;
             let whatsappNumber = document.getElementById('whatsappNumber').value;
             
             let whatsappUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent("Nama: " + nama + "\nPesan: " + pesan)}`;
 
             let win = window.open(whatsappUrl, '_blank');
             win.focus()
         });
     });
 </script>
@endsection