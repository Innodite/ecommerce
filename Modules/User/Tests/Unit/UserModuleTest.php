<?php

namespace Modules\User\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_creates_a_new_user(): void
    {
       $user = $this->post('users', [
            'name' => 'Anthony',
            'email' => 'anthonyfilgueira@hotmail.com',
            'password' => '123456',
        ])->assertSee('user.save');
    }
}
