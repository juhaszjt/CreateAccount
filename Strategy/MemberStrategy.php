<?php

include_once 'AccountStrategyAbstract.php';
include_once 'Factory/AccountFactory.php';

class MemberStrategy extends AccountStrategyAbstract
{
	public function create($userName, $name, $email)
	{
		$accountFactory = new AccountFactory();

		$accountObject = $accountFactory->make('Member');

		$this->subscribeObservers($accountObject);

		$accountObject->create($userName, $name, $email);
	}

	public function subscribeTaskObservers(SubjectAbstract $accountObject)
	{
		// We don't want member task.
	}
}
