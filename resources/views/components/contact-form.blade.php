@props(['locale'])

@if (session('contact_sent'))
    <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
        {{ __('ui.form.success') }}
    </div>
@endif

<form method="POST" action="{{ route('contact.store') }}" class="space-y-5">
    @csrf
    <input type="hidden" name="locale" value="{{ $locale }}">

    {{-- Honeypot: hidden from real visitors, catches bots that fill every field --}}
    <div class="absolute left-[-9999px]" aria-hidden="true">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
    </div>

    <div class="grid gap-5 sm:grid-cols-2">
        <div>
            <label for="name" class="block text-sm font-medium text-brand-950">{{ __('ui.form.name') }} <span class="text-accent-600">*</span></label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}"
                   class="mt-1 block w-full rounded-md border border-brand-200 px-3 py-2 text-sm focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
            @error('name') <p class="mt-1 text-xs text-accent-700">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="company" class="block text-sm font-medium text-brand-950">{{ __('ui.form.company') }}</label>
            <input type="text" name="company" id="company" value="{{ old('company') }}"
                   class="mt-1 block w-full rounded-md border border-brand-200 px-3 py-2 text-sm focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-brand-950">{{ __('ui.form.email') }} <span class="text-accent-600">*</span></label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}"
                   class="mt-1 block w-full rounded-md border border-brand-200 px-3 py-2 text-sm focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
            @error('email') <p class="mt-1 text-xs text-accent-700">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="phone" class="block text-sm font-medium text-brand-950">{{ __('ui.form.phone') }}</label>
            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                   class="mt-1 block w-full rounded-md border border-brand-200 px-3 py-2 text-sm focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">
        </div>
    </div>

    <div>
        <label for="message" class="block text-sm font-medium text-brand-950">{{ __('ui.form.message') }} <span class="text-accent-600">*</span></label>
        <textarea name="message" id="message" rows="5" required
                  placeholder="{{ __('ui.form.message_hint') }}"
                  class="mt-1 block w-full rounded-md border border-brand-200 px-3 py-2 text-sm focus:border-brand-500 focus:outline-none focus:ring-1 focus:ring-brand-500">{{ old('message') }}</textarea>
        @error('message') <p class="mt-1 text-xs text-accent-700">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="rounded-full bg-brand-700 px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-brand-800">
        {{ __('ui.form.submit') }}
    </button>
</form>
