@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Obchodné údaje | Siebi s.r.o.')
@section('meta_description', 'Fakturačné a obchodné údaje spoločnosti Siebi s.r.o.')

@section('content')

<x-hero eyebrow="Právne informácie" heading="Obchodné údaje" />

<x-section>
    <div class="max-w-2xl">
        <dl class="space-y-4 text-brand-950/80">
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">Obchodné meno</dt>
                <dd class="col-span-2">Siebi s.r.o.</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">Sídlo</dt>
                <dd class="col-span-2">Štefánikova 15/1168, 921 01 Piešťany, Slovensko</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">IČO</dt>
                <dd class="col-span-2">36270211</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">DIČ</dt>
                <dd class="col-span-2">2021993446</dd>
            </div>
            <div class="grid grid-cols-3 gap-4 border-b border-brand-100 pb-3">
                <dt class="font-medium text-brand-950/50">E-mail</dt>
                <dd class="col-span-2"><a href="mailto:info@siebi.sk" class="text-brand-700 hover:text-brand-800">info@siebi.sk</a></dd>
            </div>
            <div class="grid grid-cols-3 gap-4 pb-3">
                <dt class="font-medium text-brand-950/50">Telefón</dt>
                <dd class="col-span-2"><a href="tel:+421905293566" class="text-brand-700 hover:text-brand-800">+421 905 293 566</a></dd>
            </div>
        </dl>
    </div>
</x-section>

@endsection
