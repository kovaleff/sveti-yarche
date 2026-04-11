<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Тесты для Orchid CMS админ-панели
 * Примечание: Orchid использует собственную систему аутентификации
 */
class OrchidAdminTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_user_can_be_created()
    {
        $admin = User::factory()->admin()->create();
        
        $this->assertDatabaseHas('users', [
            'email' => $admin->email,
            'name' => $admin->name,
        ]);
        
        $this->assertArrayHasKey('platform.index', $admin->permissions);
    }

    /** @test */
    public function user_has_permissions_attribute()
    {
        $user = User::factory()->create();
        
        // Orchid User имеет permissions
        $this->assertIsArray($user->permissions ?? []);
    }

    /** @test */
    public function admin_permissions_are_set_correctly()
    {
        $admin = User::factory()->admin()->create();
        
        $this->assertTrue($admin->permissions['platform.index']);
        $this->assertTrue($admin->permissions['platform.systems']);
    }

    /** @test */
    public function regular_user_has_empty_permissions()
    {
        $user = User::factory()->create();
        
        $this->assertEmpty($user->permissions ?? []);
    }
}
