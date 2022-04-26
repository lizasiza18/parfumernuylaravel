<?php

namespace Tests\Unit;

use Tests\TestCase;

class TableTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get('/table');
        $response->assertOk();
    }
}
