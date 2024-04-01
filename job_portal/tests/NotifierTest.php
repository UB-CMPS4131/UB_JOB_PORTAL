<?php 

require_once 'notifier.php';

use PHPUnit\Framework\TestCase;

class NotifierTest extends TestCase
{
    public function testAddNotification()
    {
        $notifier = new Notifier();
        $notifier->addNotification("Notification 1");

        $this->assertEquals(["Notification 1"]);
    }

    public function testGetNotifications()
    {
       $notifier = new Notifier();
       $notifier->addNotification("Notification 1");
       $notifier->addNotification("Notification 2");

       $this->assertEquals(["Notification 1, Notification 2"], $notifier->getNotifications());
    }
}

