<?php

namespace App\Tests\Service;

use App\Service\UserService;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{

    public function testGetUser(): void
    {
        $service = new UserService();
        self::assertSame("user", $service->getUser());
    }
}