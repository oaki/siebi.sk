<!DOCTYPE html>
<html lang="{{ $locale }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', __('ui.meta.site_name'))</title>
    <meta name="description" content="@yield('meta_description', __('ui.meta.tagline'))">

    {{-- hreflang alternates: every language version of this exact page --}}
    @foreach (\App\Support\Pages::LOCALES as $altLocale)
        <link rel="alternate" hreflang="{{ $altLocale }}" href="{{ url(\App\Support\Pages::path($pageKey, $altLocale)) }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ url(\App\Support\Pages::path($pageKey, 'sk')) }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ __('ui.meta.site_name') }}">
    <meta property="og:title" content="@yield('title', __('ui.meta.site_name'))">
    <meta property="og:description" content="@yield('meta_description', __('ui.meta.tagline'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="{{ $locale }}">

    <link rel="icon" href="/images/siebi-logo.svg" type="image/svg+xml">

    {{-- LocalBusiness structured data — helps both classic SEO and GEO/AI-answer-engine citation --}}
    @php
        $localBusinessSchema = [
            '@'.'context' => 'https://schema.org',
            '@'.'type' => 'LocalBusiness',
            'name' => 'Siebi s.r.o.',
            'description' => __('ui.meta.tagline'),
            'url' => url('/'.$locale),
            'telephone' => '+421905293566',
            'email' => 'info@siebi.sk',
            'address' => [
                '@'.'type' => 'PostalAddress',
                'streetAddress' => 'Štefánikova 15/1168',
                'postalCode' => '921 01',
                'addressLocality' => 'Piešťany',
                'addressCountry' => 'SK',
            ],
            'areaServed' => ['SK', 'CZ', 'AT', 'DE'],
            'knowsAbout' => ['sieťotlač', 'screen printing', 'ADR nálepky', 'ADR labels', 'Siebdruck', 'ADR-Etiketten'],
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-white text-brand-950">
    <x-site-header :locale="$locale" :page-key="$pageKey" />

    <main class="flex-1">
        @yield('content')
    </main>

    <x-site-footer :locale="$locale" />
</body>
</html>
