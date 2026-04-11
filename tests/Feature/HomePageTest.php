<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function home_page_loads_successfully()
    {
        $article = Article::factory()->main()->create();
        
        $response = $this->get('/');
        
        $response->assertStatus(200);
        $response->assertViewIs('index');
        $response->assertViewHas('main');
    }

    /** @test */
    public function home_page_shows_main_article()
    {
        $article = Article::factory()->main()->create([
            'title' => 'Main Article Title',
            'content' => 'Main Article Content',
        ]);
        
        $response = $this->get('/');
        
        $response->assertViewHas('main', function ($viewArticle) use ($article) {
            return $viewArticle->id === $article->id;
        });
    }

    /** @test */
    public function home_page_shows_three_services()
    {
        $article = Article::factory()->main()->create();
        Service::factory()->count(5)->create();
        
        $response = $this->get('/');
        
        $response->assertViewHas('services');
        $services = $response->viewData('services');
        $this->assertCount(3, $services);
    }

    /** @test */
    public function home_page_shows_reviews()
    {
        $article = Article::factory()->main()->create();
        Review::factory()->count(5)->create();
        
        $response = $this->get('/');
        
        $response->assertViewHas('reviews');
        $reviews = $response->viewData('reviews');
        $this->assertLessThanOrEqual(4, $reviews->count());
    }

    /** @test */
    public function home_page_loads_with_data()
    {
        $article = Article::factory()->main()->create();
        Service::factory()->count(3)->create();
        Review::factory()->count(2)->create();
        
        $response = $this->get('/');
        
        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

    /** @test */
    public function services_are_ordered_by_order_column()
    {
        $article = Article::factory()->main()->create();
        $service1 = Service::factory()->create(['order' => 3]);
        $service2 = Service::factory()->create(['order' => 1]);
        $service3 = Service::factory()->create(['order' => 2]);
        
        $response = $this->get('/');
        
        $services = $response->viewData('services');
        $this->assertEquals(1, $services->first()->order);
    }
}
