<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PracticePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function practice_page_loads_successfully()
    {
        $article = Article::factory()->practiceAbout()->create();
        
        $response = $this->get(route('practice'));
        
        $response->assertStatus(200);
        $response->assertViewIs('practice');
        $response->assertViewHas('practice');
    }

    /** @test */
    public function practice_page_shows_correct_article()
    {
        $article = Article::factory()->practiceAbout()->create([
            'title' => 'Practice About Title',
            'content' => 'Practice About Content',
        ]);
        
        $response = $this->get(route('practice'));
        
        $response->assertViewHas('practice', function ($viewArticle) use ($article) {
            return $viewArticle->id === $article->id;
        });
    }

    /** @test */
    public function practice_page_loads_with_data()
    {
        $article = Article::factory()->practiceAbout()->create();
        
        $response = $this->get('/practice');
        $response->assertStatus(200);
    }
}
