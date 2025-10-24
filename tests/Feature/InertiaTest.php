<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Inertia\Testing\AssertableInertia;
use Tests\TestCase;

class InertiaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {


        $this->get('/about')
            ->assertInertia(fn(AssertableInertia $page) =>
                $page->component('About')
                    ->has('info')
                    ->where('info', 'Это страница About')
            );
    }
}
