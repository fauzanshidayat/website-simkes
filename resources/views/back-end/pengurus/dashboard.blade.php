@extends('back-end.layouts.app')

@section('content')
    <!-- Selamat Datang -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            Selamat datang, {{ auth()->user()->username }} 👋
        </h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">
            Di Website PPM Nurul Alami
        </p>
    </div>

    <!-- Stats cards -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <!-- Berita & Artikel -->
        <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
            <div class="p-4 bg-white bg-opacity-20 rounded-full">
                <i class="fas fa-newspaper fa-2x"></i>
            </div>
            <div>
                <p class="text-sm uppercase font-semibold tracking-wide">Berita & Artikel</p>
                <p class="text-3xl font-bold">{{ $jumlahBerita }}</p>
            </div>
        </div>

        <!-- Pengumuman -->
        <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
            <div class="p-4 bg-white bg-opacity-20 rounded-full">
                <i class="fas fa-bullhorn fa-2x"></i>
            </div>
            <div>
                <p class="text-sm uppercase font-semibold tracking-wide">Pengumuman</p>
                <p class="text-3xl font-bold">{{ $jumlahPengumuman }}</p>
            </div>
        </div>

        <!-- Foto -->
        <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
            <div class="p-4 bg-white bg-opacity-20 rounded-full">
                <i class="fas fa-image fa-2x"></i>
            </div>
            <div>
                <p class="text-sm uppercase font-semibold tracking-wide">Foto</p>
                <p class="text-3xl font-bold">{{ $jumlahFoto }}</p>
            </div>
        </div>

        <!-- Video -->
        <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
            <div class="p-4 bg-white bg-opacity-20 rounded-full">
                <i class="fas fa-video fa-2x"></i>
            </div>
            <div>
                <p class="text-sm uppercase font-semibold tracking-wide">Video</p>
                <p class="text-3xl font-bold">{{ $jumlahVideo }}</p>
            </div>
        </div>
    </section>
@endsection
