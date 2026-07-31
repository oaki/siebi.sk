@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Screen Printing & ADR Labels That Last | Siebi s.r.o., Slovakia')
@section('meta_description', 'Screen printing on stainless steel, glass, plastic and foil with two-component inks. ADR hazard labels for dangerous goods transport. Piešťany, Slovakia.')

@section('content')

<x-hero
    eyebrow="Screen Printing · ADR Labels"
    heading="Screen printing and ADR labels that last"
    lead="We're Siebi s.r.o. — a family screen-printing workshop in Piešťany, Slovakia. We print directly onto stainless steel, glass, plastic, cardboard and self-adhesive foil with two-component inks that resist petrol, alcohol, chemicals and weather. Our core focus: ADR labels for the transport of dangerous goods."
    ctaLabel="{{ __('ui.cta.contact_us') }}"
    ctaHref="{{ Pages::path('contact', 'en') }}"
    secondaryLabel="{{ __('ui.cta.see_adr') }}"
    secondaryHref="{{ Pages::path('adr', 'en') }}"
/>

<x-section eyebrow="What we do" title="One technique, mastered">
    <div class="grid gap-8 sm:grid-cols-2">
        <div>
            <h3 class="text-lg font-semibold text-brand-950">ADR labels</h3>
            <p class="mt-2 text-brand-950/70">Hazard-class transport labeling for trucks, tanks, drums, and packaging from chemical production — printed directly by screen printing, not applied as a sticker that peels off.</p>
            <a href="{{ Pages::path('adr', 'en') }}" class="mt-3 inline-block text-sm font-semibold text-brand-700 hover:text-brand-800">{{ __('ui.common.read_more') }} →</a>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Screen printing on unusual materials</h3>
            <p class="mt-2 text-brand-950/70">Stainless steel, glass, plastic, cardboard, self-adhesive foil and sheet metal — with two-component inks that chemically bond to the surface and last for years in service.</p>
            <a href="{{ Pages::path('screen-printing', 'en') }}" class="mt-3 inline-block text-sm font-semibold text-brand-700 hover:text-brand-800">{{ __('ui.common.read_more') }} →</a>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Large-format jobs</h3>
            <p class="mt-2 text-brand-950/70">Large panels, signs, and foil surfaces — same technique, same durability, just bigger.</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Two-component inks</h3>
            <p class="mt-2 text-brand-950/70">Chemically cured inks that protect the surface and extend product life — demonstrably more durable than the pad printing (tampoprint) used previously.</p>
        </div>
    </div>
</x-section>

<x-section tone="muted" eyebrow="Why screen printing" title="Ink that's part of the surface — not a sticker on top">
    <p class="max-w-3xl text-brand-950/70">
        A standard adhesive sticker peels away over time — from abrasion, chemicals, frost, and sun. Screen printing works differently: ink is pushed through a fine mesh directly onto the material and chemically bonds with it. On metal drums, tanks, and vehicles exposed to weather and chemical stress, that's the difference between a mark that lasts for years and a sticker that needs replacing every few months.
    </p>
</x-section>

<x-section eyebrow="{{ __('ui.common.clients') }}" title="Companies that trust us">
    <div class="flex flex-wrap items-center gap-x-10 gap-y-4 text-xl font-bold tracking-tight text-brand-950/40">
        <span>Chirana Dental</span>
        <span>EKOM</span>
        <span>DoNaTio</span>
    </div>
</x-section>

<x-cta-banner
    heading="Need ADR labels or screen printing on an unusual material?"
    text="Tell us the material, quantity, and job type — we'll put together a quote."
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'en') }}"
/>

@endsection
