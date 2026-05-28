<?php

namespace App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class HomeTest extends CIUnitTestCase
{
    // FeatureTestTrait is required to use $this->get()
    use FeatureTestTrait;

    public function testHomePage()
    {
        // Simulate a GET request to the root URL ('/')
        $result = $this->get('/');
        
        // Assert that the page loads successfully (HTTP 200 OK)
        $result->assertStatus(200);
    }
}