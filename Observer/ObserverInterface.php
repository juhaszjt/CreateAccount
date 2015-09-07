<?php

interface ObserverInterface
{
    public function doNotify($type, $userName, $name, $email);
}
