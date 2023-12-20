<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductTest extends WebTestCase
{
    protected KernelBrowser $client;

    public function testSomething(): void
    {
        $this->client = static::createClient();
        $this->client->jsonRequest('GET', '/product/test');
        $this->assertResponseStatusCodeSame(200);
    }
}