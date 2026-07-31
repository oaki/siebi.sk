<?php

namespace App\Http\Controllers;

use App\Support\Pages;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [];

        foreach (Pages::LOCALES as $locale) {
            foreach (array_keys(config('pages')) as $key) {
                $urls[] = [
                    'loc' => url(Pages::path($key, $locale)),
                    'alternates' => collect(Pages::LOCALES)->mapWithKeys(
                        fn ($altLocale) => [$altLocale => url(Pages::path($key, $altLocale))]
                    ),
                ];
            }
        }

        $xml = view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
