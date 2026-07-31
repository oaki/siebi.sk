@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Impressum | Siebi s.r.o.')
@section('meta_description', 'Unternehmens- und Registrierungsangaben von Siebi s.r.o.')

@section('content')

<x-hero eyebrow="Rechtliches" heading="Impressum" />

<x-section>
    <div class="max-w-2xl">
        <dl class="space-y-4 text-brand-950/80">
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">Firmenname</dt>
                <dd class="col-span-2">Siebi s.r.o.</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">Sitz</dt>
                <dd class="col-span-2">Štefánikova 15/1168, 921 01 Piešťany, Slowakei</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">Handelsregisternummer (IČO)</dt>
                <dd class="col-span-2">36270211</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">Steuernummer (DIČ)</dt>
                <dd class="col-span-2">2021993446</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">E-Mail</dt>
                <dd class="col-span-2"><a href="mailto:info@siebi.sk" class="text-brand-700 hover:text-brand-800">info@siebi.sk</a></dd>
            </div>
            <div class="grid grid-cols-3 gap-4 pb-3">
                <dt class="font-medium text-brand-950/50">Telefon</dt>
                <dd class="col-span-2"><a href="tel:+421905293566" class="text-brand-700 hover:text-brand-800">+421 905 293 566</a></dd>
            </div>
        </dl>
    </div>
</x-section>

@endsection
