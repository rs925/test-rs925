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

        $user = User::find(51);
        $this -> assertTrue($user->delete());

    }
}
