@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Siebdruck auf Stahl, Glas, Kunststoff & Folie | Siebi s.r.o.')
@section('meta_description', 'Siebdruck auf ungewöhnlichen Materialien — Edelstahl, Glas, Kunststoff, Karton, selbstklebende Folie und Blech. Zweikomponentenfarben, großformatige Aufträge. Piešťany.')

@section('content')

<x-hero
    eyebrow="Siebdruck"
    heading="Siebdruck auf Materialien, die andere ablehnen"
    lead="Beim Siebdruck wird Farbe durch ein feines Sieb direkt auf die Materialoberfläche gedruckt — es entsteht eine Schicht, die Teil der Oberfläche ist, keine aufgeklebte Folie."
    ctaLabel="{{ __('ui.cta.contact_us') }}"
    ctaHref="{{ Pages::path('contact', 'de') }}"
/>

<x-section eyebrow="Materialien" title="Worauf wir drucken">
    <ul class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach (['Edelstahl', 'Glas', 'Kunststoff', 'Karton', 'Selbstklebende Folie', 'Blech'] as $material)
            <li class="rounded-lg border border-brand-100 px-4 py-3 text-sm font-medium text-brand-950">{{ $material }}</li>
        @endforeach
    </ul>
</x-section>

<x-section tone="muted" eyebrow="Zweikomponentenfarben" title="Warum unser Druck länger hält">
    <p class="max-w-3xl text-brand-950/70">
        Wir verwenden Zweikomponentenfarben (chemisch aushärtend). Auf Metall und Glas sind sie unvergleichlich hochwertiger und beständiger als das zuvor verwendete Tampondruckverfahren — sie schützen die Oberfläche und verlängern die Lebensdauer des Produkts. Die Farbe widersteht Benzin, Alkohol, Ölen und langfristiger Witterungseinwirkung. Bedruckte Gegenstände halten auch wiederholtes Waschen und mechanische Beanspruchung ohne Farbverlust aus.
    </p>
</x-section>

<x-section eyebrow="Großformatiger Siebdruck" title="Gleiche Technik, größeres Format">
    <p class="max-w-3xl text-brand-950/70">
        Große Tafeln, Schilder und Folienflächen drucken wir mit derselben Siebdrucktechnik und denselben beständigen Farben wie kleinere Aufträge — gleichbleibende Qualität unabhängig vom Format.
    </p>
</x-section>

<x-section tone="muted" eyebrow="Ablauf" title="Wie ein Auftrag abläuft">
    <ol class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
        @foreach ([
            'Beratung' => 'Wir besprechen Material, Menge und Anforderungen an die Beständigkeit.',
            'Vorbereitung' => 'Wir bereiten Sieb und Farbe passend zur Oberfläche vor.',
            'Druck' => 'Siebdruck direkt auf Ihr Material.',
            'Kontrolle' => 'Wir prüfen Qualität und Haftung der Farbe.',
            'Lieferung' => 'Wir liefern zum vereinbarten Termin.',
        ] as $step => $desc)
            <li class="rounded-lg bg-white p-4 shadow-sm">
                <p class="font-semibold text-brand-950">{{ $step }}</p>
                <p class="mt-1 text-sm text-brand-950/60">{{ $desc }}</p>
            </li>
        @endforeach
    </ol>
</x-section>

<x-cta-banner
    heading="Haben Sie ein Material, das eine andere Druckerei abgelehnt hat?"
    text="Sagen Sie uns, was und in welcher Menge Sie bedrucken lassen möchten."
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'de') }}"
/>

@endsection
