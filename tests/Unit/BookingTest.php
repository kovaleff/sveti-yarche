<?php

namespace Tests\Unit;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_booking()
    {
        $service = Service::factory()->create();
        $booking = Booking::factory()->create([
            'id_service' => $service->id,
        ]);
        
        $this->assertInstanceOf(Booking::class, $booking);
        $this->assertDatabaseHas('bookings', [
            'name' => $booking->name,
            'phone' => $booking->phone,
            'id_service' => $service->id,
        ]);
    }

    /** @test */
    public function booking_has_correct_fillable_attributes()
    {
        $booking = new Booking();
        
        $this->assertContains('name', $booking->getFillable());
        $this->assertContains('phone', $booking->getFillable());
        $this->assertContains('id_service', $booking->getFillable());
        $this->assertContains('booking_date', $booking->getFillable());
    }

    /** @test */
    public function booking_belongs_to_service()
    {
        $service = Service::factory()->create();
        $booking = Booking::factory()->create([
            'id_service' => $service->id,
        ]);
        
        $this->assertInstanceOf(Service::class, $booking->service);
        $this->assertEquals($service->id, $booking->service->id);
    }
}
