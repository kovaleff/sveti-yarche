<?php

namespace Tests\Feature;

use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReviewsPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function reviews_page_loads_successfully()
    {
        Review::factory()->count(3)->create();
        
        $response = $this->get(route('reviews'));
        
        $response->assertStatus(200);
        $response->assertViewIs('reviews');
    }

    /** @test */
    public function reviews_page_has_correct_route()
    {
        $response = $this->get('/reviews');
        $response->assertStatus(200);
    }

    /** @test */
    public function reviews_page_does_not_require_authentication()
    {
        $response = $this->get(route('reviews'));
        
        $response->assertStatus(200);
    }

    /** @test */
    public function reviews_page_works_without_reviews()
    {
        $response = $this->get(route('reviews'));
        
        $response->assertStatus(200);
    }
}
