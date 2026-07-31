@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Ochrana osobných údajov | Siebi s.r.o.')
@section('meta_description', 'Ako Siebi s.r.o. spracúva osobné údaje z kontaktného formulára.')

@section('content')

<x-hero eyebrow="Právne informácie" heading="Ochrana osobných údajov" />

<x-section>
    <div class="max-w-3xl space-y-1 text-brand-950/80">
        <p>Prevádzkovateľom stránky siebi.sk a spracovateľom osobných údajov je Siebi s.r.o., Štefánikova 15/1168, 921 01 Piešťany, IČO 36270211.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Aké údaje spracúvame</h2>
        <p>Cez kontaktný formulár od vás získavame meno, prípadne názov spoločnosti, e-mailovú adresu, telefónne číslo (ak ho uvediete) a obsah vašej správy.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Na aký účel</h2>
        <p>Tieto údaje používame výlučne na to, aby sme vám mohli odpovedať na vašu otázku alebo pripraviť cenovú ponuku. Nepoužívame ich na marketing bez vášho súhlasu a neposkytujeme ich žiadnej tretej strane.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Ako dlho ich uchovávame</h2>
        <p>Údaje z komunikácie uchovávame len po dobu nevyhnutnú na vybavenie vašej požiadavky a prípadnú následnú obchodnú spoluprácu, najviac však po dobu vyplývajúcu z účtovných a daňových predpisov.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Vaše práva</h2>
        <p>Máte právo požiadať o prístup k svojim osobným údajom, ich opravu alebo výmaz. Kontaktujte nás na <a href="mailto:info@siebi.sk" class="text-brand-700 hover:text-brand-800">info@siebi.sk</a>.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Súbory cookie</h2>
        <p>Stránka nepoužíva cookies na sledovanie návštevníkov ani reklamné cookies. Návštevnosť meriame anonymne na strane servera, bez ukladania IP adresy alebo iného identifikátora do prehliadača.</p>
    </div>
</x-section>

@endsection
