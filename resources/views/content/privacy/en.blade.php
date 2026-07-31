@extends('layouts.app')
@php use App\Support\Pages; @endphp

@section('title', 'Privacy Policy | Siebi s.r.o.')
@section('meta_description', 'How Siebi s.r.o. processes personal data submitted via the contact form.')

@section('content')

<x-hero eyebrow="Legal" heading="Privacy Policy" />

<x-section>
    <div class="max-w-3xl space-y-1 text-brand-950/80">
        <p>The operator of siebi.sk and the controller of personal data is Siebi s.r.o., Štefánikova 15/1168, 921 01 Piešťany, Slovakia, Company ID (IČO) 36270211.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">What data we process</h2>
        <p>Through the contact form we collect your name, optionally your company name, email address, phone number (if provided), and the content of your message.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Purpose</h2>
        <p>We use this data solely to respond to your enquiry or prepare a quote. We do not use it for marketing without your consent and do not share it with any third party.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Retention</h2>
        <p>We keep communication data only for as long as necessary to handle your request and any resulting business relationship, and no longer than required by applicable accounting and tax regulations.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Your rights</h2>
        <p>You may request access to, correction of, or deletion of your personal data. Contact us at <a href="mailto:info@siebi.sk" class="text-brand-700 hover:text-brand-800">info@siebi.sk</a>.</p>

        <h2 class="mt-8 text-lg font-semibold text-brand-950">Cookies</h2>
        <p>This site does not use tracking or advertising cookies. We measure visits anonymously on the server side, without storing an IP address or any browser identifier.</p>
    </div>
</x-section>

@endsection
