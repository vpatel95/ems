<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use DatabaseTransactions;
    /** @test */
    public function loginWithCorrectCredentials()
    {
        $response = $this->post('/home', [
        	'email' => 'vedmpatel@gmail.com',
        	'password' => 'secret',
        	'_token' => csrf_token()
        ]);

        $response->assertRedirect('/dashboard');
    }
}
