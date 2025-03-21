@extends('layouts.app')

@section('content')
<section class="py-8 px-4 mx-auto max-w-screen-xl text-left lg:py-16">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
        Rasakan Euforia Konser Tak Terlupakan
    </h1>
    <p class="mb-8 text-lg font-bold tracking-tight leading-none text-gray-300 md:text-3xl lg:text-2xl">
        Pesan tiket konser favoritmu dengan mudah dan cepat. Jadilah bagian dari momen spektakuler yang penuh semangat dan kenangan indah!
    </p>
    <button class="text-gray-900 bg-white cursor-pointer font-medium rounded-full text-md px-6 py-4 inline-flex items-center">
        Temukan Konser
        <svg class="w-3.5 h-3.5 ms-2 mt-[2px] rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10" aria-hidden="true">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </button>
</section>

@include('components.ui.header')
@include('components.widget.promo')
@include('components.ui.testimoni')
@endsection
