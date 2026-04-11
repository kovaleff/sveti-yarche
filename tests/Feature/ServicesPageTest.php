<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServicesPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function services_page_loads_successfully()
    {
        Service::factory()->count(3)->create();
        
        $response = $this->get('/services');
        
        $response->assertStatus(200);
        $response->assertViewIs('services');
        $response->assertViewHas('services');
    }

    /** @test */
    public function services_page_shows_all_services()
    {
        $services = Service::factory()->count(5)->create();
        
        $response = $this->get('/services');
        
        $response->assertViewHas('services', function ($viewServices) use ($services) {
            return $viewServices->count() === 5;
        });
    }

    /** @test */
    public function services_are_ordered_by_order_column()
    {
        $service1 = Service::factory()->create(['order' => 3]);
        $service2 = Service::factory()->create(['order' => 1]);
        $service3 = Service::factory()->create(['order' => 2]);
        
        $response = $this->get('/services');
        
        $viewServices = $response->viewData('services');
        $this->assertEquals(1, $viewServices->first()->order);
        $this->assertEquals(3, $viewServices->last()->order);
    }

    /** @test */
    public function services_page_has_correct_route()
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
    }

    /** @test */
    public function services_page_works_without_services()
    {
        $response = $this->get('/services');
        
        $response->assertStatus(200);
        $response->assertViewHas('services');
        $this->assertCount(0, $response->viewData('services'));
    }

    /** @test */
    public function service_data_is_displayed_correctly()
    {
        $service = Service::factory()->create([
            'title' => 'Test Service',
            'content' => 'Test Description',
            'price' => 5000,
        ]);
        
        $response = $this->get('/services');
        
        $response->assertSee('Test Service');
        $response->assertSee('Test Description');
    }
}
