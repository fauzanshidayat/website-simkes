@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-4xl mx-auto bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Detail User</h2>

        <!-- Foto User -->
        <div class="w-full flex justify-center mb-6">
            @if ($user->photo)
                <img src="{{ asset('storage/' . $user->photo) }}" alt="Foto User"
                    class="w-40 h-40 object-cover rounded-full shadow-md">
            @else
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Default Foto"
                    class="w-40 h-40 object-cover rounded-full shadow-md">
            @endif
        </div>

        <!-- Detail -->
        <div class="space-y-4">
            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Username</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $user->username }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Role</h3>
                <p class="text-gray-800 dark:text-gray-100 capitalize">{{ $user->role }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Dibuat</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $user->created_at->format('d M Y H:i') }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Diupdate</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $user->updated_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('admin.users.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Kembali</a>
            <a href="{{ route('admin.users.edit', $user->id) }}"
                class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#055836]">Edit</a>
        </div>
    </section>
@endsection
