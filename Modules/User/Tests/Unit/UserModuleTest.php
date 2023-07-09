<?php

namespace Modules\User\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    public function test_creates_a_new_user(): void
    {
        $this->post(route('user.store'), [
            'name' => '',
            'email' => '',
            'password' => '',
        ])->assertSee('Procesando informacion');
    }
}
