<?php

namespace Tests\Feature;


use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{
    use RefreshDatabase;
    
    public function testGetHomePage()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get(route('objects'));
        $response->assertOk();
    }
}