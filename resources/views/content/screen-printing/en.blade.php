@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Screen Printing on Steel, Glass, Plastic & Foil | Siebi s.r.o.')
@section('meta_description', 'Screen printing on unusual materials — stainless steel, glass, plastic, cardboard, self-adhesive foil and sheet metal. Two-component inks, large-format jobs. Piešťany.')

@section('content')

<x-hero
    eyebrow="Screen Printing"
    heading="Screen printing on materials others turn away"
    lead="Screen printing pushes ink through a fine mesh directly onto the surface of the material — producing a layer that's part of the surface, not a foil stuck on top."
    ctaLabel="{{ __('ui.cta.contact_us') }}"
    ctaHref="{{ Pages::path('contact', 'en') }}"
/>

<x-section eyebrow="Materials" title="What we print on">
    <ul class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach (['Stainless steel', 'Glass', 'Plastic', 'Cardboard', 'Self-adhesive foil', 'Sheet metal'] as $material)
            <li class="rounded-lg border border-brand-100 px-4 py-3 text-sm font-medium text-brand-950">{{ $material }}</li>
        @endforeach
    </ul>
</x-section>

<x-section tone="muted" eyebrow="Two-component inks" title="Why our print lasts longer">
    <p class="max-w-3xl text-brand-950/70">
        We use two-component (chemically cured) inks. On metal and glass they're incomparably higher quality and more durable than the pad printing (tampoprint) used previously — protecting the surface and extending the product's lifespan. The ink resists petrol, alcohol, oils, and long-term weather exposure. Printed items also withstand repeated washing and mechanical stress without losing color intensity.
    </p>
</x-section>

<x-section eyebrow="Large-format screen printing" title="Same technique, bigger format">
    <p class="max-w-3xl text-brand-950/70">
        Large panels, signs, and foil surfaces are printed with the same screen-printing technique and the same durable inks as smaller jobs — consistent quality regardless of size.
    </p>
</x-section>

<x-section tone="muted" eyebrow="How it works" title="The job process">
    <ol class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
        @foreach ([
            'Consultation' => 'We go through the material, quantity, and durability requirements.',
            'Preparation' => 'We prepare the screen and ink for your specific surface.',
            'Printing' => 'Screen printing directly onto your material.',
            'Quality check' => 'We verify quality and ink adhesion.',
            'Delivery' => 'We deliver on the agreed schedule.',
        ] as $step => $desc)
            <li class="rounded-lg bg-white p-4 shadow-sm">
                <p class="font-semibold text-brand-950">{{ $step }}</p>
                <p class="mt-1 text-sm text-brand-950/60">{{ $desc }}</p>
            </li>
        @endforeach
    </ol>
</x-section>

<x-cta-banner
    heading="Got a material another printer turned down?"
    text="Tell us what you need printed and in what quantity."
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'en') }}"
/>

@endsection
