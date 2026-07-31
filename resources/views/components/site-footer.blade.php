@props(['locale'])

<footer class="border-t border-brand-100 bg-brand-950 text-brand-100">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-12 sm:px-6 md:grid-cols-3">
        <div>
            <img src="/images/siebi-logo.svg" alt="Siebi" class="h-7 w-auto brightness-0 invert">
            <p class="mt-3 text-sm text-brand-300">{{ __('ui.meta.tagline') }}</p>
        </div>

        <div class="text-sm">
            <p class="font-semibold text-white">{{ __('ui.common.address') }}</p>
            <p class="mt-2 text-brand-300">
                Siebi s.r.o.<br>
                Štefánikova 15/1168<br>
                921 01 Piešťany, Slovensko
            </p>
            <p class="mt-3">
                <a href="tel:+421905293566" class="text-brand-100 hover:text-white">+421 905 293 566</a><br>
                <a href="mailto:info@siebi.sk" class="text-brand-100 hover:text-white">info@siebi.sk</a>
            </p>
        </div>

        <div class="text-sm">
            <p class="font-semibold text-white">{{ __('ui.footer.legal') }}</p>
            <ul class="mt-2 space-y-1 text-brand-300">
                <li><a href="{{ \App\Support\Pages::path('privacy', $locale) }}" class="hover:text-white">{{ __('ui.footer.privacy') }}</a></li>
                <li><a href="{{ \App\Support\Pages::path('imprint', $locale) }}" class="hover:text-white">{{ __('ui.footer.imprint') }}</a></li>
            </ul>
            <p class="mt-4 text-xs text-brand-400">{{ __('ui.footer.member_of') }}</p>
        </div>
    </div>

    <div class="border-t border-white/10 px-4 py-4 text-center text-xs text-brand-400 sm:px-6">
        &copy; {{ date('Y') }} Siebi s.r.o. {{ __('ui.footer.rights') }}
    </div>
</footer>
