<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Booking;
use App\Models\Meditation;
use App\Models\News;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DataIntegrityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_multiple_articles()
    {
        $articles = Article::factory()->count(10)->create();
        
        $this->assertEquals(10, Article::count());
        
        $articles->each(function ($article) {
            $this->assertNotNull($article->title);
            $this->assertNotNull($article->slug);
            $this->assertNotNull($article->content);
        });
    }

    /** @test */
    public function can_create_multiple_services()
    {
        $services = Service::factory()->count(10)->create();
        
        $this->assertEquals(10, Service::count());
        
        $services->each(function ($service) {
            $this->assertNotNull($service->title);
            $this->assertNotNull($service->content);
            $this->assertIsInt($service->price);
            $this->assertIsInt($service->order);
        });
    }

    /** @test */
    public function can_create_multiple_bookings()
    {
        $service = Service::factory()->create();
        $bookings = Booking::factory()->count(10)->create([
            'id_service' => $service->id,
        ]);
        
        $this->assertEquals(10, Booking::count());
        
        $bookings->each(function ($booking) use ($service) {
            $this->assertNotNull($booking->name);
            $this->assertNotNull($booking->phone);
            $this->assertEquals($service->id, $booking->id_service);
        });
    }

    /** @test */
    public function can_create_multiple_reviews()
    {
        $reviews = Review::factory()->count(10)->create();
        
        $this->assertEquals(10, Review::count());
        
        $reviews->each(function ($review) {
            $this->assertNotNull($review->name);
            $this->assertNotNull($review->review);
            $this->assertIsInt($review->stars);
        });
    }

    /** @test */
    public function can_create_multiple_news()
    {
        $news = News::factory()->count(10)->create();
        
        $this->assertEquals(10, News::count());
        
        $news->each(function ($item) {
            $this->assertNotNull($item->title);
            $this->assertNotNull($item->slug);
            $this->assertNotNull($item->content);
        });
    }

    /** @test */
    public function can_create_multiple_meditations()
    {
        $meditations = Meditation::factory()->count(10)->create();
        
        $this->assertEquals(10, Meditation::count());
        
        $meditations->each(function ($meditation) {
            $this->assertNotNull($meditation->title);
            $this->assertNotNull($meditation->content);
        });
    }

    /** @test */
    public function can_create_multiple_users()
    {
        $users = User::factory()->count(10)->create();
        
        $this->assertEquals(10, User::count());
        
        $users->each(function ($user) {
            $this->assertNotNull($user->name);
            $this->assertNotNull($user->email);
            $this->assertNotNull($user->password);
        });
    }

    /** @test */
    public function database_relationships_work_correctly()
    {
        $service = Service::factory()->create();
        $booking = Booking::factory()->create([
            'id_service' => $service->id,
        ]);
        
        $this->assertInstanceOf(Service::class, $booking->service);
        $this->assertEquals($service->id, $booking->service->id);
    }

    /** @test */
    public function service_factory_creates_valid_data()
    {
        $service = Service::factory()->create();
        
        $this->assertDatabaseHas('services', [
            'title' => $service->title,
            'price' => $service->price,
        ]);
    }
}
