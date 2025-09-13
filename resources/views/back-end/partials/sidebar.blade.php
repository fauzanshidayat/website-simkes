<!-- Sidebar -->
<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-30 w-64 bg-[#067344] text-white transform -translate-x-full md:translate-x-0 md:static md:flex md:flex-col transition-transform duration-300 ease-in-out">
    <div class="flex items-center justify-center h-20 border-b border-white/20 flex-shrink-0">
        <img alt="Logo icon with white letters AD on green background" class="w-10 h-10 mr-3 rounded" height="40"
            src="{{ asset('assets/img/logo nurul alami.png') }}" width="40" />
        <h1 class="text-2xl font-semibold tracking-wide">Nurul Alami</h1>
    </div>
    <!-- Menu khusus admin -->
    @if (auth()->user() && auth()->user()->isAdmin())
        <nav class="flex-1 px-6 py-8 space-y-2 text-lg font-medium overflow-y-auto">
            <a aria-current="page"
                class="flex items-center gap-3 py-3 px-4 rounded-lg bg-white text-[#067344] shadow-md transition-colors duration-300"
                href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"> </i>
                Dashboard
            </a>

            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('admin.berita-artikel.index') }}">
                <i class="fas fa-box-open"> </i>
                Berita Artikel
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('admin.pengumuman.index') }}">
                <i class="fas fa-chart-line"> </i>
                Pengumuman
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('admin.galeri-foto.index') }}">
                <i class="fas fa-cogs"> </i>
                Galery Foto
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('admin.video.index') }}">
                <i class="fas fa-cogs"> </i>
                Galery Video
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"> </i>
                Users
            </a>
        </nav>
    @elseif (auth()->user() && auth()->user()->isPengurus())
        <!-- Menu khusus pengurus -->
        <nav class="flex-1 px-6 py-8 space-y-2 text-lg font-medium overflow-y-auto">
            <a aria-current="page"
                class="flex items-center gap-3 py-3 px-4 rounded-lg bg-white text-[#067344] shadow-md transition-colors duration-300"
                href="{{ route('pengurus.dashboard') }}">
                <i class="fas fa-tachometer-alt"> </i>
                Dashboard
            </a>

            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('pengurus.berita-artikel.index') }}">
                <i class="fas fa-box-open"> </i>
                Berita Artikel
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('pengurus.pengumuman.index') }}">
                <i class="fas fa-chart-line"> </i>
                Pengumuman
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('pengurus.galeri-foto.index') }}">
                <i class="fas fa-cogs"> </i>
                Galery Foto
            </a>
            <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                href="{{ route('pengurus.video.index') }}">
                <i class="fas fa-cogs"> </i>
                Galery Video
            </a>

        </nav>
    @endif

    <div class="px-6 py-4 border-t border-white/20 flex-shrink-0">
        <form action="{{ route('logout') }}" method="POST" class="w-full">
            @csrf
            <button type="submit"
                class="w-full flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-white text-[#067344] font-semibold hover:bg-white/90 transition">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </button>
        </form>

    </div>
</aside>
