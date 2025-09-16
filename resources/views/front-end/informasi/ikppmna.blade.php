@extends('front-end.layouts.app')

@section('content')
    <section class="flex items-center justify-center h-[70vh] sr-box sr-hidden">
        <div class="bg-yellow-100 dark:bg-yellow-900 p-10 rounded-xl shadow-lg text-center max-w-lg">
            <div class="text-6xl mb-4 text-[#FFBB00]">
                <i class="fas fa-hourglass-half"></i>
            </div>
            <h2 class="text-3xl font-bold mb-2 text-gray-800 dark:text-gray-100">
                Fitur Belum Tersedia
            </h2>
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                Mohon maaf, fitur <span class="font-semibold">Ikatan Keluarga Pondok Pesantren Modern Nurul Alami
                    (IKPPM-NA)</span>
                saat ini masih belum tersedia.
            </p>
            <a href="{{ route('home') }}"
                class="inline-block px-6 py-3 bg-[#067344] text-white rounded-lg hover:bg-[#055836] transition">
                Kembali ke Website
            </a>
        </div>
    </section>
@endsection
