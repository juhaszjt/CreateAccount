<?php

include_once 'PerformerStrategy.php';
include_once 'StudioStrategy.php';
include_once 'MemberStrategy.php';

class AccountCreator
{
	public function create($accountType, $userName, $name, $email)
	{
		switch($accountType)
		{
			case 'Performer':
				$accountStrategy = new PerformerStrategy();
				break;
			case 'Studio':
				$accountStrategy = new StudioStrategy();
				break;
			case 'Member':
				$accountStrategy = new MemberStrategy();
				break;
		}

		$accountStrategy->create($userName, $name, $email);
	}
}
