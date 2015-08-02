<?php

include_once 'ObserverInterface.php';

class MailSender implements ObserverInterface
{
    public function doNotify($type, $userName, $name, $email)
    {
        // ....
        print 'Mail is sent to ' . $type . '!<br />';
        print 'User name: ' . $userName . '<br />';
        print 'Full name: ' . $name . '<br />';
        print 'Email Address: ' . $email . '<br />';
        print '**********************<br />';
    }
}
