@props(['locale', 'pageKey', 'class' => ''])

<div {{ $attributes->merge(['class' => "items-center gap-1 text-sm font-medium $class"]) }}>
    @foreach (\App\Support\Pages::LOCALES as $altLocale)
        <a href="{{ \App\Support\Pages::switchLocale($pageKey, $altLocale) }}"
           class="rounded px-2 py-1 uppercase {{ $altLocale === $locale ? 'bg-brand-700 text-white' : 'text-brand-950/60 hover:bg-brand-50' }}">
            {{ $altLocale }}
        </a>
    @endforeach
</div>
