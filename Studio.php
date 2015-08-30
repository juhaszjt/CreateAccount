<?php

include_once 'SubjectAbstract.php';

class Studio extends SubjectAbstract
{
	public function create($userName, $name, $email)
	{
		$this->userName = $userName;
		$this->name     = $name;
		$this->email    = $email;

		// .....
		$this->notifyObserver('Studio');
	}
}
