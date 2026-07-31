@props(['eyebrow' => null, 'title' => null, 'tone' => 'default'])

@php
    $toneClasses = match ($tone) {
        'muted' => 'bg-brand-50',
        'brand' => 'bg-brand-950 text-white',
        default => 'bg-white',
    };
@endphp

<section class="{{ $toneClasses }} py-14 sm:py-20">
    <div class="mx-auto max-w-5xl px-4 sm:px-6">
        @if ($eyebrow || $title)
            <div class="mb-10 max-w-2xl">
                @if ($eyebrow)
                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-600">{{ $eyebrow }}</p>
                @endif
                @if ($title)
                    <h2 class="mt-2 text-3xl font-bold tracking-tight {{ $tone === 'brand' ? 'text-white' : 'text-brand-950' }}">{{ $title }}</h2>
                @endif
            </div>
        @endif

        {{ $slot }}
    </div>
</section>
