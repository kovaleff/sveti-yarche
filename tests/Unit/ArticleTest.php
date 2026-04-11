<?php

namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_article()
    {
        $article = Article::factory()->create();
        
        $this->assertInstanceOf(Article::class, $article);
        $this->assertDatabaseHas('articles', [
            'title' => $article->title,
            'slug' => $article->slug,
        ]);
    }

    /** @test */
    public function article_has_correct_fillable_attributes()
    {
        $article = new Article();
        
        $this->assertContains('title', $article->getFillable());
        $this->assertContains('content', $article->getFillable());
        $this->assertContains('slug', $article->getFillable());
        $this->assertContains('main_image', $article->getFillable());
    }

    /** @test */
    public function article_can_have_main_slug()
    {
        $article = Article::factory()->main()->create();
        
        $this->assertEquals('main', $article->slug);
    }

    /** @test */
    public function article_can_have_booking_slug()
    {
        $article = Article::factory()->booking()->create();
        
        $this->assertEquals('booking', $article->slug);
    }

    /** @test */
    public function article_can_have_practice_about_slug()
    {
        $article = Article::factory()->practiceAbout()->create();
        
        $this->assertEquals('practice-about', $article->slug);
    }

    /** @test */
    public function article_slug_is_unique()
    {
        $article1 = Article::factory()->create(['slug' => 'unique-slug']);
        $article2 = Article::factory()->create(['slug' => 'another-unique-slug']);
        
        $this->assertNotEquals($article1->slug, $article2->slug);
    }

    /** @test */
    public function article_can_have_main_image()
    {
        $article = Article::factory()->create([
            'main_image' => 'path/to/image.jpg',
        ]);
        
        $this->assertEquals('path/to/image.jpg', $article->main_image);
    }

    /** @test */
    public function article_content_can_be_long()
    {
        $article = Article::factory()->create();
        
        $this->assertIsString($article->content);
        $this->assertGreaterThan(0, strlen($article->content));
    }
}
