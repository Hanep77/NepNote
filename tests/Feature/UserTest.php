<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testInsert() {
        User::create([
            "name" => "hanep",
            "email" => "hanep@gmail.com",
            "password" => bcrypt("rahasia")
        ]);

        self::assertCount(1, User::all());
    }
}
