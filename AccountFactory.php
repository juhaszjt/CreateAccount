<?php

include_once 'Performer.php';
include_once 'Studio.php';
include_once 'Member.php';

class AccountFactory
{
    public function make($accountType)
    {
        switch($accountType)
        {
            case 'Performer':
                $account = new Performer();
                break;
            case 'Studio':
                $account = new Studio();
                break;
            case 'Member':
                $account = new Member();
                break;
        }

        return $account;
    }
}
