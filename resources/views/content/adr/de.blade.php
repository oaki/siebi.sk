@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'ADR-Etiketten — Siebdruck für den Gefahrguttransport | Siebi s.r.o.')
@section('meta_description', 'ADR-Gefahrgutetiketten im Siebdruck direkt auf Stahlfässer, Tanks und Fahrzeuge. Zweikomponentenfarben, beständig gegen Chemikalien und Witterung. Piešťany.')

@section('content')

<x-hero
    eyebrow="ADR-Etiketten"
    heading="ADR-Etiketten, die nicht von der Oberfläche verschwinden"
    lead="Wir fertigen ADR-Gefahrgutkennzeichnungen für Lkw, Tanks, Fässer und Verpackungen aus der chemischen Produktion — im Siebdruck, mit Zweikomponentenfarben, die speziell für diesen Zweck entwickelt wurden."
    ctaLabel="{{ __('ui.cta.request_quote') }}"
    ctaHref="{{ Pages::path('contact', 'de') }}"
/>

<x-section eyebrow="Was ist ADR" title="Das Europäische Übereinkommen über die Beförderung gefährlicher Güter">
    <p class="max-w-3xl text-brand-950/70">
        ADR (das Europäische Übereinkommen über die internationale Beförderung gefährlicher Güter auf der Straße) verlangt, dass Fahrzeuge, Tanks, Fässer und Verpackungen mit Gefahrgut eine deutliche, eindeutige Gefahrenklassenkennzeichnung tragen. Diese Kennzeichnung muss während der gesamten Transport- und Lagerzeit lesbar und intakt bleiben — nicht nur am Tag des Anbringens.
    </p>
</x-section>

<x-section tone="muted" eyebrow="Warum Siebdruck" title="Der Unterschied zwischen Aufkleber und Kennzeichnung">
    <div class="grid gap-8 md:grid-cols-2">
        <div class="rounded-xl border border-brand-100 bg-white p-6">
            <h3 class="font-semibold text-brand-950">Ein gewöhnlicher Aufkleber</h3>
            <p class="mt-2 text-sm text-brand-950/70">Klebefolie, die auf die Oberfläche gelegt wird. Durch Abrieb an anderen Fässern, Kontakt mit Lösungsmitteln oder Ölen und langfristige UV-Einstrahlung heben sich die Ränder ab, verblasst die Farbe, und das Etikett wird unleserlich — genau dann, wenn es am wichtigsten ist.</p>
        </div>
        <div class="rounded-xl border border-brand-200 bg-brand-50 p-6">
            <h3 class="font-semibold text-brand-950">Siebdruck</h3>
            <p class="mt-2 text-sm text-brand-950/70">Eine Zweikomponentenfarbe wird durch ein feines Sieb direkt auf das Material gedruckt und verbindet sich chemisch damit. Es gibt nichts, was sich ablösen könnte — die Farbe ist Teil der Oberfläche. Sie widersteht Benzin, Ölen, Alkohol und jahrelanger Witterung im Freien.</p>
        </div>
    </div>
</x-section>

<x-section eyebrow="Materialien" title="Worauf wir ADR-Kennzeichnungen drucken">
    <ul class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach (['Edelstahl- und Stahlfässer', 'Tanks und Behälter', 'Kunststoffverpackungen und -behälter', 'Selbstklebende Folie für Lkw', 'Metall- und Blechtafeln', 'Glasverpackungen'] as $material)
            <li class="rounded-lg border border-brand-100 px-4 py-3 text-sm text-brand-950/80">{{ $material }}</li>
        @endforeach
    </ul>
</x-section>

<x-section tone="muted" eyebrow="Gefahrenklassen" title="Überblick über die wichtigsten ADR-Gefahrenklassen">
    <p class="mb-6 max-w-3xl text-sm text-brand-950/60">
        Ein allgemeiner Überblick über die wichtigsten ADR-Gefahrenklassen. Die genaue Einstufung und der Wortlaut der Gefahrenetiketten richten sich nach der jeweils gültigen ADR-Fassung — konsultieren Sie bei Bedarf die geltenden Vorschriften oder einen Gefahrgutbeauftragten. Wir übernehmen die hochwertige, dauerhafte Siebdruckausführung nach Ihrer Vorgabe.
    </p>
    <div class="grid gap-3 sm:grid-cols-2">
        @foreach ([
            '1' => 'Explosive Stoffe und Gegenstände',
            '2' => 'Gase',
            '3' => 'Entzündbare flüssige Stoffe',
            '4' => 'Entzündbare feste Stoffe, selbstzersetzliche Stoffe',
            '5' => 'Entzündend (oxidierend) wirkende Stoffe und organische Peroxide',
            '6' => 'Giftige und ansteckungsgefährliche Stoffe',
            '7' => 'Radioaktive Stoffe',
            '8' => 'Ätzende Stoffe',
            '9' => 'Verschiedene gefährliche Stoffe und Gegenstände',
        ] as $class => $label)
            <div class="flex items-start gap-3 rounded-lg bg-white px-4 py-3 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-md bg-accent-500 text-sm font-bold text-white">{{ $class }}</span>
                <span class="text-sm text-brand-950/80">{{ $label }}</span>
            </div>
        @endforeach
    </div>
</x-section>

<x-cta-banner
    heading="Brauchen Sie eine ADR-Kennzeichnung, die den ganzen Transport übersteht?"
    text="Nennen Sie uns Material, Gefahrenklasse (falls bekannt) und ungefähre Menge."
    buttonLabel="{{ __('ui.cta.request_quote') }}"
    buttonHref="{{ Pages::path('contact', 'de') }}"
/>

@endsection
