<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Meditation;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AllRoutesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function all_public_routes_load_successfully()
    {
        $article = Article::factory()->main()->create();
        Article::factory()->practiceAbout()->create();
        Service::factory()->count(3)->create();
        Meditation::factory()->count(2)->create();
        Review::factory()->count(2)->create();

        $routes = [
            '/' => 200,
            '/practice' => 200,
            '/contacts' => 200,
            '/services' => 200,
            '/meditations' => 200,
            '/reviews' => 200,
            '/booking' => 200,
        ];

        foreach ($routes as $route => $expectedStatus) {
            $response = $this->get($route);
            $response->assertStatus($expectedStatus);
        }
    }

    /** @test */
    public function non_existent_route_returns_404()
    {
        $response = $this->get('/non-existent-route-12345');
        
        $response->assertStatus(404);
    }
}
