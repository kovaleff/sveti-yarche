<?php

namespace Tests\Unit;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_service()
    {
        $service = Service::factory()->create();
        
        $this->assertInstanceOf(Service::class, $service);
        $this->assertDatabaseHas('services', [
            'title' => $service->title,
            'content' => $service->content,
        ]);
    }

    /** @test */
    public function service_has_correct_attributes()
    {
        $service = Service::factory()->create();
        
        $this->assertNotNull($service->title);
        $this->assertNotNull($service->slug);
        $this->assertNotNull($service->content);
        $this->assertIsInt($service->price);
        $this->assertIsInt($service->order);
    }

    /** @test */
    public function services_can_be_ordered()
    {
        $service1 = Service::factory()->create(['order' => 3]);
        $service2 = Service::factory()->create(['order' => 1]);
        $service3 = Service::factory()->create(['order' => 2]);
        
        $sortedServices = Service::query()->orderBy('order')->get();
        
        $this->assertEquals(1, $sortedServices->first()->order);
        $this->assertEquals(3, $sortedServices->last()->order);
    }

    /** @test */
    public function service_price_is_positive()
    {
        $service = Service::factory()->create();
        
        $this->assertGreaterThan(0, $service->price);
    }

    /** @test */
    public function service_slug_is_unique()
    {
        $service1 = Service::factory()->create();
        $service2 = Service::factory()->create();
        
        $this->assertNotEquals($service1->slug, $service2->slug);
    }
}
