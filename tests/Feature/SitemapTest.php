<?php

namespace Tests\Feature;

use App\Support\Pages;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    public function test_sitemap_is_valid_xml_with_one_url_per_page_per_locale(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertHeader('Content-Type', 'application/xml');

        $xml = simplexml_load_string($response->getContent());
        $this->assertNotFalse($xml, 'sitemap.xml is not valid XML');

        $expectedCount = count(Pages::LOCALES) * count(config('pages'));
        $this->assertCount($expectedCount, $xml->url);
    }

    public function test_robots_txt_points_to_the_sitemap(): void
    {
        // public/robots.txt is served as a static file by the real web
        // server, not through Laravel's router — so this checks the file
        // on disk rather than making an HTTP request.
        $contents = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('Sitemap: https://siebi.sk/sitemap.xml', $contents);
    }
}
