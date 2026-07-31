<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmitted;
use App\Support\Pages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'sk');
        $locale = in_array($locale, Pages::LOCALES, true) ? $locale : 'sk';

        // Honeypot: a hidden field real visitors never fill in. Bots that
        // blindly fill every field trip it; we pretend to succeed so they
        // don't learn anything, but never send the mail.
        if ($request->filled('website')) {
            return redirect(Pages::path('contact', $locale))->with('contact_sent', true);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'company' => ['nullable', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['nullable', 'string', 'max:40'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(config('mail.contact_to', config('mail.from.address')))
            ->send(new ContactSubmitted($validated, $locale));

        return redirect(Pages::path('contact', $locale))->with('contact_sent', true);
    }
}
