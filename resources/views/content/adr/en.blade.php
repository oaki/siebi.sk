@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'ADR Labels — Screen Printing for Dangerous Goods Transport | Siebi s.r.o.')
@section('meta_description', 'ADR hazard labels screen-printed directly onto steel drums, tanks and vehicles. Two-component inks resistant to chemicals and weather. Piešťany, Slovakia.')

@section('content')

<x-hero
    eyebrow="ADR Labels"
    heading="ADR labels that don't come off the surface"
    lead="We produce ADR hazard-class transport labeling for trucks, tanks, drums, and packaging from chemical production — by screen printing, with two-component inks made specifically for this purpose."
    ctaLabel="{{ __('ui.cta.request_quote') }}"
    ctaHref="{{ Pages::path('contact', 'en') }}"
/>

<x-section eyebrow="What is ADR" title="The European Agreement on Dangerous Goods by Road">
    <p class="max-w-3xl text-brand-950/70">
        ADR (the European Agreement concerning the International Carriage of Dangerous Goods by Road) requires vehicles, tanks, drums, and packaging carrying dangerous goods to display clear, unambiguous hazard-class labeling. That labeling has to stay legible and intact for the entire transport and storage period — not just on the day it was applied.
    </p>
</x-section>

<x-section tone="muted" eyebrow="Why screen printing" title="The difference between a sticker and a mark">
    <div class="grid gap-8 md:grid-cols-2">
        <div class="rounded-xl border border-brand-100 bg-white p-6">
            <h3 class="font-semibold text-brand-950">A standard sticker</h3>
            <p class="mt-2 text-sm text-brand-950/70">Adhesive film laid on top of the surface. Abrasion against other drums, contact with solvents or oils, and long-term UV exposure lift the edges, fade the ink, and make the label illegible — right when it matters most.</p>
        </div>
        <div class="rounded-xl border border-brand-200 bg-brand-50 p-6">
            <h3 class="font-semibold text-brand-950">Screen printing</h3>
            <p class="mt-2 text-sm text-brand-950/70">A two-component ink is pushed through a fine mesh directly onto the material and chemically bonds with it. There's nothing to peel off — the ink is part of the surface. It resists petrol, oils, alcohol, and years outdoors.</p>
        </div>
    </div>
</x-section>

<x-section eyebrow="Materials" title="What we print ADR labeling on">
    <ul class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach (['Stainless & steel drums', 'Tanks and containers', 'Plastic packaging & containers', 'Self-adhesive foil for trucks', 'Metal and sheet-metal panels', 'Glass packaging'] as $material)
            <li class="rounded-lg border border-brand-100 px-4 py-3 text-sm text-brand-950/80">{{ $material }}</li>
        @endforeach
    </ul>
</x-section>

<x-section tone="muted" eyebrow="Hazard classes" title="Overview of the main ADR hazard classes">
    <p class="mb-6 max-w-3xl text-sm text-brand-950/60">
        A general overview of the main ADR hazard classes. The exact classification and wording of hazard labels is set by the currently applicable ADR text — consult the applicable legislation or a safety adviser where needed. We handle producing durable, high-quality screen printing to your specification.
    </p>
    <div class="grid gap-3 sm:grid-cols-2">
        @foreach ([
            '1' => 'Explosives',
            '2' => 'Gases',
            '3' => 'Flammable liquids',
            '4' => 'Flammable solids, self-reactive substances',
            '5' => 'Oxidizing substances & organic peroxides',
            '6' => 'Toxic and infectious substances',
            '7' => 'Radioactive material',
            '8' => 'Corrosive substances',
            '9' => 'Miscellaneous dangerous substances and articles',
        ] as $class => $label)
            <div class="flex items-start gap-3 rounded-lg bg-white px-4 py-3 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-md bg-accent-500 text-sm font-bold text-white">{{ $class }}</span>
                <span class="text-sm text-brand-950/80">{{ $label }}</span>
            </div>
        @endforeach
    </div>
</x-section>

<x-cta-banner
    heading="Need ADR labeling that survives the whole trip?"
    text="Tell us the material, hazard class (if known), and approximate quantity."
    buttonLabel="{{ __('ui.cta.request_quote') }}"
    buttonHref="{{ Pages::path('contact', 'en') }}"
/>

@endsection
