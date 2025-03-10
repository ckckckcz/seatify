@extends('layouts.admin')
@section('admin')
    <div class="bg-gray-100 p-5 rounded-xl">
        <form class="w-full mx-auto">
            <div class="lg:grid lg:grid-cols-2 gap-5">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload Poster Konser</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="user_avatar_help" id="user_avatar" type="file">            
                </div>        
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Nama Band</label>
                    <input type="text" id="text" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Band" required />
                </div>
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis Deskripsi Band...."></textarea>            
            </div>
            <hr class="h-px bg-gray-200 border-0 mb-5">
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Anggota Band</label>
                <select id="dropdown" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="" disabled selected>Pilih opsi</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>                 
            </div>
            @include('components.widget.admin.form.formArtisBand')
            <hr class="h-px bg-gray-200 border-0 mb-5">
            <div class="lg:grid lg:grid-cols-2 gap-5">
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Instagram</label>
                    <input type="text" id="text" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Social Media" required />
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Spotify</label>
                    <input type="text" id="text" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Social Media" required />
                </div>
            </div>
            <div class="flex flex-row space-x-2">
                <a href="/admin/bio-artis">
                    <button type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center cursor-pointer">Kembali</button>
                </a>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center cursor-pointer">Buat Data</button>
            </div>
        </form>  
    </div>
@endsection
