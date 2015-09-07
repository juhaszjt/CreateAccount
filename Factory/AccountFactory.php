<?php

include_once 'Account/Performer.php';
include_once 'Account/Studio.php';
include_once 'Account/Member.php';

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
