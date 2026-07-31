<?php

namespace App\Support;

class Pages
{
    public const LOCALES = ['sk', 'en', 'de'];

    protected static function map(): array
    {
        return config('pages');
    }

    public static function slug(string $key, string $locale): string
    {
        return static::map()[$key][$locale] ?? '';
    }

    public static function path(string $key, string $locale): string
    {
        $slug = static::slug($key, $locale);

        return $slug === '' ? "/{$locale}" : "/{$locale}/{$slug}";
    }

    /** Find the page key for a given locale + slug, used to resolve incoming requests. */
    public static function keyForSlug(string $locale, string $slug): ?string
    {
        foreach (static::map() as $key => $locales) {
            if (($locales[$locale] ?? null) === $slug) {
                return $key;
            }
        }

        return null;
    }

    /** Build the equivalent URL for the same page in a different locale — used by the language switcher. */
    public static function switchLocale(string $currentKey, string $targetLocale): string
    {
        return static::path($currentKey, $targetLocale);
    }
}
