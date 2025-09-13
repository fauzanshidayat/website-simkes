<!DOCTYPE html>
<html lang="en">

@include('back-end.partials.header')

<body class="bg-[#F5F5F5] min-h-screen flex flex-col">
    <div id="app" class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar -->
        @include('back-end.partials.sidebar')
        <!-- Overlay for mobile when sidebar is open -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>
        <!-- Main content -->
        <main class="flex-1 bg-[#F5F5F5] p-6 md:p-10 overflow-y-auto min-h-screen">
            @include('back-end.partials.topbar')

            @yield('content')

        </main>


    </div>
    @include('back-end.partials.script')
</body>

</html>
