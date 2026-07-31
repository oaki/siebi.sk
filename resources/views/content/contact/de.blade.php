@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Kontakt | Siebi s.r.o.')
@section('meta_description', 'Kontaktieren Sie Siebi s.r.o. — Siebdruck und ADR-Etiketten. Štefánikova 15, Piešťany, Slowakei. info@siebi.sk, +421 905 293 566.')

@section('content')

<x-hero eyebrow="Kontakt" heading="Schreiben Sie uns oder rufen Sie an" />

<x-section>
    <div class="grid gap-12 md:grid-cols-2">
        <div>
            <h2 class="text-xl font-semibold text-brand-950">Kontaktdaten</h2>
            <dl class="mt-4 space-y-3 text-brand-950/80">
                <div>
                    <dt class="text-sm font-medium text-brand-950/50">{{ __('ui.common.address') }}</dt>
                    <dd>Siebi s.r.o.<br>Štefánikova 15/1168<br>921 01 Piešťany, Slowakei</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-brand-950/50">{{ __('ui.common.phone') }}</dt>
                    <dd><a href="tel:+421905293566" class="text-brand-700 hover:text-brand-800">+421 905 293 566</a></dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-brand-950/50">{{ __('ui.common.email') }}</dt>
                    <dd><a href="mailto:info@siebi.sk" class="text-brand-700 hover:text-brand-800">info@siebi.sk</a></dd>
                </div>
            </dl>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-brand-950">{{ __('ui.form.message') }}</h2>
            <div class="mt-4">
                <x-contact-form :locale="$locale" />
            </div>
        </div>
    </div>
</x-section>

@endsection
