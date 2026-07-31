@props(['heading', 'text' => null, 'buttonLabel', 'buttonHref'])

<section class="bg-brand-700">
    <div class="mx-auto flex max-w-5xl flex-col items-center gap-6 px-4 py-14 text-center sm:px-6 md:flex-row md:justify-between md:text-left">
        <div>
            <h2 class="text-2xl font-bold text-white sm:text-3xl">{{ $heading }}</h2>
            @if ($text)
                <p class="mt-2 max-w-xl text-brand-100">{{ $text }}</p>
            @endif
        </div>
        <a href="{{ $buttonHref }}" class="shrink-0 rounded-full bg-white px-6 py-3 text-sm font-semibold text-brand-800 shadow-sm transition-colors hover:bg-brand-50">
            {{ $buttonLabel }}
        </a>
    </div>
</section>
