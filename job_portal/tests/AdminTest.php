<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    public function testGetAdminInfo()
    {
        $admin = new Admin('admin_user', 'admin@example.com');
        $expected = [
            'username' => 'admin_user',
            'email' => 'admin@example.com'
        ];

        $this->assertEquals($expected, $admin->getAdminInfo());
    }
}