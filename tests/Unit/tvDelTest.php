<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class tvDelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelUser()
    {
        $user = new User();
        $user -> name ='Sonia Satterfield';
        $user -> email = 'hsporer@example.org';
        $user -> password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user -> save();
        $this -> assertTrue($user->delete());
    }
}
