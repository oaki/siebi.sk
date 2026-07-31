@props(['locale', 'pageKey'])

@php
    $navItems = ['home', 'adr', 'screen-printing', 'about', 'contact'];
@endphp

<header class="sticky top-0 z-40 border-b border-brand-100 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6">
        <a href="{{ \App\Support\Pages::path('home', $locale) }}" class="shrink-0" aria-label="{{ __('ui.meta.site_name') }}">
            <img src="/images/siebi-logo.svg" alt="Siebi" class="h-8 w-auto">
        </a>

        <nav class="hidden items-center gap-6 text-sm font-medium lg:flex">
            @foreach ($navItems as $item)
                @php $active = $pageKey === $item; @endphp
                <a href="{{ \App\Support\Pages::path($item, $locale) }}"
                   class="{{ $active ? 'text-brand-700' : 'text-brand-950/70 hover:text-brand-700' }} transition-colors">
                    {{ __("ui.nav.$item") }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <x-lang-switcher :locale="$locale" :page-key="$pageKey" class="hidden sm:flex" />

            <a href="{{ \App\Support\Pages::path('contact', $locale) }}"
               class="hidden rounded-full bg-brand-700 px-4 py-2 text-sm font-semibold text-white transition-colors hover:bg-brand-800 sm:inline-block">
                {{ __('ui.cta.contact_us') }}
            </a>

            <details class="relative lg:hidden">
                <summary class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded-md border border-brand-200 text-brand-800 [&::-webkit-details-marker]:hidden">
                    <span class="sr-only">Menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                    </svg>
                </summary>
                <div class="absolute right-0 mt-2 w-56 rounded-xl border border-brand-100 bg-white p-3 shadow-lg">
                    <nav class="flex flex-col gap-1 text-sm font-medium">
                        @foreach ($navItems as $item)
                            <a href="{{ \App\Support\Pages::path($item, $locale) }}"
                               class="rounded-md px-3 py-2 {{ $pageKey === $item ? 'bg-brand-50 text-brand-700' : 'text-brand-950/80 hover:bg-brand-50' }}">
                                {{ __("ui.nav.$item") }}
                            </a>
                        @endforeach
                    </nav>
                    <div class="mt-3 border-t border-brand-100 pt-3">
                        <x-lang-switcher :locale="$locale" :page-key="$pageKey" />
                    </div>
                </div>
            </details>
        </div>
    </div>
</header>
