<?php

include_once 'Observer/ObserverInterface.php';

class TaskMaker implements ObserverInterface
{
    public function doNotify($type, $userName, $name, $email)
    {
        // ....
        print $type . ' task is created!<br />';
        print 'User name: ' . $userName . '<br />';
        print 'Full name: ' . $name . '<br />';
        print 'Email Address: ' . $email . '<br />';
        print '**********************<br />';
    }
}
