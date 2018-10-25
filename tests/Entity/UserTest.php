<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase
{
    public function testEntity()
    {
        $user = new User();
        $user->setUsername('Username test');
        $user->setPassword('Userpassword test');
        $user->setEmail('usertest@test.com');
        $user->setRole('ROLE_ADMIN');

        $this->assertEquals('Username test', $user->getUsername());
        $this->assertEquals('Userpassword test', $user->getPassword());
        $this->assertEquals('usertest@test.com', $user->getEmail());
        $this->assertEquals('ROLE_ADMIN', $user->getRole());
        $this->assertNull($user->getId());
    }
}