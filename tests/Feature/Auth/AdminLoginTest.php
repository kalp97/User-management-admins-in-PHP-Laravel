<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admin_can_view_a_login_form()
    {
        $response = $this->get('/admin/login');
        $response->assertSuccessful();

    }
}
