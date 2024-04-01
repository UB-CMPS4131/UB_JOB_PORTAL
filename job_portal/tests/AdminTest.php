<?php

require_once 'admin.php';

use PHPUnit\FrameWork\TestCase;

class AdminTest extends TestCase
{
    public function testGetAdminInfo()
    {
        $admin = new Admin('admin_user', 'admin@example.com');
        $expected = [
            'username' => 'admin_user',
            'email' => 'admin@example.com'
        ];

        $this->asserEquals($expected, $admin->getAdminInfo());
    }
}