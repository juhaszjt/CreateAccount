<?php

include_once 'AccountStrategyAbstract.php';
include_once 'AccountFactory.php';

class StudioStrategy extends AccountStrategyAbstract
{
	public function create($userName, $name, $email)
	{
		$accountFactory = new AccountFactory();

		$accountObject = $accountFactory->make('Studio');

		$this->subscribeObservers($accountObject);

		$accountObject->create($userName, $name, $email);
	}
}
