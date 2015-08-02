<?php

interface SubjectInterface
{
    public function subscribeObserver(ObserverInterface $observer);
    public function unSubscribeObserver(ObserverInterface $observer);
    public function notifyObserver();
}
