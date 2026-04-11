<?php

namespace Tests\Unit;

use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_review()
    {
        $review = Review::factory()->create();
        
        $this->assertInstanceOf(Review::class, $review);
        $this->assertDatabaseHas('reviews', [
            'name' => $review->name,
            'review' => $review->review,
        ]);
    }

    /** @test */
    public function review_has_correct_attributes()
    {
        $review = Review::factory()->create();
        
        $this->assertNotNull($review->name);
        $this->assertNotNull($review->review);
        $this->assertIsInt($review->stars);
        $this->assertGreaterThanOrEqual(1, $review->stars);
        $this->assertLessThanOrEqual(5, $review->stars);
    }

    /** @test */
    public function review_stars_are_between_1_and_5()
    {
        $review = Review::factory()->create();
        
        $this->assertGreaterThanOrEqual(1, $review->stars);
        $this->assertLessThanOrEqual(5, $review->stars);
    }

    /** @test */
    public function review_name_is_from_customer()
    {
        $review = Review::factory()->create();
        
        $this->assertIsString($review->name);
        $this->assertGreaterThan(0, strlen($review->name));
    }

    /** @test */
    public function review_text_is_feedback_content()
    {
        $review = Review::factory()->create();
        
        $this->assertIsString($review->review);
        $this->assertGreaterThan(0, strlen($review->review));
    }
}
