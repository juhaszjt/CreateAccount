<?php

include_once 'SubjectInterface.php';

class Performer implements SubjectInterface
{
    private $observers = array();

    private $userName;
    private $name;
    private $email;

    public function subscribeObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function unSubscribeObserver(ObserverInterface $observer)
    {
        $key = array_search($observer, $this->observers);

        if($key !== false)
        {
            unset($this->observers[$key]);
        }
    }

    public function notifyObserver()
    {
        foreach($this->observers as $observer)
        {
            $observer->doNotify('Performer', $this->userName, $this->name, $this->email);
        }
    }

    public function create($userName, $name, $email)
    {
        $this->userName = $userName;
        $this->name     = $name;
        $this->email    = $email;

        // .....
        $this->notifyObserver();
    }
}
