<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactsPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function contacts_page_loads_successfully()
    {
        $response = $this->get('/contacts');
        
        $response->assertStatus(200);
        $response->assertViewIs('contacts-page');
    }

    /** @test */
    public function contacts_page_is_accessible_without_auth()
    {
        $response = $this->get('/contacts');
        $response->assertStatus(200);
    }
}
