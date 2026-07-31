<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use App\Http\Middleware\LogPageView;
use App\Http\Middleware\SetLocale;
use App\Support\Pages;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/sk');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::post('/kontakt-formular', [ContactController::class, 'store'])->name('contact.store');

Route::middleware([SetLocale::class, LogPageView::class])->group(function () {
    foreach (Pages::LOCALES as $locale) {
        foreach (config('pages') as $key => $slugs) {
            $path = $slugs[$locale] === '' ? "/{$locale}" : "/{$locale}/{$slugs[$locale]}";

            Route::get($path, [PageController::class, 'show'])
                ->defaults('locale', $locale)
                ->defaults('page', $key)
                ->name("page.{$locale}.{$key}");
        }
    }
});
