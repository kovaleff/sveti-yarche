<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Свети Ярче!')</title>
    <meta name="description" content="@yield('meta_description', 'Энергоцелительство и эзотерические практики с Миланой Соболевской. Индивидуальные сессии, групповые медитации, целительство и духовное наставничество.')">
    <meta name="keywords" content="@yield('meta_keywords', 'энергоцелительство, эзотерика, медитации, целительство, духовное наставничество, Милана Соболевская, Свети Ярче')">
    
    <!-- Open Graph -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('og_title', 'Свети Ярче | Энергоцелитель Милана Соболевская')">
    <meta property="og:description" content="@yield('og_description', 'Энергоцелительство и эзотерические практики с Миланой Соболевской')">
    <meta property="og:image" content="@yield('og_image', asset('/images/og-default.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:site_name" content="Свети Ярче">
    <meta property="og:locale" content="ru_RU">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Свети Ярче | Энергоцелитель Милана Соболевская')">
    <meta name="twitter:description" content="@yield('og_description', 'Энергоцелительство и эзотерические практики с Миланой Соболевской')">
    <meta name="twitter:image" content="@yield('og_image', asset('/images/og-default.jpg'))">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    <!-- Favicon -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    
    <!-- Structured Data (JSON-LD) -->
    @yield('structured_data')
</head>
<body>
    <div id="app" class="bg-arcane d-flex flex-column justify-content-between">
        @include('../header')
        <main>
                @yield('content')
                @include('../contacts')
        </main>
        @include('../footer')
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
