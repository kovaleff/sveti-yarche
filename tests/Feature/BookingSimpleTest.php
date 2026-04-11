<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Тесты для функционала бронирования
 */
class BookingSimpleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function booking_page_loads()
    {
        $article = Article::factory()->booking()->create();
        Service::factory()->count(3)->create();

        $response = $this->get('/booking');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_booking_in_database()
    {
        $service = Service::factory()->create();
        
        $booking = Booking::factory()->create([
            'id_service' => $service->id,
        ]);

        $this->assertDatabaseHas('bookings', [
            'name' => $booking->name,
            'phone' => $booking->phone,
            'id_service' => $service->id,
        ]);
    }

    /** @test */
    public function booking_belongs_to_service()
    {
        $service = Service::factory()->create();
        $booking = Booking::factory()->create([
            'id_service' => $service->id,
        ]);

        $this->assertEquals($service->id, $booking->service->id);
    }

    /** @test */
    public function booking_page_shows_services()
    {
        $article = Article::factory()->booking()->create();
        Service::factory()->count(5)->create();

        $response = $this->get('/booking');

        $response->assertViewHas('services');
        $this->assertEquals(5, $response->viewData('services')->count());
    }
}
