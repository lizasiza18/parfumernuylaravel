<?php

namespace Tests\Unit;

use Tests\TestCase;

class AboutTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get('/about');
        $response->assertOk();
    }
}
