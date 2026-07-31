<?php

namespace Tests\Feature;

use App\Support\Pages;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public static function pageProvider(): array
    {
        // Data providers run before the Laravel app is bootstrapped, so
        // config()/the container aren't available — read the plain array
        // straight from the config file instead.
        $pages = require __DIR__.'/../../config/pages.php';

        $cases = [];

        foreach (Pages::LOCALES as $locale) {
            foreach (array_keys($pages) as $key) {
                $cases["{$locale}/{$key}"] = [$locale, $key];
            }
        }

        return $cases;
    }

    #[DataProvider('pageProvider')]
    public function test_every_localized_page_renders(string $locale, string $key): void
    {
        $response = $this->get(Pages::path($key, $locale));

        $response->assertOk();
        $response->assertSee('Siebi s.r.o.', escape: false);
    }

    #[DataProvider('pageProvider')]
    public function test_every_page_has_hreflang_alternates_for_all_locales(string $locale, string $key): void
    {
        $response = $this->get(Pages::path($key, $locale));

        foreach (Pages::LOCALES as $altLocale) {
            $response->assertSee('hreflang="'.$altLocale.'"', escape: false);
        }
    }

    public function test_root_redirects_to_slovak_home(): void
    {
        $this->get('/')->assertRedirect('/sk');
    }

    public function test_unknown_locale_is_not_found(): void
    {
        $this->get('/fr')->assertNotFound();
    }

    public function test_unknown_slug_in_a_known_locale_is_not_found(): void
    {
        $this->get('/sk/does-not-exist')->assertNotFound();
    }

    public function test_language_switcher_links_to_the_same_page_in_each_locale(): void
    {
        $response = $this->get('/sk/adr-nalepky');

        $response->assertSee('href="/en/adr-labels"', escape: false);
        $response->assertSee('href="/de/adr-etiketten"', escape: false);
    }
}
