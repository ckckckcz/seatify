@extends('layouts.auth')

@section('auth')
    <div class="h-screen w-screen flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 h-full w-full bg-white">
            <!-- Form Section -->
            <div class="flex items-center justify-center bg-white text-gray-900 p-8">
                <div class="max-w-md w-full">
                    <h2 class="text-3xl font-bold mb-6">Hallo Fellas 😎</h2>
                    <div class="flex gap-4 mb-6">
                        <button class="flex items-center justify-center w-full py-3 px-4 font-medium hover:bg-gray-200 cursor-pointer bg-gray-100 text-gray-700 rounded-xl">
                            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="h-5 w-5 mr-2"> Masuk Dengan Google
                        </button>
                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0">
                    
                    <form class="space-y-4" method="POST" action="/register">
                        @csrf
                        @foreach (['email' => 'Email', 'password' => 'Kata Sandi'] as $field => $label)
                            <div>
                                <label for="{{ $field }}" class="block text-sm font-medium @error($field) text-red-700 @enderror">
                                    {{ $label }}
                                </label>
                                <input type="{{ $field === 'password' ? 'password' : 'email' }}" id="{{ $field }}" name="{{ $field }}"
                                    class="w-full mt-1 p-2 bg-gray-50 border border-gray-200 rounded-lg @error($field) border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror"
                                    placeholder="{{ $field === 'password' ? '******' : 'Enter your email' }}" value="{{ old($field) }}" required />
                                @error($field)
                                    <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach
                        <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white py-2.5 rounded-xl font-medium cursor-pointer">Daftar</button>
                    </form>
                    
                    <p class="mt-4 text-center text-sm font-medium">Sudah Punya Akun? <a href="/login" class="text-blue-700 font-medium">Masuk</a></p>
                </div>
            </div>
            @include('components.widget.sideAuth')
        </div>
    </div>
@endsection