@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'About Us | Siebi s.r.o. — Screen Printing, Piešťany')
@section('meta_description', 'A craft passed from father to son. Siebi s.r.o. continues a screen-printing tradition founded in Piešťany, Slovakia in 1992.')

@section('content')

<x-hero
    eyebrow="About us"
    heading="A craft passed from father to son"
/>

<x-section title="How it started">
    <div class="max-w-3xl space-y-4 text-brand-950/70">
        <p>In 1992, Milan Binčík started screen printing on unusual materials in Piešťany, Slovakia — stainless steel, glass, plastic, cardboard, and self-adhesive foil. The workshop built a reputation for printing where standard printing failed: on metal, glass, and materials exposed to chemical and weather stress.</p>
        <p>Today his son Pavol Binčík continues the craft under the name Siebi s.r.o. — same technique, same emphasis on durability, now with a core focus on ADR labels for the transport of dangerous goods.</p>
    </div>
</x-section>

<x-section tone="muted" title="Where to find us">
    <div class="max-w-3xl space-y-2 text-brand-950/70">
        <p>We're based at Štefánikova 15 in Piešťany, Slovakia. We're a member of FESPA SK — the Slovak Association of Screen and Digital Printers.</p>
    </div>
</x-section>

<x-section eyebrow="{{ __('ui.common.clients') }}" title="Who we print for">
    <div class="flex flex-wrap items-center gap-x-10 gap-y-4 text-xl font-bold tracking-tight text-brand-950/40">
        <span>Chirana Dental</span>
        <span>EKOM</span>
        <span>DoNaTio</span>
    </div>
</x-section>

<x-cta-banner
    heading="Want to know if we can print your material?"
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'en') }}"
/>

@endsection
