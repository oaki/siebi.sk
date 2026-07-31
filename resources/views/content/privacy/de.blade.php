@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Datenschutz | Siebi s.r.o.')
@section('meta_description', 'Wie Siebi s.r.o. personenbezogene Daten aus dem Kontaktformular verarbeitet.')

@section('content')

<x-hero eyebrow="Rechtliches" heading="Datenschutz" />

<x-section>
    <div class="max-w-3xl space-y-1 text-brand-950/80">
        <p>Betreiber von siebi.sk und Verantwortlicher für die Verarbeitung personenbezogener Daten ist Siebi s.r.o., Štefánikova 15/1168, 921 01 Piešťany, Slowakei, Handelsregisternummer (IČO) 36270211.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Welche Daten wir verarbeiten</h2>
        <p>Über das Kontaktformular erheben wir Ihren Namen, optional Ihren Firmennamen, Ihre E-Mail-Adresse, Ihre Telefonnummer (falls angegeben) und den Inhalt Ihrer Nachricht.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Zweck der Verarbeitung</h2>
        <p>Wir verwenden diese Daten ausschließlich, um Ihre Anfrage zu beantworten oder ein Angebot zu erstellen. Wir nutzen sie ohne Ihre Zustimmung nicht zu Marketingzwecken und geben sie nicht an Dritte weiter.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Speicherdauer</h2>
        <p>Wir speichern Kommunikationsdaten nur so lange, wie es zur Bearbeitung Ihrer Anfrage und einer möglichen anschließenden Geschäftsbeziehung erforderlich ist, längstens jedoch gemäß den geltenden buchhalterischen und steuerlichen Vorschriften.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Ihre Rechte</h2>
        <p>Sie haben das Recht, Auskunft über Ihre personenbezogenen Daten zu verlangen sowie deren Berichtigung oder Löschung zu beantragen. Kontaktieren Sie uns unter <a href="mailto:info@siebi.sk" class="text-brand-700 hover:text-brand-800">info@siebi.sk</a>.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Cookies</h2>
        <p>Diese Website verwendet keine Tracking- oder Werbe-Cookies. Wir erfassen Besuche anonym serverseitig, ohne IP-Adresse oder sonstige Browser-Kennung zu speichern.</p>
    </div>
</x-section>

@endsection
