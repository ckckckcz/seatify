@extends('layouts.admin')

@section('admin')
    <div class="bg-gray-100 p-5 rounded-xl">
        @if(session('success'))
            <div class="bg-blue-500 text-white p-3 rounded-lg mb-3">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-500 text-white p-3 rounded-lg mb-3">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('konser.update', $konser->id) }}" method="POST" enctype="multipart/form-data" class="w-full mx-auto">
            @csrf
            @method('PUT')

            <div class="lg:grid lg:grid-cols-2 gap-5">
                <!-- Kategori -->
                <div class="mb-5">
                    <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori Konser</label>
                    <select name="kategori_id" id="kategori" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}" {{ $konser->kategori_id == $item->id ? 'selected' : '' }}>
                                {{ $item->nama }}
                            </option>
                        @endforeach
                    </select>                
                </div>

                <!-- Ketersediaan Tiket -->
                <div class="mb-5">
                    <label for="ketersediaan_tiket" class="block mb-2 text-sm font-medium text-gray-900">Ketersediaan Tiket</label>
                    <select name="ketersediaan_tiket" id="ketersediaan_tiket" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="tersedia" {{ $konser->ketersediaan_tiket == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="tidak tersedia" {{ $konser->ketersediaan_tiket == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div>
            </div>

            <!-- Judul Konser -->
            <div class="mb-5">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Konser</label>
                <input type="text" name="judul" id="judul" value="{{ $konser->judul }}" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Judul Konser" required />
            </div>

            <!-- Deskripsi -->
            <div class="mb-5">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Deskripsi Konser" required>{{ $konser->deskripsi }}</textarea>
            </div>

            <!-- Upload Gambar -->
            <div class="mb-5">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Upload Poster Konser</label>
                <input type="file" name="gambar" id="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                @if($konser->gambar)
                    <img id="preview" src="{{ asset($konser->gambar) }}" class="mt-3 w-40 rounded-lg" />
                @else
                    <img id="preview" class="mt-3 w-40 rounded-lg hidden" />
                @endif
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Perbarui</button>
        </form>  
    </div>

    <!-- Preview Gambar -->
    <script>
        document.getElementById('gambar').addEventListener('change', function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let img = document.getElementById('preview');
                img.src = reader.result;
                img.classList.remove('hidden');
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@endsection
