<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Общие настройки для всех тестов
        $this->withoutVite();
    }

    /**
     * Авторизоваться как пользователь
     */
    protected function actingAsUser($user = null)
    {
        $user = $user ?? \App\Models\User::factory()->create();
        return $this->actingAs($user);
    }

    /**
     * Авторизоваться как администратор
     */
    protected function actingAsAdmin($user = null)
    {
        $user = $user ?? \App\Models\User::factory()->admin()->create();
        return $this->actingAs($user);
    }

    /**
     * Проверить, что страница загруется успешно
     */
    protected function assertPageLoads(string $url, int $expectedStatus = 200)
    {
        $response = $this->get($url);
        $response->assertStatus($expectedStatus);
        return $response;
    }
}
