@extends('front-end.layouts.app')

@section('content')
    <!-- Login Section -->
    <section class="min-h-screen flex items-center justify-center bg-[#F5F5F5] px-4">
        <div class="w-full sm:w-2/3 md:w-1/2 lg:w-2/5 bg-white rounded-xl shadow-lg p-6">
            <!-- Logo / Judul -->
            <div class="text-center mb-8">
                <img src="{{ asset('assets/img/logo nurul alami.png') }}" alt="Logo"
                    style="max-height: 100px; width: auto;" class="mx-auto object-contain mb-4">
                <h2 class="text-3xl font-extrabold text-[#067344]">Login</h2>
                <p class="text-gray-600 mt-2">Masuk untuk melanjutkan</p>
            </div>

            <!-- Alert error -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 border border-red-300 text-red-600 text-sm rounded-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#067344] focus:border-[#067344]"
                        placeholder="Masukkan username" required>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#067344] focus:border-[#067344]"
                        placeholder="Masukkan password" required>
                </div>

                <!-- Tombol Login -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#067344] text-white py-3 rounded-xl font-semibold shadow-lg hover:bg-[#055c36] transition">
                        Masuk
                    </button>
                </div>
            </form>

        </div>
    </section>
@endsection
