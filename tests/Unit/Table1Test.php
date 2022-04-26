<?php

namespace Tests\Unit;

use Tests\TestCase;

class Table1Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get('/table1');
        $response->assertOk();
    }
}
