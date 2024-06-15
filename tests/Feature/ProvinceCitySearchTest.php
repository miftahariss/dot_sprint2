<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProvinceCitySearchTest extends TestCase
{
    use RefreshDatabase;

    public function testSearchProvinces()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'sanctum')->get('/api/search/provinces');
        $response->assertStatus(200);
    }

    public function testSearchCities()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'sanctum')->get('/api/search/cities');
        $response->assertStatus(200);
    }
}
