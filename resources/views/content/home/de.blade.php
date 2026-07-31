@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Siebdruck & ADR-Etiketten, die halten | Siebi s.r.o., Slowakei')
@section('meta_description', 'Siebdruck auf Edelstahl, Glas, Kunststoff und Folie mit Zweikomponentenfarben. ADR-Gefahrgutetiketten für den Gefahrguttransport. Piešťany, Slowakei.')

@section('content')

<x-hero
    eyebrow="Siebdruck · ADR-Etiketten"
    heading="Siebdruck und ADR-Etiketten, die halten"
    lead="Wir sind Siebi s.r.o. — eine Familien-Siebdruckerei in Piešťany, Slowakei. Wir drucken direkt auf Edelstahl, Glas, Kunststoff, Karton und selbstklebende Folie mit Zweikomponentenfarben, die Benzin, Alkohol, Chemikalien und Witterung standhalten. Unser Schwerpunkt: ADR-Etiketten für den Gefahrguttransport."
    ctaLabel="{{ __('ui.cta.contact_us') }}"
    ctaHref="{{ Pages::path('contact', 'de') }}"
    secondaryLabel="{{ __('ui.cta.see_adr') }}"
    secondaryHref="{{ Pages::path('adr', 'de') }}"
/>

<x-section eyebrow="Was wir tun" title="Eine Technik, perfekt beherrscht">
    <div class="grid gap-8 sm:grid-cols-2">
        <div>
            <h3 class="text-lg font-semibold text-brand-950">ADR-Etiketten</h3>
            <p class="mt-2 text-brand-950/70">Gefahrgutkennzeichnung für Lkw, Tanks, Fässer und Verpackungen aus der chemischen Produktion — im Siebdruck direkt aufgebracht, nicht als Aufkleber, der sich ablöst.</p>
            <a href="{{ Pages::path('adr', 'de') }}" class="mt-3 inline-block text-sm font-semibold text-brand-700 hover:text-brand-800">{{ __('ui.common.read_more') }} →</a>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Siebdruck auf ungewöhnlichen Materialien</h3>
            <p class="mt-2 text-brand-950/70">Edelstahl, Glas, Kunststoff, Karton, selbstklebende Folie und Blech — mit Zweikomponentenfarben, die sich chemisch mit der Oberfläche verbinden und jahrelang halten.</p>
            <a href="{{ Pages::path('screen-printing', 'de') }}" class="mt-3 inline-block text-sm font-semibold text-brand-700 hover:text-brand-800">{{ __('ui.common.read_more') }} →</a>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Großformatige Aufträge</h3>
            <p class="mt-2 text-brand-950/70">Große Tafeln, Schilder und Folienflächen — gleiche Technik, gleiche Beständigkeit, nur größer.</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-brand-950">Zweikomponentenfarben</h3>
            <p class="mt-2 text-brand-950/70">Chemisch aushärtende Farben, die die Oberfläche schützen und die Lebensdauer verlängern — nachweislich beständiger als das zuvor verwendete Tampondruckverfahren.</p>
        </div>
    </div>
</x-section>

<x-section tone="muted" eyebrow="Warum Siebdruck" title="Farbe, die Teil der Oberfläche ist — kein Aufkleber obendrauf">
    <p class="max-w-3xl text-brand-950/70">
        Ein gewöhnlicher Aufkleber löst sich mit der Zeit ab — durch Abrieb, Chemikalien, Frost und Sonne. Siebdruck funktioniert anders: Die Farbe wird durch ein feines Sieb direkt auf das Material gedruckt und verbindet sich chemisch damit. Bei Metallfässern, Tanks und Fahrzeugen, die Witterung und chemischer Belastung ausgesetzt sind, ist das der Unterschied zwischen einer Kennzeichnung, die Jahre hält, und einem Aufkleber, der alle paar Monate erneuert werden muss.
    </p>
</x-section>

<x-section eyebrow="{{ __('ui.common.clients') }}" title="Unternehmen, die uns vertrauen">
    <div class="flex flex-wrap items-center gap-x-10 gap-y-4 text-xl font-bold tracking-tight text-brand-950/40">
        <span>Chirana Dental</span>
        <span>EKOM</span>
        <span>DoNaTio</span>
    </div>
</x-section>

<x-cta-banner
    heading="Brauchen Sie ADR-Etiketten oder Siebdruck auf einem ungewöhnlichen Material?"
    text="Nennen Sie uns Material, Menge und Auftragsart — wir erstellen Ihnen ein Angebot."
    buttonLabel="{{ __('ui.cta.contact_us') }}"
    buttonHref="{{ Pages::path('contact', 'de') }}"
/>

@endsection
