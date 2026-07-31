@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Über uns | Siebi s.r.o. — Siebdruck, Piešťany')
@section('meta_description', 'Ein Handwerk, das vom Vater auf den Sohn übergeht. Siebi s.r.o. führt eine 1992 in Piešťany, Slowakei gegründete Siebdrucktradition fort.')

@section('content')

<x-hero
    eyebrow="Über uns"
    heading="Ein Handwerk, das vom Vater auf den Sohn übergeht"
/>

<x-section title="Wie alles begann">
    <div class="max-w-3xl space-y-4 text-brand-950/70">
        <p>1992 begann Milan Binčík in Piešťany mit dem Siebdruck auf ungewöhnlichen Materialien — Edelstahl, Glas, Kunststoff, Karton und selbstklebende Folie. Die Werkstatt machte sich einen Namen dort, wo herkömmlicher Druck versagte: auf Metall, Glas und Materialien, die chemischer und witterungsbedingter Belastung ausgesetzt sind.</p>
        <p>Heute führt sein Sohn Pavol Binčík das Handwerk unter dem Namen Siebi s.r.o. fort — gleiche Technik, gleiche Betonung auf Beständigkeit, mit Schwerpunkt auf ADR-Etiketten für den Gefahrguttransport.</p>
    </div>
</x-section>

<x-section tone="muted" title="Wo Sie uns finden">
    <div class="max-w-3xl space-y-2 text-brand-950/70">
        <p>Wir sitzen in der Štefánikova 15 in Piešťany, Slowakei. Wir sind Mitglied von FESPA SK — dem slowakischen Verband für Sieb- und Digitaldruck.</p>
    </div>
</x-section>

<x-section eyebrow="{{ __('ui.common.clients') }}" title="Für wen wir drucken">
    <div class="flex flex-wrap items-center gap-x-10 gap-y-4 text-xl font-bold tracking-tight text-brand-950/40">
        <span>Chirana Dental</span>
        <span>EKOM</span>
        <span>DoNaTio</span>
    </div>
</x-section>

<x-cta-banner
    heading="Möchten Sie wissen, ob wir Ihr Material bedrucken können?"
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'de') }}"
/>

@endsection
