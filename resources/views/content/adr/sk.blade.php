@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'ADR nálepky — sieťotlač pre prepravu nebezpečných látok | Siebi s.r.o.')
@section('meta_description', 'Výroba ADR nálepiek sieťotlačou priamo na kovové sudy, cisterny a vozidlá. Dvojzložkové farby odolné voči chemikáliám a poveternostným vplyvom. Piešťany.')

@section('content')

<x-hero
    eyebrow="ADR nálepky"
    heading="ADR nálepky, ktoré nezmizne z povrchu"
    lead="Vyrábame prepravné výstražné označenie ADR na kamióny, cisterny, sudy a obaly z chemickej výroby — sieťotlačou, dvojzložkovými farbami určenými presne na tento účel."
    ctaLabel="{{ __('ui.cta.request_quote') }}"
    ctaHref="{{ Pages::path('contact', 'sk') }}"
/>

<x-section eyebrow="Čo je ADR" title="Európska dohoda o preprave nebezpečných vecí">
    <p class="max-w-3xl text-brand-950/70">
        ADR (Európska dohoda o medzinárodnej cestnej preprave nebezpečných vecí) vyžaduje, aby vozidlá, cisterny, sudy a obaly prepravujúce nebezpečné látky niesli viditeľné, jednoznačné označenie triedy nebezpečnosti. Toto označenie musí byť čitateľné a odolné po celú dobu prepravy a skladovania — nie len v deň, keď bolo nalepené.
    </p>
</x-section>

<x-section tone="muted" eyebrow="Prečo sieťotlač" title="Rozdiel medzi nálepkou a označením">
    <div class="grid gap-8 md:grid-cols-2">
        <div class="rounded-xl border border-brand-100 bg-white p-6">
            <h3 class="font-semibold text-brand-950">Bežná samolepka</h3>
            <p class="mt-2 text-sm text-brand-950/70">Lepiaca fólia položená na povrch. Pri otieraní o iné sudy, pri kontakte s rozpúšťadlami, olejmi alebo pri dlhodobom vystavení UV žiareniu sa okraje nadvihujú, farba bledne a označenie sa stáva nečitateľným — presne v momente, keď na tom najviac záleží.</p>
        </div>
        <div class="rounded-xl border border-brand-200 bg-brand-50 p-6">
            <h3 class="font-semibold text-brand-950">Sieťotlač</h3>
            <p class="mt-2 text-sm text-brand-950/70">Dvojzložková farba sa pretlačí cez jemné sito priamo na materiál a chemicky sa s ním spojí. Nie je čo odlepiť — farba je súčasťou povrchu. Odolá benzínu, olejom, alkoholu aj rokom v exteriéri.</p>
        </div>
    </div>
</x-section>

<x-section eyebrow="Materiály" title="Na čo tlačíme ADR označenie">
    <ul class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach (['Nerezové a oceľové sudy', 'Cisterny a nádrže', 'Plastové obaly a kontajnery', 'Samolepiace fólie na kamióny', 'Kovové a plechové panely', 'Sklenené obaly'] as $material)
            <li class="rounded-lg border border-brand-100 px-4 py-3 text-sm text-brand-950/80">{{ $material }}</li>
        @endforeach
    </ul>
</x-section>

<x-section tone="muted" eyebrow="Triedy nebezpečnosti" title="Prehľad tried podľa dohody ADR">
    <p class="mb-6 max-w-3xl text-sm text-brand-950/60">
        Orientačný prehľad hlavných tried nebezpečnosti podľa dohody ADR. Presné zaradenie a znenie výstražných značiek stanovuje aktuálne platné znenie dohody — v prípade potreby konzultujte platnú legislatívu alebo bezpečnostného poradcu. My zabezpečíme kvalitnú a odolnú sieťotlač podľa vašej špecifikácie.
    </p>
    <div class="grid gap-3 sm:grid-cols-2">
        @foreach ([
            '1' => 'Výbušné látky a predmety',
            '2' => 'Plyny',
            '3' => 'Horľavé kvapaliny',
            '4' => 'Horľavé tuhé látky, samozápalné látky',
            '5' => 'Oxidujúce látky a organické peroxidy',
            '6' => 'Jedovaté a infekčné látky',
            '7' => 'Rádioaktívne látky',
            '8' => 'Žieravé látky',
            '9' => 'Rôzne nebezpečné látky a predmety',
        ] as $class => $label)
            <div class="flex items-start gap-3 rounded-lg bg-white px-4 py-3 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-md bg-accent-500 text-sm font-bold text-white">{{ $class }}</span>
                <span class="text-sm text-brand-950/80">{{ $label }}</span>
            </div>
        @endforeach
    </div>
</x-section>

<x-cta-banner
    heading="Potrebujete ADR označenie, ktoré vydrží celú prepravu?"
    text="Napíšte nám materiál, triedu nebezpečnosti (ak ju poznáte) a približné množstvo."
    buttonLabel="{{ __('ui.cta.request_quote') }}"
    buttonHref="{{ Pages::path('contact', 'sk') }}"
/>

@endsection
