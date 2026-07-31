<x-mail::message>
# Nová správa z kontaktného formulára (siebi.sk)

**Jazyk stránky:** {{ strtoupper($siteLocale) }}

**Meno:** {{ $data['name'] }}
@if(!empty($data['company']))
**Spoločnosť:** {{ $data['company'] }}
@endif
**E-mail:** {{ $data['email'] }}
@if(!empty($data['phone']))
**Telefón:** {{ $data['phone'] }}
@endif

**Správa:**

{{ $data['message'] }}

<x-mail::button :url="'mailto:'.$data['email']">
Odpovedať na {{ $data['email'] }}
</x-mail::button>

Odoslané zo stránky siebi.sk.
</x-mail::message>
