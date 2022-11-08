<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserDashboardTest extends TestCase
{

    public function test_user_can_see_the_dashboard()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }
}
