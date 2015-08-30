<?php

include_once 'SubjectAbstract.php';

class Performer extends SubjectAbstract
{
    public function create($userName, $name, $email)
    {
        $this->userName = $userName;
        $this->name     = $name;
        $this->email    = $email;

        // .....
        $this->notifyObserver('Performer');
    }
}
