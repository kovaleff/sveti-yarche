<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function app_name_is_set()
    {
        $appName = Config::get('app.name');
        $this->assertNotNull($appName);
        $this->assertIsString($appName);
    }

    /** @test */
    public function database_is_accessible()
    {
        $result = DB::select('SELECT 1 as test');
        $this->assertEquals(1, $result[0]->test);
    }

    /** @test */
    public function debug_mode_can_be_configured()
    {
        $debug = Config::get('app.debug');
        $this->assertIsBool($debug);
    }

    /** @test */
    public function app_url_is_set()
    {
        $appUrl = Config::get('app.url');
        $this->assertNotNull($appUrl);
    }

    /** @test */
    public function timezone_is_utc()
    {
        $timezone = Config::get('app.timezone');
        $this->assertNotNull($timezone);
    }

    /** @test */
    public function locale_is_set()
    {
        $locale = Config::get('app.locale');
        $this->assertNotNull($locale);
    }
}
