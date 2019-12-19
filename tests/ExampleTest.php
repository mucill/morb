<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testTrue()
    {
        $this->get('/test');
        $this->assertStringContainsString('true', $this->response->getContent());
    }

    public function testMinimalLengthIsFour()
    {
        $this->get('/test');

        $this->assertEquals(
            4, strlen($this->response->getContent())
        );
    }
}
