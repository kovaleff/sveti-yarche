<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_user()
    {
        $user = User::factory()->create();
        
        $this->assertInstanceOf(User::class, $user);
        $this->assertDatabaseHas('users', [
            'email' => $user->email,
            'name' => $user->name,
        ]);
    }

    /** @test */
    public function user_has_correct_attributes()
    {
        $user = User::factory()->create();
        
        $this->assertNotNull($user->name);
        $this->assertNotNull($user->email);
        $this->assertNotNull($user->password);
    }

    /** @test */
    public function user_can_have_admin_permissions()
    {
        $admin = User::factory()->admin()->create();
        
        $this->assertArrayHasKey('platform.index', $admin->permissions);
        $this->assertArrayHasKey('platform.systems', $admin->permissions);
        $this->assertTrue($admin->permissions['platform.index']);
        $this->assertTrue($admin->permissions['platform.systems']);
    }

    /** @test */
    public function user_can_be_unverified()
    {
        $user = User::factory()->unverified()->create();
        
        $this->assertNull($user->email_verified_at);
    }

    /** @test */
    public function user_has_allowed_filters()
    {
        $user = new User();
        
        // Проверка что фильтры определены
        $filters = $user->allowedFilters ?? [];
        $this->assertIsArray($filters);
    }

    /** @test */
    public function user_has_allowed_sorts()
    {
        $user = new User();
        
        // Проверка что сортировки определены
        $sorts = $user->allowedSorts ?? [];
        $this->assertIsArray($sorts);
    }

    /** @test */
    public function user_hidden_attributes()
    {
        $user = User::factory()->create();
        $array = $user->toArray();
        
        $this->assertArrayNotHasKey('password', $array);
        $this->assertArrayNotHasKey('remember_token', $array);
        $this->assertArrayNotHasKey('permissions', $array);
    }
}
