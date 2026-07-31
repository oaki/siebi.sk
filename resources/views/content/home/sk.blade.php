@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Sieťotlač a ADR nálepky, ktoré vydržia | Siebi s.r.o. Piešťany')
@section('meta_description', 'Sieťotlač na nerez, sklo, plast a fólie dvojzložkovými farbami. Výroba ADR nálepiek pre prepravu nebezpečných látok. Piešťany, Slovensko.')

@section('content')

<x-hero
    eyebrow="Sieťotlač · ADR nálepky"
    heading="Sieťotlač a ADR nálepky, ktoré vydržia"
    lead="Sme Siebi s.r.o. — rodinná sieťotlačová dielňa v Piešťanoch. Tlačíme priamo na nerez, sklo, plast, kartón aj samolepiace fólie dvojzložkovými farbami, ktoré odolávajú benzínu, alkoholu, chemikáliám aj počasiu. Hlavná špecializácia: ADR nálepky pre prepravu nebezpečných látok."
    ctaLabel="{{ __('ui.cta.contact_us') }}"
    ctaHref="{{ Pages::path('contact', 'sk') }}"
    secondaryLabel="{{ __('ui.cta.see_adr') }}"
    secondaryHref="{{ Pages::path('adr', 'sk') }}"
/>

<x-section eyebrow="Čo robíme" title="Jedna technika, dokonale zvládnutá">
    <div class="grid gap-8 sm:grid-cols-2">
        <div>
            <h3 class="text-lg font-semibold text-brand-950">ADR nálepky</h3>
            <p class="mt-2 text-brand-950/70">Prepravné výstražné označenie pre kamióny, cisterny, sudy a obaly z chemickej výroby — priamo potlačené sieťotlačou, nie nalepenou fóliou, ktorá sa odlupuje.</p>
            <a href="{{ Pages::path('adr', 'sk') }}" class="mt-3 inline-block text-sm font-semibold text-brand-700 hover:text-brand-800">{{ __('ui.common.read_more') }} →</a>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Sieťotlač na neobvyklé materiály</h3>
            <p class="mt-2 text-brand-950/70">Nerez, sklo, plast, kartón, samolepiace fólie a plech — dvojzložkovými farbami, ktoré sa chemicky viažu na povrch a vydržia roky v prevádzke.</p>
            <a href="{{ Pages::path('screen-printing', 'sk') }}" class="mt-3 inline-block text-sm font-semibold text-brand-700 hover:text-brand-800">{{ __('ui.common.read_more') }} →</a>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Veľkoformátové zákazky</h3>
            <p class="mt-2 text-brand-950/70">Veľké tabule, panely a fóliové plochy — rovnaká technika a odolnosť, len vo väčšom formáte.</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Dvojzložkové farby</h3>
            <p class="mt-2 text-brand-950/70">Chemicky vytvrdzované farby, ktoré chránia povrch a predlžujú životnosť výrobku — preukázateľne odolnejšie ako doposiaľ používaný tampoprint.</p>
        </div>
    </div>
</x-section>

<x-section tone="muted" eyebrow="Prečo sieťotlač" title="Farba, ktorá je súčasťou povrchu — nie nálepka navrchu">
    <p class="max-w-3xl text-brand-950/70">
        Bežná samolepka sa časom odlúpi — od otierania, chemikálií, mrazu aj slnka. Sieťotlač funguje inak: farba sa pretlačí cez jemné sito priamo na materiál a chemicky sa s ním spojí. Na kovových sudoch, cisternách a vozidlách vystavených poveternostným vplyvom a chemickej záťaži je to zásadný rozdiel medzi označením, ktoré vydrží roky, a nálepkou, ktorú treba o pár mesiacov obnoviť.
    </p>
</x-section>

<x-section eyebrow="{{ __('ui.common.clients') }}" title="Firmy, ktoré nám dôverujú">
    <div class="flex flex-wrap items-center gap-x-10 gap-y-4 text-xl font-bold tracking-tight text-brand-950/40">
        <span>Chirana Dental</span>
        <span>EKOM</span>
        <span>DoNaTio</span>
    </div>
</x-section>

<x-cta-banner
    heading="Potrebujete ADR nálepky alebo sieťotlač na nezvyčajný materiál?"
    text="Napíšte nám materiál, množstvo a typ zákazky — pripravíme vám cenovú ponuku."
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'sk') }}"
/>

@endsection
