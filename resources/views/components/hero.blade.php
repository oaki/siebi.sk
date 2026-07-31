@props(['eyebrow' => null, 'heading', 'lead' => null, 'ctaLabel' => null, 'ctaHref' => null, 'secondaryLabel' => null, 'secondaryHref' => null])

<section class="border-b border-brand-100 bg-gradient-to-b from-brand-50 to-white">
    <div class="mx-auto max-w-4xl px-4 py-16 text-center sm:px-6 sm:py-24">
        @if ($eyebrow)
            <p class="text-sm font-semibold uppercase tracking-wider text-accent-600">{{ $eyebrow }}</p>
        @endif

        <h1 class="mt-3 text-4xl font-bold tracking-tight text-brand-950 sm:text-5xl">{{ $heading }}</h1>

        @if ($lead)
            <p class="mx-auto mt-6 max-w-2xl text-lg text-brand-950/70">{{ $lead }}</p>
        @endif

        @if ($ctaLabel || $secondaryLabel)
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                @if ($ctaLabel)
                    <a href="{{ $ctaHref }}" class="rounded-full bg-accent-500 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-accent-600">
                        {{ $ctaLabel }}
                    </a>
                @endif
                @if ($secondaryLabel)
                    <a href="{{ $secondaryHref }}" class="rounded-full border border-brand-200 px-6 py-3 text-sm font-semibold text-brand-800 transition-colors hover:bg-brand-50">
                        {{ $secondaryLabel }}
                    </a>
                @endif
            </div>
        @endif

        {{ $slot ?? '' }}
    </div>
</section>
