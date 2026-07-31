@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'O nás | Siebi s.r.o. — sieťotlač Piešťany')
@section('meta_description', 'Remeslo, ktoré ide z otca na syna. Siebi s.r.o. pokračuje v sieťotlačovej tradícii založenej v Piešťanoch v roku 1992.')

@section('content')

<x-hero
    eyebrow="O nás"
    heading="Remeslo, ktoré ide z otca na syna"
/>

<x-section title="Ako to začalo">
    <div class="max-w-3xl space-y-4 text-brand-950/70">
        <p>V roku 1992 sa Milan Binčík v Piešťanoch začal venovať sieťotlači na netradičné materiály — nerez, sklo, plast, kartón a samolepiace fólie. Dielňa si postupne vybudovala meno na potlači tam, kde bežná tlač zlyhávala: na kovoch, skle a materiáloch vystavených chemickej a poveternostnej záťaži.</p>
        <p>Dnes v remesle pokračuje jeho syn Pavol Binčík pod menom Siebi s.r.o. Rovnaká technika, rovnaký dôraz na odolnosť — s hlavným zameraním na ADR nálepky pre prepravu nebezpečných látok.</p>
    </div>
</x-section>

<x-section tone="muted" title="Kde nás nájdete">
    <div class="max-w-3xl space-y-2 text-brand-950/70">
        <p>Sídlime na Štefánikovej 15 v Piešťanoch. Sme členom FESPA SK — Slovenského združenia sieťotlačiarov a digitálnej tlače.</p>
    </div>
</x-section>

<x-section eyebrow="{{ __('ui.common.clients') }}" title="Komu tlačíme">
    <div class="flex flex-wrap items-center gap-x-10 gap-y-4 text-xl font-bold tracking-tight text-brand-950/40">
        <span>Chirana Dental</span>
        <span>EKOM</span>
        <span>DoNaTio</span>
    </div>
</x-section>

<x-cta-banner
    heading="Chcete vedieť, či vieme potlačiť váš materiál?"
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'sk') }}"
/>

@endsection
