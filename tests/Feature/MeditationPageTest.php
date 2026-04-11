<?php

namespace Tests\Feature;

use App\Models\Meditation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MeditationPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function meditations_page_loads_successfully()
    {
        Meditation::factory()->count(3)->create();
        
        $response = $this->get(route('meditations'));
        
        $response->assertStatus(200);
        $response->assertViewIs('meditations');
        $response->assertViewHas('meditations');
    }

    /** @test */
    public function meditations_page_shows_all_meditations()
    {
        $meditations = Meditation::factory()->count(5)->create();
        
        $response = $this->get(route('meditations'));
        
        $response->assertViewHas('meditations', function ($viewMeditations) use ($meditations) {
            return $viewMeditations->count() === 5;
        });
    }

    /** @test */
    public function meditations_are_ordered_by_order_column()
    {
        $meditation1 = Meditation::factory()->create(['order' => 3]);
        $meditation2 = Meditation::factory()->create(['order' => 1]);
        $meditation3 = Meditation::factory()->create(['order' => 2]);
        
        $response = $this->get(route('meditations'));
        
        $viewMeditations = $response->viewData('meditations');
        $this->assertEquals(1, $viewMeditations->first()->order);
        $this->assertEquals(3, $viewMeditations->last()->order);
    }

    /** @test */
    public function meditations_page_has_correct_route()
    {
        $response = $this->get('/meditations');
        $response->assertStatus(200);
    }

    /** @test */
    public function meditations_page_works_without_meditations()
    {
        $response = $this->get(route('meditations'));
        
        $response->assertStatus(200);
        $response->assertViewHas('meditations');
        $this->assertCount(0, $response->viewData('meditations'));
    }

    /** @test */
    public function meditation_data_is_displayed_correctly()
    {
        $meditation = Meditation::factory()->create([
            'title' => 'Test Meditation',
            'content' => 'Test Content',
        ]);
        
        $response = $this->get(route('meditations'));
        
        $response->assertSee('Test Meditation');
        $response->assertSee('Test Content');
    }

    /** @test */
    public function meditation_has_timestamps_disabled()
    {
        $meditation = new Meditation();
        
        $this->assertFalse($meditation->usesTimestamps());
    }

    /** @test */
    public function meditation_fillable_attributes()
    {
        $meditation = new Meditation();
        
        $this->assertContains('title', $meditation->getFillable());
        $this->assertContains('content', $meditation->getFillable());
        $this->assertContains('order', $meditation->getFillable());
    }
}
