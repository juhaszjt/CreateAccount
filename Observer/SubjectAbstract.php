<?php

include_once 'SubjectInterface.php';

abstract class SubjectAbstract implements SubjectInterface
{
	private $observers = array();

	protected $userName;
	protected $name;
	protected $email;

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

	public function notifyObserver($type)
	{
		foreach($this->observers as $observer)
		{
			$observer->doNotify($type, $this->userName, $this->name, $this->email);
		}
	}

	abstract public function create($userName, $name, $email);
}