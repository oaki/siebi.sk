@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Sieťotlač na nerez, sklo, plast a fólie | Siebi s.r.o.')
@section('meta_description', 'Sieťotlač na neobvyklé materiály — nerez, sklo, plast, kartón, samolepiace fólie a plech. Dvojzložkové farby, veľkoformátové zákazky. Piešťany.')

@section('content')

<x-hero
    eyebrow="Sieťotlač"
    heading="Sieťotlač na materiály, ktoré si iní netrúfnu potlačiť"
    lead="Sieťotlač je technika, pri ktorej sa farba pretláča cez jemné sito priamo na povrch materiálu — vzniká tak vrstva, ktorá je súčasťou povrchu, nie len nalepená fólia navrchu."
    ctaLabel="{{ __('ui.cta.contact_us') }}"
    ctaHref="{{ Pages::path('contact', 'sk') }}"
/>

<x-section eyebrow="Materiály" title="Na čo tlačíme">
    <ul class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach (['Nerez', 'Sklo', 'Plast', 'Kartón', 'Samolepiace fólie', 'Plech'] as $material)
            <li class="rounded-lg border border-brand-100 px-4 py-3 text-sm font-medium text-brand-950">{{ $material }}</li>
        @endforeach
    </ul>
</x-section>

<x-section tone="muted" eyebrow="Dvojzložkové farby" title="Prečo naša tlač vydrží dlhšie">
    <p class="max-w-3xl text-brand-950/70">
        Používame dvojzložkové (chemicky vytvrdzované) farby. Na kove a skle sú neporovnateľne kvalitnejšie a odolnejšie ako doposiaľ používaný tampoprint — chránia povrch a predlžujú životnosť výrobku. Farba odoláva benzínu, alkoholu, olejom aj dlhodobému vystaveniu poveternostným vplyvom. Potlačené predmety znášajú aj opakované umývanie a mechanické namáhanie bez straty sýtosti farby.
    </p>
</x-section>

<x-section eyebrow="Veľkoformátová sieťotlač" title="Rovnaká technika, väčší formát">
    <p class="max-w-3xl text-brand-950/70">
        Veľké tabule, panely a fóliové plochy tlačíme rovnakou sieťotlačovou technikou a rovnako odolnými farbami ako menšie zákazky — konzistentná kvalita bez ohľadu na formát.
    </p>
</x-section>

<x-section tone="muted" eyebrow="Ako to prebieha" title="Priebeh zákazky">
    <ol class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
        @foreach ([
            'Konzultácia' => 'Prejdeme materiál, množstvo a požiadavky na odolnosť.',
            'Príprava' => 'Pripravíme sito a farbu podľa typu povrchu.',
            'Tlač' => 'Sieťotlač priamo na váš materiál.',
            'Kontrola' => 'Overíme kvalitu a priľnavosť farby.',
            'Odovzdanie' => 'Zákazku dodáme podľa dohodnutého termínu.',
        ] as $step => $desc)
            <li class="rounded-lg bg-white p-4 shadow-sm">
                <p class="font-semibold text-brand-950">{{ $step }}</p>
                <p class="mt-1 text-sm text-brand-950/60">{{ $desc }}</p>
            </li>
        @endforeach
    </ol>
</x-section>

<x-cta-banner
    heading="Máte materiál, ktorý bežná tlačiareň odmietla?"
    text="Napíšte nám, na čo potrebujete tlačiť a v akom množstve."
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'sk') }}"
/>

@endsection
