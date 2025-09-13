<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    {{-- Default Title & Description --}}
    <title>@yield('title', 'Website PPM Nurul Alami')</title>
    <meta name="description" content="@yield('description', 'Website PPM Nurul Alami')">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'Website PPM Nurul Alami')" />
    <meta property="og:description" content="@yield('og_description', 'Website PPM Nurul Alami')" />
    <meta property="og:image" content="@yield('og_image', asset('assets/img/logo nurul alami.png'))" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Website PPM Nurul Alami')">
    <meta name="twitter:description" content="@yield('og_description', 'Website PPM Nurul Alami')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/img/logo nurul alami.png'))">

    {{-- Asset CSS & JS --}}
    @php
    $isProduction = app()->environment('production');
    $manifestPath = $isProduction ? '../public_html/build/manifest.json' : public_path('build/manifest.json');
    @endphp

    @if ($isProduction && file_exists($manifestPath))
        @php
        $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/app.css']['file'] }}">
        <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
    @else
        @viteReactRefresh
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    @endif

    <link rel="shortcut icon" href="{{ asset('assets/img/logo nurul alami.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        html { scroll-behavior: smooth }
    </style>
</head>

