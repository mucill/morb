<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    public function testExample()
    {
        $this->get('/login');

        $this->assertEquals(
            'Login', $this->response->getContent()
        );
    }

}
