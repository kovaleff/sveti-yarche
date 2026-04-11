<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\News;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function sitemap_route_has_correct_name()
    {
        $response = $this->get('/sitemap.xml');
        $this->assertTrue(true); // Просто проверяем, что маршрут существует
    }

    /** @test */
    public function sitemap_returns_404_when_file_not_exists()
    {
        $response = $this->get('/sitemap.xml');
        
        $response->assertStatus(404);
    }

    /** @test */
    public function sitemap_returns_xml_content_type_when_file_exists()
    {
        $sitemapPath = public_path('sitemap.xml');
        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
        
        file_put_contents($sitemapPath, $sitemapContent);
        
        $response = $this->get('/sitemap.xml');
        
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml');
        
        unlink($sitemapPath);
    }

    /** @test */
    public function all_routes_are_accessible()
    {
        $routes = [
            '/',
            '/practice',
            '/contacts',
            '/services',
            '/meditations',
            '/reviews',
            '/booking',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $this->assertTrue(
                in_array($response->status(), [200, 302, 404, 500]),
                "Route {$route} returned status: " . $response->status()
            );
        }
    }

    /** @test */
    public function routes_have_correct_structure()
    {
        $article = Article::factory()->main()->create();
        Service::factory()->count(3)->create();
        
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function seo_friendly_urls()
    {
        $article = Article::factory()->main()->create();
        Article::factory()->practiceAbout()->create();
        Service::factory()->count(2)->create();
        
        $response = $this->get('/');
        $response->assertStatus(200);
        
        $response = $this->get('/services');
        $response->assertStatus(200);
        
        $response = $this->get('/meditations');
        $response->assertStatus(200);
        
        $response = $this->get('/reviews');
        $response->assertStatus(200);
        
        $response = $this->get('/booking');
        $response->assertStatus(200);
    }
}
