<?php

namespace Tests\Unit;

use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get('/welcome');
        $response->assertOk();
    }
}
