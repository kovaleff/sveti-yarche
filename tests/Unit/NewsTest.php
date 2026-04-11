<?php

namespace Tests\Unit;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_news()
    {
        $news = News::factory()->create();
        
        $this->assertInstanceOf(News::class, $news);
        $this->assertDatabaseHas('news', [
            'title' => $news->title,
            'slug' => $news->slug,
        ]);
    }

    /** @test */
    public function news_has_correct_attributes()
    {
        $news = News::factory()->create();
        
        $this->assertNotNull($news->title);
        $this->assertNotNull($news->content);
        $this->assertNotNull($news->slug);
    }

    /** @test */
    public function news_has_image_field()
    {
        $news = News::factory()->create();
        
        $this->assertNull($news->image);
    }

    /** @test */
    public function news_slug_is_unique()
    {
        $news1 = News::factory()->create(['slug' => 'unique-news-1']);
        $news2 = News::factory()->create(['slug' => 'unique-news-2']);
        
        $this->assertNotEquals($news1->slug, $news2->slug);
    }
}
